<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include("head.php");
    ?>
    <title>Index</title>
</head>

<body>
    <div class="main-wrapper">

        <?php
            include("header.php");
        ?>

        <?php
            include("sidebar.php");
        ?>

        <div class="page-wrapper">
            <div class="content">
                <!-- alert-box -->
                <!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Je lakhvu hoy</strong> te lakho.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> -->
                <!-- alert-box End -->
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count">
                            <div class="dash-counts">
                                <h4>10000</h4>
                                <h5 class="gray">Users</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das1">
                            <div class="dash-counts">
                                <h4>20</h4>
                                <h5 class="gray">Guides</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="user-check"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das2">
                            <div class="dash-counts">
                                <h4>1000</h4>
                                <h5 class="gray">Stalls</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das3">
                            <div class="dash-counts">
                                <h4>₹ 1,75,520</h4>
                                <h5 class="gray">Total Revenue</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="file"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-sm-6 col-12 d-flex">
                        <div class="card flex-fill bord">
                            <div class="card-header">
                                <h5 class="card-title">User Engagement Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="s-line-area" class="chart-set"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6 col-12 d-flex">
                        <div class="card flex-fill bord">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">Top Places to Visit</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive dataview">
                                    <table class="table datatable ">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Place</th>
                                                <th>Location</th>
                                                <th>Entry Fees</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Rajpipla Palace</td>
                                                <td>Rajpipla, Narmada district, Gujarat, India</td>
                                                <td>50</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="card mb-0 bord">
                    <div class="card-body">
                        <h4 class="card-title">All Events</h4>
                        <div class="table-responsive dataview">
                            <table class="table datatable ">
                                <thead>

                                    <tr>
                                        <th>#</th>
                                        <th>Event Name</th>
                                        <th>Participants</th>
                                        <th>Date</th>
                                        <th>Fees</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>56</td>
                                        <td>jhg</td>
                                        <td>ufuyt</td>
                                        <td>12-23</td>
                                        <td>5656</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>


    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <script src="../assets/js/feather.min.js"></script>

    <script src="../assets/js/jquery.slimscroll.min.js"></script>

    <script src="../assets/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/dataTables.bootstrap4.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="../assets/plugins/apexchart/chart-data.js"></script>

    <script src="../assets/js/script.js"></script>
</body>

</html>