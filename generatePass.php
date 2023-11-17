<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php include "config.php" ?>
<?php
function populateSelectOptions($stoppings)
{
    include("config.php");

    $sql = "SELECT DISTINCT stoppings FROM bus ";
    $result = mysqli_query($db, $sql);
    $allStoppings = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Split the values by comma and trim each value
            $stoppingsList = explode(",", $row[$stoppings]);

            foreach ($stoppingsList as $stopping) {
                $trimmedStopping = trim($stopping);
                if (!in_array($trimmedStopping, $allStoppings)) {
                    $allStoppings[] = $trimmedStopping;
                }
            }
        }
    }

    // Sort the unique stoppings alphabetically
    sort($allStoppings);

    // Generate options for each unique stopping
    foreach ($allStoppings as $stopping) {
        echo '<option value="' . $stopping . '">' . $stopping . '</option>';
    }
} ?>

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

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/webcam-easy@1.1.1/dist/webcam-easy.min.js"></script>
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
                                <form id="bushit" class="bushitform form-horizontal">
                                    <div class="card-body">


                                        <h4 class="card-title">Generate Pass</h4>
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
                                                <select class="form-select form-control shadow btn-rounded required">
                                                    <option disabled selected>Select your stopping</option>
                                                    <?php
                                                    populateSelectOptions("stoppings");
                                                    ?>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="border-bottom">
                                            <div class="card-body">
                                                <button type="submit" name="bushit" class="btn btn-success btn-rounded px-3 shadow">Generate Pass</button>

                                            </div>
                                        </div>
                                </form>
                                <form id="getPass" class="getPassform">

                                    <h4 class="card-title mt-3">Print Pass</h4>
                                    <div class="form-group row align-items-center">
                                        <label for="regno" class="col-sm-3  control-label col-form-label">Register Number</label>

                                        <div class="col-sm-9">


                                            <input type="text" class="form-control btn-rounded" id="getpassregno" name="getpassregno" placeholder="Enter Reg No">

                                        </div>
                                    </div>
                                    <div class="border-bottom">
                                        <div class="card-body">

                                            <button type="submit" class="btn btn-success btn-rounded px-3 shadow">Print Pass</button>

                                        </div>
                                    </div>
                                </form>
                                <div class="passprint" style="display: none;">
                                    <div class=" d-flex   justify-content-center " style="width: 100%; border-radius: 24px; background: rgba(48,169,227,0.5);
-webkit-backdrop-filter: blur(10px);
backdrop-filter: blur(10px);
border: 1px solid rgba(48,169,227,0.25);">

                                        <div id="result" class="my-3 bg-light  shadow  lead p-2" style="width: 55%;"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- ALl scripts used -->
                            <script src="sweetalert2.all.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    $('#bushit').submit(function(e) {
                                        e.preventDefault();
                                        console.log('Came inside the script');
                                        var selectedStopping = $('.form-select').val();
                                        var regno = $('#regno').val();
                                        var name = $('#name').val();
                                        var gender = $('input[value="male"]:checked').val() || $('input[value="female"]:checked').val();

                                        if (selectedStopping === null) {
                                            alert('Please select a stopping before submitting.');
                                            return;
                                        }
                                        $.ajax({
                                            type: 'POST',
                                            url: 'fetchBus.php',
                                            data: {
                                                stopping: selectedStopping,
                                                regno: regno,
                                                name: name,
                                                gender: gender
                                            },
                                            success: function(response) {
                                                console.log('Response received:', response); // Log the response for debugging
                                                var jsonResponse = JSON.parse(response);
                                                console.log('Parsed JSON response:', jsonResponse); // Log the parsed JSON for debugging
                                                if (jsonResponse.status === 404) {
                                                    alert(jsonResponse.message);
                                                    $('.bushitform')[0].reset();
                                                    $('.printpass').show();
                                                } else {
                                                    // console.log('Pass generated successfully');
                                                    // alert(jsonResponse.message);
                                                    if (jsonResponse.message.toLowerCase().indexOf('duplicate') !== -1) {
                                                        swal("Oops!", "Pass already exists!", "error", {
                                                            button: false,
                                                            timer: 3000
                                                        });
                                                    } else {
                                                        swal("Hurray!", "Pass generated successfully!", "success", {
                                                            button: false,
                                                            timer: 3000
                                                        });
                                                    }
                                                    $('.bushitform')[0].reset();
                                                }

                                            },
                                            error: function() {
                                                alert('Error occurred while fetching bus data.');
                                            }
                                        });
                                    });
                                });
                            </script>
                            <!-- Printing the pass -->
                            <script>
                                $(document).ready(function() {
                                    $('#getPass').submit(function(e) {
                                        e.preventDefault();
                                        var regno = $('#getpassregno').val();
                                        if (regno == '') {
                                            alert('Please enter register number.');
                                            return;
                                        }
                                        console.log('Submitting form for registration number: ' + regno);
                                        $.ajax({

                                            type: 'POST',
                                            url: 'getPassDetails.php',
                                            data: {
                                                getPass: true,
                                                regno: regno
                                            },
                                            success: function(response) {
                                                console.log(response);
                                                console.log('AJAX request successful');
                                                if (response && response !== 'No pass found for  no') {
                                                    var tableHTML = '<table class="table table-bordered rounded-3 table-striped" style="width: 100%;"><thead><tr><th colspan="2" class="bg-dark text-light text-center">BUS PASS DETAILS</th></tr></thead><tbody>';
                                                    tableHTML += '<tr><td><strong>Name</strong></td><td>' + response.name + '</td></tr>';
                                                    tableHTML += '<tr><td><strong>Gender</strong></td><td>' + response.gender + '</td></tr>';
                                                    tableHTML += '<tr><td><strong>Reg NO</strong></td><td>' + response.regno + '</td></tr>';
                                                    tableHTML += '<tr><td><strong>Bus NO</strong></td><td>' + response.busno + '</td></tr>';
                                                    tableHTML += '<tr><td><strong>Seat NO</strong></td><td>' + response.seatno + '</td></tr>';
                                                    tableHTML += '<tr><td><strong>Stopping</strong></td><td>' + response.stopping + '</td></tr>';
                                                    tableHTML += '</tbody></table>';
                                                    $('#result').html(tableHTML);
                                                    $('.passprint').show();

                                                } else {
                                                    swal("Oops!", "Pass Not Available!", "error", {
                                                        button: false,
                                                        timer: 3000
                                                    });
                                                    $('.passprint').hide();


                                                }

                                                $('.getPassform')[0].reset();


                                            },
                                            error: function() {
                                                console.log('AJAX request error');
                                                alert('Error occurred while fetching bus data.');
                                            }
                                        });
                                    });
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

</body>

</html>