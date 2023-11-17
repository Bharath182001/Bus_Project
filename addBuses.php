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
            <div class="container-fluid mt-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">

                        <div class="card conatiner">
                            <form id="Delete">

                                <h4 class="card-title text-center mt-4 ">Add Bus</h4>

                                <div class="form-group row justify-content-center mt-4">
                                    <label for="busno"
                                        class="col-12 col-md-4 text-md-right control-label col-form-label">Bus
                                        No</label>
                                    <div class="col-12 col-md-6">
                                        <input type="text" class="form-control btn-rounded" id="busno" name="busno">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="totalSeats"
                                        class="col-12 col-md-4 text-md-right control-label col-form-label">Seats</label>
                                    <div class="col-12 col-md-6">
                                        <input type="number" class="form-control btn-rounded" id="totalSeats"
                                            name="totalSeats">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="route"
                                        class="col-12 col-md-4 text-md-right control-label col-form-label">Route</label>
                                    <div class="col-12 col-md-6">
                                        <input type="text" class="form-control btn-rounded" id="route" name="route"
                                            placeholder="KARUR-MKCE">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="addStopping"
                                        class="col-12 col-md-4 text-md-right control-label col-form-label">Add
                                        Stoppings</label>
                                    <div class="col-10 col-md-5">
                                        <input type="text" class="form-control btn-rounded" id="addStopping"
                                            placeholder="e.g., Karur">
                                    </div>
                                    <div class="col-2 col-md-1">
                                        <button type="button" class="btn btn-primary" id="addStopBtn">+</button>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="container-fluid d-flex justify-content-center align-items-center ">
                                        <table class="table" id="stoppingsTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">SL/No</th>
                                                    <th scope="col">Stopping</th>
                                                    <th scope="col">Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Stoppings will be added here -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 text-center">
                                        <button type="submit" name="newBus"
                                            class="btn btn-success btn-rounded px-3 shadow"
                                            id="submitForm">Submit</button>
                                    </div>
                                </div>

                            </form>



                            <script>
                                $(document).ready(function () {
                                    var stoppingsArray = [];

                                    $("#addStopBtn").on("click", function () {
                                        var stopping = $("#addStopping").val().trim();
                                        if (stopping) {
                                            stoppingsArray.push(stopping);
                                            let tableBody = $("#stoppingsTable tbody");
                                            let newRow = `<tr>
                        <td>${stoppingsArray.length}</td>
                        <td><input type="text" value="${stopping}" class="form-control" readonly /></td>
                        <td><button class="edit-btn btn btn-primary">Edit</button></td>
                      </tr>`;
                                            tableBody.append(newRow);
                                            $("#addStopping").val('');
                                        }
                                    });

                                    $(document).on('click', '.edit-btn', function () {
                                        event.preventDefault();
                                        let inputField = $(this).closest('tr').find('input[type="text"]');
                                        if (inputField.attr('readonly')) {
                                            inputField.removeAttr('readonly');
                                            $(this).text('Save');
                                        } else {
                                            let newVal = inputField.val().trim();
                                            if (newVal) {
                                                let index = $(this).closest('tr').index();
                                                stoppingsArray[index] = newVal;
                                                inputField.attr('readonly', true);
                                                $(this).text('Edit');
                                            } else {
                                                alert('Stopping name cannot be empty!');
                                            }
                                        }
                                    });


                                    $("#submitForm").on("click", function (e) {
                                        // Prevent default form submission
                                        e.preventDefault();

                                        var data = {
                                            busno: $("#busno").val(),
                                            route: $("#route").val(),
                                            totalSeats: $("#totalSeats").val(),
                                            stoppings: stoppingsArray.join(',')
                                        };


                                        // Simple validation


                                        $.ajax({

                                            url: "addingBus.php",
                                            type: "POST",
                                            data: data,
                                            dataType: "json",
                                            success: function (response) {
                                                if (response.status === 'success') {
                                                    swal("New Bus created !", "Click here Ok button to  continue!", "success");
                                                } else if (response.status === 'error') {
                                                    swal("Error occured !", "Please check the details!", "error");

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