<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      @import url("https://fonts.cdnfonts.com/css/samarkan");

      .slogan {
        font-family: "Samarkan";
      }
      .hover-underline {
        position: relative;
      }
      .hover-underline::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -3px;
        width: 100%;
        height: 2px;
        background-color: #f8f6f4;
        transform: scaleX(0);
        transition: transform 0.3s ease-in-out;
      }
      .hover-underline:hover::after {
        transform: scaleX(1);
      }
      .ticker-container {
        position: relative;
        overflow: hidden;
        white-space: nowrap;
      }
      .ticker-content {
        display: inline-block;
        animation: tickerMove 20s linear infinite;
      }
      @keyframes tickerMove {
        from {
          transform: translateX(100%);
        }
        to {
          transform: translateX(-100%);
        }
      }

      .ticker-container:hover .ticker-content {
        animation-play-state: paused;
      }
    </style>
  </head>
  <body class="bg-gray-100">
    
    <header class="bg-[#F8F6F4] shadow-md">
      <div
        class="container mx-auto flex items-center justify-between py-4 px-6"
      >
        <div class="flex items-center gap-4">
          <img src="../gandiv.png" alt="Logo 1" class="h-14" />
          <img src="../yatra.png" alt="Logo 2" class="h-14" />
        </div>
        <h1 class="slogan text-3xl text-gray-600 hidden md:block">
          Yatra by Gandiv – Where History Meets Innovation!
        </h1>
        <div class="flex items-center gap-4">
          <img src="../gjrt.png" alt="Logo 4" class="h-14" />
          <img src="../ssiplogo.png" alt="Logo 3" class="h-14" />
        </div>
      </div>
      <nav class="bg-[#C4DFDF] text-gray-600 ps-8">
        <div
          class="container mx-auto flex justify-between items-center px-1 py-2 uppercase font-medium"
        >
          <ul class="hidden md:flex space-x-6">
            <li class="relative group hover-underline">
              <a href="./index" class="px-2 py-2">Home</a>
            </li>
            <li class="relative group hover-underline">
              <a href="#" class="px-2 py-2">Explore</a>
            </li>
            <li class="relative group hover-underline">
              <a href="#" class="px-2 py-2">Bookings ▼</a>
              <ul
                class="absolute left-0 w-48 bg-[#C4DFDF] text-gray-600 rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:translate-y-2 transition-all duration-300 shadow-lg z-50"
              >
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-[#E3F4F4]"
                    >Guide Booking</a
                  >
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-[#E3F4F4]"
                    >Hotel Booking</a
                  >
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-[#E3F4F4]"
                    >Explore Other Business</a
                  >
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-[#E3F4F4]"
                    >Museum</a
                  >
                </li>
              </ul>
            </li>
            <li class="relative group hover-underline">
              <a href="#" class="px-2 py-2">Live Guide</a>
            </li>
            <li class="relative group hover-underline">
              <a href="#" class="px-2 py-2">Events & Activities</a>
            </li>
            <li class="relative group hover-underline">
              <a href="#" class="px-2 py-2">Gallery</a>
            </li>
            <li class="relative group hover-underline">
              <a href="#" class="px-2 py-2">History</a>
            </li>
            <li class="relative group hover-underline">
              <a href="#" class="px-2 py-2">Find Routes</a>
            </li>
            <li class="relative group hover-underline">
              <a href="#" class="px-2 py-2">Contact Us</a>
            </li>
          </ul>
          <div class="relative group mx-10">
            <img
              src="krish.jpg"
              alt="Avatar"
              class="h-10 w-10 rounded-lg cursor-pointer border-2 border-white border-gray-300"
            />

            <div
              class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"
            ></div>

            <ul
              class="absolute right-0 w-48 bg-[#C4DFDF] text-gray-600 rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 shadow-lg z-50"
            >
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-[#E3F4F4]"
                  >Dashboard</a
                >
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-[#E3F4F4]"
                  >My Bookings</a
                >
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-[#E3F4F4]"
                  >Payment History</a
                >
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-red-100"
                  >Logout →</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div
        class="ticker-container bg-[#E3F4F4] text-gray-800 py-2 overflow-hidden"
      >
        <div class="ticker-content whitespace-nowrap gap-10">
          <span>🚀 Special Offer! Get 20% off on all bookings this week! </span>
          <span>🎉 New destinations added! Explore now. </span>
          <span>📢 Customer support available 24/7 for any assistance. </span>
        </div>
      </div>
    </header>
    <script>
      document.querySelectorAll(".group").forEach((menu) => {
        menu.addEventListener("mouseenter", () => {
          menu.querySelector("ul").classList.remove("opacity-0", "invisible");
        });
        menu.addEventListener("mouseleave", () => {
          menu.querySelector("ul").classList.add("opacity-0", "invisible");
        });
      });

      const ticker = document.querySelector(".ticker-content");

      ticker.addEventListener("mouseenter", () => {
        ticker.style.animationPlayState = "paused";
      });

      ticker.addEventListener("mouseleave", () => {
        ticker.style.animationPlayState = "running";
      });
    </script>
  </body>
</html>
