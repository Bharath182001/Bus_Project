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
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
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
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
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
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="generatePass.php" aria-expanded="false"><i class="fas fa-ticket-alt"></i><span
                                    class="hide-menu ">&nbsp;Generate Pass</span></li></a>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link  "
                                href="showBuses.php" aria-expanded="false"><i class="fas fa-bus"></i><span
                                    class="hide-menu">&nbsp;Show Buses</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link  "
                                href="report.php" aria-expanded="false"><i class="fas fa-file-alt"></i>
                                </i><span class="hide-menu">&nbsp;Gendrate Report</span></a>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link  "
                                href="addBuses.php" aria-expanded="false"> <i class="fas fa-plus"></i>
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
            <div class="container-fluid ">
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->

                <!-- ============================================================== -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div class="row formContainer ">
                    <div class="col-12 col-lg-12  ">

                        <div class="card mt-custom">

                            <form id="Delete" class="deleteSeat conatiner-fluid">

                                <h4 class="card-title mt-3 text-center mt-5">Delete Seat</h4>

                                <br>
                                <br>
                                <div class="form-group row align-items-center conatiner  d-flex justify-content-center">
                                    <label for="regno" class="col-sm-3  control-label col-form-label pl-5">Register
                                        Number</label>

                                    <div class="col-sm-6">


                                        <input type="text" class="form-control btn-rounded" id="regno" name="regno"
                                            placeholder="Enter Reg No">

                                    </div>
                                </div>
                                <div class="border-bottom ">
                                    <div class="card-body container  d-flex justify-content-center">

                                        <button type="submit" id="submitForm"
                                            class="btn btn-success btn-rounded px-3 shadow ">Delete student</button>

                                    </div>
                                </div>
                            </form>

                            <script>
                                $(document).ready(function () {
                                    $("#submitForm").on("click", function (e) {

                                        var data = {
                                            regno: $("#regno").val(),
                                        };

                                        console.log(data);
                                        e.preventDefault();
                                        $.ajax({

                                            url: "delete.php",
                                            type: "POST",
                                            data: data,
                                            dataType: "json",
                                            success: function (response) {
                                                if (response.status === 'success') {
                                                    swal("Seat Deleted !", "The seat is removed !", "success");
                                                } else if (response.status === 'error') {
                                                    swal("Oops !", "Check the Registernumber !", "warning");

                                                }
                                            },
                                            error: function (jqXHR, textStatus, errorThrown) {
                                                console.log(jqXHR);
                                                console.error("AJAX error: " + textStatus + ' : ' + errorThrown);
                                            }
                                        });
                                    });
                                });


                            </script>







                            </script>


                            <script src="assets/libs/jquery/dist/jquery.min.js"></script>
                            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>