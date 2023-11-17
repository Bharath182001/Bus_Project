<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php include "config.php" ?>


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

                        </li>
     




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
                               
                                    <div class="card-body">


                                        <h4 class="card-title">Department</h4>
                                        <div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card attractive-card bg-primary" data-toggle="modal" data-target="#addDepartmentModal">
                <div class="card-body rounded">
                    <h5 class="card-title text-center mx-auto mb-1">Add Department</h5>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card attractive-card bg-danger" data-toggle="modal" data-target="#editDepartmentModal">
                <div class="card-body rounded">
                    <h5 class="card-title text-center mx-auto mb-1">Delete Department</h5>
                </div>
            </div>
        </div>
    </div>
</div>







                                        <div class="modal fade" id="editDepartmentModal" tabindex="-1" role="dialog" aria-labelledby="editdepartmentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDepartmentModalLabel">Department List</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Department</th>
                           
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="departmentList">
                        <!-- Department data will be displayed here -->
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

                                        <!-- Bootstrap Modal -->
                                        <div class="modal fade" id="addDepartmentModal" tabindex="-1" role="dialog"
                                            aria-labelledby="addDepartmentModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="addDepartmentModalLabel ">Add
                                                            Department</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="addDepartmentForm">
                                                            <div class="form-group">
                                                                <label for="Dept_No">Dept_No:</label>
                                                                <input type="text" class="form-control" id="Dept_No"
                                                                    name="Dept_No">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="Dept_Name">Dept_Name:</label>
                                                                <input type="text" class="form-control" id="Dept_Name"
                                                                    name="Dept_Name">
                                                            </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary"
                                                            id="saveDepartment">Save Changes</button>
                                                    </div>
                                                </div>
                                
                                </form>
                            
                        </div>



                      


                        
                        


                        
                        <script>
                            $(document).ready(function () {
                                $("#saveDepartment").click(function () {
                                    // Serialize the form data
                                    var formData = $("#addDepartmentForm").serialize();
                                     
                                    $.ajax({
                                        type: "POST",
                                        url: "insert_department.php", // Replace with the URL to your PHP script
                                        data: formData,
                                        success: function (response) {
                                            swal({
  title: "Good job!",
  text: "Department is Added!",
  icon: "success",
  button: "Aww yiss!",
});
                                            $("#addDepartmentModal").modal("hide");
                                        },
                                        error: function (xhr, status, error) {
                                            console.log("Error:", status, error);
                                        }
                                    });
                                });
                            });
                        </script>


<script>
// When the modal is shown
// Add this script to handle the "Edit" button click event
$(document).ready(function () {
    $('#editDepartmentModal').on('show.bs.modal', function (e) {
        // Clear the existing data
        $('#departmentList').html('');


        console.log(1234);
        // Fetch department data from PHP
        $.ajax({
            url: 'show_department.php', // Replace with the correct URL
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                data.forEach(function (department) {
                    var row = $('<tr>');
                    row.append($('<td>').text(department));
                   
                    row.append($('<td>').html('<button class="deleteDepartment btn btn-danger">Delete</button>'));
                    $('#departmentList').append(row);
                });
            },
            error: function (xhr, status, error) {
                console.log("Error:", status, error);
                
            }
        });
    });

   
$('#departmentList').on('click', '.deleteDepartment', function () {
    var clickedRow = $(this).closest('tr'); 

    // Get the department name from the table row
    var departmentName = clickedRow.find('td:first').text();

    // Prompt the user for confirmation
    if (confirm('Are you sure you want to delete the department: ' + departmentName + '?')) {
        // Send an AJAX request to delete the department
        $.ajax({
            url: 'delete_department.php', // Replace with the correct URL for deleting a department
            type: 'POST', // You can use POST or DELETE method depending on your server-side code
            data: { departmentName: departmentName },
            success: function (response) {
                // Check the response from the server to confirm if the department was deleted successfully
                if (response === 'success') {
                    // Remove the deleted department row from the table
                    clickedRow.remove();
                    alert('Department deleted successfully.');
                } else {
                    alert('Failed to delete the department.');
                }
            },
            error: function (xhr, status, error) {
                console.log('Error:', status, error);
            }
        });
    }
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