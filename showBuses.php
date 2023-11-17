<?php
include("config.php");
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    
<![endif]-->
    <!-- Table  and JS includes -->

    <!-- Alertify includes and styling -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
        .busprint {
            text-align: center;
            /* Center the content horizontally */
            overflow: auto;
            /*  background-image: url(https://img.freepik.com/free-vector/river-flowing-through-sahara-desert-vector-cartoon-illustration-hot-sandy-dunes-landscape-stones-bank-green-plants-growing-near-water-sunlight-flaring-air-blue-sky-with-white-clouds_107791-21962.jpg?w=1380&t=st=1695806253~exp=1695806853~hmac=a37b7c54c94955d7d929afa506219adb196019fd26d93fad7032986b344f1f1f); */
        }

        #seat-display {
            margin: 0 auto;
            /* Center the content horizontally */
            padding: 10px;
            border-radius: 24px;
            background: rgba(196, 189, 189, 0.5);
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(196, 189, 189, 0.25);
        }



        svg {
            height: auto;
            width: 50px;
            transform: rotate(90deg);
            /*Added in v2 */
            transition: 0.5s;

        }

        svg path {

            stroke: black;
            stroke-width: 1px;
        }

        .seat-div {
            display: inline;
            text-align: center;
            position: relative;
        }



        .seat-number {
            color: white;
            position: absolute;
            top: -50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #seat-display {
            width: 40%;
            margin: 0px auto;
            border-radius: 24px;
            background: rgba(196, 189, 189, 0.5);
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(196, 189, 189, 0.25);
        }

        .passprintmd svg {
            transition: 0.5s;
        }

        .passprintmd:hover {
            cursor: pointer;
            filter: drop-shadow(0px 0px 5px rgba(0, 0, 0, 0.5));


        }

        .passprintmd:hover svg {

            width: 54px;
            transition: 0.5s;
        }

        @media (max-width: 1339px) {
            #seat-display {
                min-width: 405px;
            }



        }

        /* Added styles for the v2 */
        .seat-div:hover {
            cursor: pointer;
            filter: drop-shadow(0px 0px 2px black);
            transition: 0.5s;

        }

        svg:hover,
        .seat-number:hover {
            width: 55px;
            transition: 0.5s;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/srms.png" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <!--<span class="logo-text">
                             dark Logo text -->
                        <!--  <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" />-->

                        <!-- </span> -->
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->

                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="generatePass.php" aria-expanded="false"><i class="fas fa-ticket-alt"></i><span class="hide-menu ">&nbsp;Generate Pass</span></li></a>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link  " href="showBuses.php" aria-expanded="false"><i class="fas fa-bus"></i><span class="hide-menu">&nbsp;Show Buses</span></a>
        
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link  " href="report.php" aria-expanded="false"><i class="fas fa-file-alt"></i>
</i><span class="hide-menu">&nbsp;Gendrate Report</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link  " href="addBuses.php" aria-expanded="false"> <i class="fas fa-plus"></i> 
</i><span class="hide-menu">&nbsp;Add Buses</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link  "
                                href="Deallocation.php" aria-expanded="false"> <i class="fas fa-trash"></i>
                                </i><span class="hide-menu">&nbsp;Delete Seats</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link  "
                                href="department.php" aria-expanded="false"> <i class="fas fa-building"></i>
                                </i><span class="hide-menu">&nbsp;Department</span></a>
                        </li>
                        <li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="busForm.php" aria-expanded="false">
        <i class="fas fa-pencil-alt"></i> <!-- Use a form-related icon, e.g., 'fas fa-pencil-alt' from Font Awesome -->
        <span class="hide-menu">&nbsp;Fill Form</span>
    </a>

                    </ul>


                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div class="row formContainer">
                    <div class="col-12 col-lg-12">

                        <div class="card mt-custom">


                            <div class="card">
                                <form id="busForm" class="busForm form-horizontal">
                                    <div class="card-body">


                                        <h4 class="card-title">Bus Layout</h4>
                                        <div class="form-group row align-items-center">
                                            <label for="selectedBus" class="col-sm-3  control-label col-form-label">Bus Number</label>
                                            <div class="col-sm-9">

                                                <select id="selectedBus" class="form-select form-control shadow btn-rounded  required">
                                                    <option disabled selected>Select bus number</option>
                                                    <?php
                                                    $query = "SELECT busno FROM bus;";
                                                    $result = mysqli_query($db, $query);

                                                    if ($result) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            echo '<option value="' . $row['busno'] . '">' . $row['busno'] . '</option>';
                                                        }
                                                    } else {
                                                        echo "Error fetching bus numbers: " . mysqli_error($db);
                                                    }
                                                    ?>
                                                </select>

                                            </div>
                                        </div>





                                        <div class="border-bottom">
                                            <div class="card-body">
                                                <button type="submit" class="btn btn-success btn-rounded px-3 shadow">Show seats</button>

                                            </div>
                                        </div>
                                </form>

                                <!--  -->
                                <div class="container-fluid">
                                    <div class="row justify-content-center mt-3">
                                        <div class="col-md-8">
                                            <div class="legend-div row mb-4">
                                                <div class="col d-flex align-items-center">
                                                    <div class="div rounded" style="width:20px;height:20px;background-color: #98C1D9;"></div>
                                                    <span class="pl-2">Male</span>
                                                </div>
                                                <div class="col d-flex align-items-center">
                                                    <div class="div rounded" style="width:20px;height:20px;background-color: pink;"></div>
                                                    <span class="pl-2">Female</span>
                                                </div>
                                                <div class="col d-flex align-items-center">
                                                    <div class="div rounded" style="width:20px;height:20px;background-color: grey;"></div>
                                                    <span class="pl-2">Unallocated</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="busprint " style="display: none; ">
                                        <div id="seat-display" class="px-0 py-3">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Allocated Modal -->
                            <div class="modal fade" id="allocatedmodal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Seat Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div id="student-details"></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" onclick="console.log('Button Clicked');window.print();">Understood</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Unallocated modal -->
                            <div class="modal fade" id="unallocatedmodal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="lead">

                                            </p>
                                            <form id="bushit" class="bushitform form-horizontal">
                                                <div class="form-group row align-items-center">
                                                    <label for="regno" class="col-sm-3  control-label col-form-label">Register Number</label>

                                                    <div class="col-sm-9">

                                                        <input type="text" class="form-control btn-rounded" id="regno" name="regno" placeholder="9276XXXXX" required>

                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">

                                                    <label for="name" class="col-sm-3  control-label col-form-label">Name</label>

                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control btn-rounded" id="name" name="name" placeholder="Enter your name" required>

                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">

                                                    <label for="gender" class="col-sm-3  control-label col-form-label" required>Gender</label>
                                                    <div class="col-sm-9">
                                                        <div class="form-check form-check-inline ">
                                                            <input class="form-check-input" type="radio" name="radio" id="male" value="male" required>
                                                            <label class="form-check-label" for="male">Male</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="radio" id="female" value="female">
                                                            <label class="form-check-label" for="female">Female</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <!-- <label for="dep" class="col-sm-3  control-label col-form-label">Department</label> -->
                                                    <label for="inputState" class="col-sm-3  control-label col-form-label">Stopping</label>

                                                    <div class="col-sm-9 ">
                                                        <select class="form-select form-control shadow btn-rounded required " id="stoppingsSelect">
                                                            <option disabled selected>Select your stopping</option>

                                                        </select>
                                                    </div>
                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" name="bushit" class="btn btn-success  px-3 shadow">Generate Pass</button>

                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <script>
                                //Seat display
                                $(document).ready(function() {
                                    $('#busForm').on('submit', function(e) {
                                        e.preventDefault();
                                        var selectedBus = $('#selectedBus').val(); // Get the selected bus number
                                        $.ajax({
                                            url: 'fetchSeats.php',
                                            type: 'POST',
                                            data: {
                                                busno: selectedBus
                                            },
                                            success: function(data) {
                                                $('.busprint').show();

                                                $('#seat-display').html(data);
                                                //event handler to the seat elements
                                                $('.seat-div').click(function() {
                                                    var selectedSeatNumber = $(this).data('seatno');

                                                    $('.modal-body p').text('Selected Seat: ' + selectedSeatNumber);

                                                });
                                            },
                                            error: function() {
                                                alert('Error fetching seat information.');
                                            }
                                        });
                                    });

                                    //event for modal shown
                                    $('#allocatedmodal').on('shown.bs.modal', function(e) {
                                        var selectedSeatNumber = parseInt($('.modal-body p').text().split(' ')[2]);


                                        $.ajax({
                                            url: 'getPassDetails.php',
                                            type: 'POST',
                                            data: {
                                                seatno: selectedSeatNumber
                                            },
                                            success: function(response) {
                                                console.log('in of successful fetch');
                                                var tableHTML = '<table class="table table-bordered rounded-3 table-striped" style="width: 100%;"><thead><tr><th colspan="2" class="bg-dark text-light text-center">BUS PASS DETAILS</th></tr></thead><tbody>';
                                                tableHTML += '<tr><td><strong>Name</strong></td><td>' + response.name + '</td></tr>';
                                                tableHTML += '<tr><td><strong>Gender</strong></td><td>' + response.gender + '</td></tr>';
                                                tableHTML += '<tr><td><strong>Reg NO</strong></td><td>' + response.regno + '</td></tr>';
                                                tableHTML += '<tr><td><strong>Bus NO</strong></td><td>' + response.busno + '</td></tr>';
                                                tableHTML += '<tr><td><strong>Seat NO</strong></td><td>' + response.seatno + '</td></tr>';
                                                tableHTML += '<tr><td><strong>Stopping</strong></td><td>' + response.stopping + '</td></tr>';
                                                tableHTML += '</tbody></table>';


                                                $('#student-details').html(tableHTML);
                                            },
                                            error: function() {
                                                alert('Error fetching student details.');
                                            }
                                        });
                                    });
                                    //Unallocated Modal Content Displayer
                                    $('#unallocatedmodal').on('shown.bs.modal', function(e) {
                                        var selectedSeatNumber = parseInt($('.modal-body p').text().split(' ')[2]);
                                        var selectedBus = $('#selectedBus').val(); // Get the selected bus number
                                        // alert(selectedBus);
                                        $.ajax({
                                            url: 'manual_allocation.php',
                                            type: 'POST',
                                            data: {
                                                seatno: selectedSeatNumber,
                                                selectedBus: selectedBus
                                            },
                                            success: function(response) {
                                                console.log('in of successful fetch');



                                                $('#stoppingsSelect').html(response);
                                            },
                                            error: function() {
                                                alert('Error fetching student details.');
                                            }
                                        });
                                    });
                                    //form script
                                    $('#bushit').submit(function(e) {
                                        e.preventDefault();
                                        console.log('Came inside the script');
                                        var regno = $('#regno').val();
                                        var name = $('#name').val();
                                        var selectedStopping = $('#stoppingsSelect').val();
                                        var gender = $('input[value="male"]:checked').val() || $('input[value="female"]:checked').val();
                                        var selectedBus = $('#selectedBus').val(); // Get the selected bus number
                                        var selectedSeatNumber = parseInt($('.modal-body p').text().split(' ')[2]);

                                        if (selectedStopping === null) {
                                            alert('Please select a stopping before submitting.');
                                            return;
                                        }
                                        $.ajax({
                                            type: 'POST',
                                            url: 'manual_allocation.php',
                                            data: {
                                                stopping: selectedStopping,
                                                regno: regno,
                                                name: name,
                                                gender: gender,
                                                bus: selectedBus,
                                                seat: selectedSeatNumber
                                            },
                                            success: function(response) {
                                                console.log('Response received:', response); // Log the response for debugging
                                                var jsonResponse = JSON.parse(response);
                                                console.log('Parsed JSON response:', jsonResponse); // Log the parsed JSON for debugging
                                                if (jsonResponse.status === 'success') {
                                                    // Handle success case
                                                    swal("Hurray!", "Pass generated successfully!", "success", {
                                                        button: false,
                                                        timer: 3000
                                                    });
                                                    $('.bushitform')[0].reset();

                                                    $('#unallocatedmodal').modal('hide');
                                                    // $('.modal-body p').text('');
                                                    fetchSeatDetails(selectedBus);
                                                    $.ajax({
                                                        url: 'fetchSeats.php',
                                                        type: 'POST',
                                                        data: {
                                                            busno: selectedBus
                                                        },
                                                        success: function(data) {
                                                            $('.busprint').show();

                                                            $('#seat-display').html(data);
                                                            //event handler to the seat elements
                                                            $('.seat-div').off('click').click(function() {
                                                                var selectedSeatNumber = $(this).data('seatno');

                                                                $('.modal-body p').text('Selected Seat: ' + selectedSeatNumber);

                                                            });
                                                        },
                                                        error: function() {
                                                            alert('Error fetching seat information.');
                                                        }
                                                    });
                                                } else if (jsonResponse.status === 'duplicate') {
                                                    // Handle duplicate pass error case
                                                    swal("Oops!", "Pass already exists!", "error", {
                                                        button: false,
                                                        timer: 3000
                                                    });
                                                    $('.bushitform')[0].reset();
                                                } else {
                                                    alert('Pass generation failed: ' + jsonResponse.message);
                                                }

                                            },
                                            error: function() {
                                                alert('Error occurred while fetching bus data.');
                                            }
                                        });
                                    });
                                    //To reload the seat-display after form submission
                                    function fetchSeatDetails(selectedBus) {
                                        $.ajax({
                                            url: 'fetchSeats.php',
                                            type: 'POST',
                                            data: {
                                                busno: selectedBus
                                            },
                                            success: function(data) {
                                                $('.busprint').show();
                                                $('#seat-display').html(data);
                                            },
                                            error: function() {
                                                alert('Error fetching seat information.');
                                            }
                                        });
                                    }
                                });
                            </script>
                            <!-- ============================================================== -->
                            <!-- End Wrapper -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- All Jquery -->
                            <!-- ============================================================== -->
                            <script src="assets/libs/jquery/dist/jquery.min.js"></script>
                            <!-- Bootstrap tether Core JavaScript -->
                            <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
                            <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
                            <script src="assets/extra-libs/sparkline/sparkline.js"></script>
                            <!--Wave Effects -->
                            <script src="dist/js/waves.js"></script>
                            <!--Menu sidebar -->
                            <script src="dist/js/sidebarmenu.js"></script>
                            <!--Custom JavaScript -->
                            <script src="dist/js/custom.min.js"></script>
                            <!--This page JavaScript -->
                            <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
                            <!-- Charts js Files -->
                            <script src="assets/libs/flot/excanvas.js"></script>
                            <script src="assets/libs/flot/jquery.flot.js"></script>
                            <script src="assets/libs/flot/jquery.flot.pie.js"></script>
                            <script src="assets/libs/flot/jquery.flot.time.js"></script>
                            <script src="assets/libs/flot/jquery.flot.stack.js"></script>
                            <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
                            <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
                            <script src="dist/js/pages/chart/chart-page-init.js"></script>
                            <!-- Print modal no use, for later-->
                            <div class="modal fade" id="passprintmodal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ..
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Understood</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

</body>

</html>