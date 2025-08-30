<!-- Last Updated: 03-04-2025
     Author: Mihir Amin
     -->

<?php
session_start();
require_once './includes/scripts/connection.php';

// Function to generate random room number
function generateRandomNumber($min, $max) {
    return rand($min, $max);
}

// Get max rooms from `hotel_master`
$sql_select_master = "SELECT num_rooms, avail_rooms FROM hotel_master WHERE hotel_id = 1";
$result_master = $conn->query($sql_select_master);
$max = 0;
$availRooms = 0;

if ($row_master = $result_master->fetch_assoc()) {
    $max = $row_master['num_rooms'];
    $availRooms = $row_master['avail_rooms'];
}

// Get already booked rooms
$sql_select_booking = "SELECT room_number FROM hotel_bookings WHERE booking_status = 'confirmed'";
$result_booking = $conn->query($sql_select_booking);
$booked_rooms = [];

while ($row_booking = $result_booking->fetch_assoc()) {
    if (strpos($row_booking['room_number'], ',') !== false) {
        $booked_rooms = array_merge($booked_rooms, explode(',', $row_booking['room_number']));
    } else {
        $booked_rooms[] = $row_booking['room_number'];
    }
}

// Function to generate unique room numbers
function generateUniqueRoomNumbers($numberOfRooms, $max, $booked_rooms) {
    $room_numbers = [];
    while (count($room_numbers) < $numberOfRooms) {
        $new_room = (string)generateRandomNumber(1, $max);
        if (!in_array($new_room, $booked_rooms) && !in_array($new_room, $room_numbers)) {
            $room_numbers[] = $new_room;
        }
    }
    return implode(', ', $room_numbers);
}

// Retrieve booking data only if request comes from hotelbookform.php
$allowPayment = false;

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_SERVER['HTTP_REFERER'])) {
    $referrer = basename(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH));

    if ($referrer === 'hotelbookform.php') {
        $allowPayment = true;

        $roomType = $_POST['room_type'] ?? null;
        $numberOfRooms = $_POST['number_of_rooms'] ?? null;
        $checkin = $_POST['checkin'] ?? null;
        $checkout = $_POST['checkout'] ?? null;
        $firstName = $_POST['first_name'] ?? null;
        $lastName = $_POST['last_name'] ?? null;
        $email = $_POST['email'] ?? null;
        $mobileNumber = $_POST['mobile_number'] ?? null;
        $total = $_POST['total'] ?? null;
        $paymentMethod = $_POST['payment_method'];

        if ($availRooms < $numberOfRooms) {
            die("Not enough rooms available!");
        }

        // Generate random room numbers
        $random_room_number = generateUniqueRoomNumbers($numberOfRooms, $max, $booked_rooms);

        // Store session data before payment
        $_SESSION['hotel_data'] = [
            'roomType' => $roomType,
            'numberOfRooms' => $numberOfRooms,
            'checkin' => $checkin,
            'checkout' => $checkout,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'mobileNumber' => $mobileNumber,
            'total' => $total,
            'paymentMethod' => $paymentMethod,
            'random_room_number' => $random_room_number
        ];
    }
}

// If payment is successful, insert booking
if (isset($_GET['payment_id']) && isset($_SESSION['hotel_data'])) {
    $hotelData = $_SESSION['hotel_data'];
    $paymentId = $_GET['payment_id'];

    $sql = "INSERT INTO hotel_bookings (user_id, hotel_id, check_in_date, check_out_date, num_rooms, room_types, payment_method, total_amount, booking_status, qr_path, room_number) 
            VALUES (1, 1, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $booking_status = 'confirmed';
    $qr_path = '';

    $stmt->bind_param('sssssssss', $hotelData['checkin'], $hotelData['checkout'], $hotelData['numberOfRooms'], $hotelData['roomType'], $hotelData['paymentMethod'], $hotelData['total'], $booking_status, $qr_path, $hotelData['random_room_number']);
    
    if ($stmt->execute()) {
        // Reduce available rooms
        $sql_update_master = "UPDATE hotel_master SET avail_rooms = avail_rooms - ? WHERE hotel_id = 1";
        $stmt_update = $conn->prepare($sql_update_master);
        $stmt_update->bind_param("i", $hotelData['numberOfRooms']);
        $stmt_update->execute();

        $_SESSION['booking_status'] = "Booking Confirmed! Your Room Number(s): " . $hotelData['random_room_number'];
        unset($_SESSION['hotel_data']); // Clear session data

        echo "Booking Done Successfully";
    } else {
        die("Error in booking. Please contact support.");
    }
}
?>

<!-- Razorpay Script -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
window.onload = function () {
    let allowPayment = <?= json_encode($allowPayment) ?>;
    
    if (!allowPayment) {
        console.warn("Payment initiation blocked: Request did not come from hotelbookform.php");
        return;
    }

    let totalAmount = <?= isset($_SESSION['hotel_data']['total']) ? (int)$_SESSION['hotel_data']['total'] : 0 ?>;
    let numRooms = <?= isset($_SESSION['hotel_data']['numberOfRooms']) ? (int)$_SESSION['hotel_data']['numberOfRooms'] : 1 ?>;
    let paymentAmount = totalAmount * numRooms * 100; // Convert to paise

    var options = {
        "key": "rzp_test_rv4pDcdZOwyhIS", // Replace with your Test Key ID
        "amount": paymentAmount,
        "currency": "INR",
        "name": "Hotel Booking",
        "description": "Complete your booking payment",
        "prefill": {
            "name": "<?= isset($_SESSION['hotel_data']['firstName']) ? $_SESSION['hotel_data']['firstName'] . ' ' . $_SESSION['hotel_data']['lastName'] : '' ?>",
            "email": "<?= isset($_SESSION['hotel_data']['email']) ? $_SESSION['hotel_data']['email'] : '' ?>",
            "contact": "<?= isset($_SESSION['hotel_data']['mobileNumber']) ? $_SESSION['hotel_data']['mobileNumber'] : '' ?>"
        },
        "theme": {
            "color": "#3399cc"
        },
        "handler": function (response) {
            alert("Payment successful! Payment ID: " + response.razorpay_payment_id);
            window.location.href = "?payment_id=" + response.razorpay_payment_id;
        }
    };

    var rzp1 = new Razorpay(options);
    rzp1.open();
};
</script>
