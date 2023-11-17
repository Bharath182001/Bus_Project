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
} 

?>
<?php
function Department($db) {
    $sql = "SELECT Dept_Name FROM department";
    $result = mysqli_query($db, $sql);
    $departmentNames = array();

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $departmentNames[] = $row['Dept_Name'];
        }
    }

    return $departmentNames;
}



?>






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


    <style>
.image-upload {
    position: relative;
    text-align: center;
}

.image-label {
    cursor: pointer;
    padding: 10px;
    background-color: #f0f0f0;
    border: 2px dashed #ccc;
    border-radius: 4px;
    color: #888;
    font-weight: bold;
    display: block;
    transition: border 0.3s;
}

.image-label:hover {
    border: 2px dashed #777;
}

#imageInput {
    display: none;
}

.image-preview {
    max-width: 150px;
    max-height: 150px;
    border: 2px solid #ccc;
    display: none;
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
    <form id="bushit" class="bushitform form-horizontal">
        <div class="card-body">
            <h4 class="card-title">Generate Pass</h4>
            <div class="form-group row align-items-center">
                <label for="image" class="col-sm-3 control-label col-form-label">Image <span class="text-danger">*</span></label></label>
                <div class="col-sm-9">
                    <div class="image-upload">
                        <label for="imageInput" class="image-label">
                            <i class="fas fa-cloud-upload-alt"></i> Upload Image
                        </label>
                        <input type="file" class="form-control" id="imageInput" name="image" accept="image/*" required>
                        <img id="imagePreview" class="image-preview" src="" alt="Preview Image">
                    </div>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="name" class="col-sm-3 control-label col-form-label">Name <span class="text-danger">*</span></label></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control btn-rounded" id="name" name="name" placeholder="Enter your name" required>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="fatherName" class="col-sm-3 control-label col-form-label">Father Name <span class="text-danger">*</span></label></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control btn-rounded" id="fatherName" name="fatherName" placeholder="Enter your Father's Name" required>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="gender" class="col-sm-3 control-label col-form-label">Gender <span class="text-danger">*</span></label></label>
                <div class="col-sm-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="regno" class="col-sm-3 control-label col-form-label">Register Number <span class="text-danger">*</span></label></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control btn-rounded" id="regno" name="regno" placeholder="9276XXXXX" required>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="dob" class="col-sm-3 control-label col-form-label">Date Of Birth <span class="text-danger">*</span></label></label>
                <div class="col-sm-9">
                    <input type="date" class="form-control btn-rounded" id="dob" name="dob" required>
                </div>
            </div>
            <div class="form-group row align-items-center">
    <label for="graduate" class="col-sm-3 control-label col-form-label">Select Graduate Level <span class="text-danger">*</span></label></label>
    <div class="col-sm-9">
        <select class="form-select form-control  btn-rounded" id="graduate" name="graduate" required >
            <option value="UG">UG</option>
            <option value="PG">PG</option>
        </select>
    </div>
</div>


            <div class="form-group row align-items-center">
                <label for="inputState" class="col-sm-3 control-label col-form-label">Select Department <span class="text-danger">*</span></label></label>
                <div class="col-sm-9">
                    <select class="form-select form-control shadow btn-rounded" name="department" required>
                        <option disabled selected>Select your department</option>
                        <?php
                        $departments = Department($db);
                        foreach ($departments as $department) {
                            echo '<option value="' . $department . '">' . $department . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="year" class="col-sm-3 control-label col-form-label">Select Year <span class="text-danger">*</span></label></label>
                <div class="col-sm-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="year" id="1st_year" value="I" required>
                        <label class="form-check-label" for="1st_year">I</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="year" id="2nd_year" value="II">
                        <label class="form-check-label" for="2nd_year">II</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="year" id="3rd_year" value="III">
                        <label class="form-check-label" for="3rd_year">III</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="year" id="4th_year" value="IV">
                        <label class="form-check-label" for="4th_year">IV</label>
                    </div>
                </div>
            </div>


            <div class="form-group row align-items-center">
    <label for="semester" class="col-sm-3 control-label col-form-label">Select Semester <span class="text-danger">*</span></label></label>
    <div class="col-sm-9">
        <select class="form-select form-control shadow btn-rounded required" name="semester" id="semester" required>
            <option disabled selected>Select your semester</option>
            <option value="1">I (One)</option>
            <option value="2">II (Two)</option>
            <option value="3">III (Three)</option>
            <option value="4">IV (Four)</option>
            <option value="5">V (Five)</option>
            <option value="6">VI (Six)</option>
            <option value="7">VII (Seven)</option>
            <option value="8">VIII (Eight)</option>
        </select>
    </div>
</div>



            <div class="form-group row align-items-center">
                <label for="bloodGroup" class="col-sm-3 control-label col-form-label">Blood Group <span class="text-danger">*</span></label></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control btn-rounded" id="bloodGroup" name="bloodGroup" placeholder="ex: A+" required>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="stopping" class="col-sm-3 control-label col-form-label">Boarding <span class="text-danger">*</span></label></label>
                <div class="col-sm-9">
                    <select class="form-select form-control shadow btn-rounded required" name="stopping"required>
                        <option disabled selected>Select your stopping</option>
                        <?php
                        populateSelectOptions("stoppings");
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="address" class="col-sm-3 control-label col-form-label">Address <span class="text-danger">*</span></label></label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="address" name="address" rows="4" placeholder="Enter your address" required></textarea>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="Father_Number" class="col-sm-3 control-label col-form-label">Father Mobile Number <span class="text-danger">*</span></label></label>
                <div class="col-sm-9">
                    <input type="number" class="form-control btn-rounded" id="Father_Number" name="Father_Number" placeholder="Enter Your Father's mobile number" required>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="Mother_Number" class="col-sm-3 control-label col-form-label">Mother Mobile Number <span class="text-danger">*</span></label></label>
                <div class="col-sm-9">
                    <input type="number" class="form-control btn-rounded" id="Mother_Number" name="Mother_Number" placeholder="Enter Your Mother's mobile number" required>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="Guardin_Number" class="col-sm-3 control-label col-form-label">Guardian Mobile Number</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control btn-rounded" id="Guardian_Number" name="Guardian_Number" placeholder="Enter Your Guardian's mobile number">
                </div>
            </div>

            <div class="form-group row align-items-center">
                <label for="Student_Number" class="col-sm-3 control-label col-form-label">Student Mobile Number <span class="text-danger">*</span></label></label>
                <div class="col-sm-9">
                    <input type="number" class="form-control btn-rounded" id="Student_Number" name="Student_Number" placeholder="Enter Your Guardian's mobile number" required>
                </div>
            </div>

            <div class="form-group row align-items-center">
                <label for="emailAddress" class="col-sm-3 control-label col-form-label">Email Address <span class="text-danger">*</span></label></label>
                <div class="col-sm-9">
                    <input type="email" class="form-control btn-rounded" id="emailAddress" name="emailAddress" placeholder="xyz@gmail.com" required>
                </div>
            </div>

            <div class="form-group row align-items-center">
    <label class="col-sm-3 control-label col-form-label"></label>
    <div class="col-sm-9">
        <a href="#" data-toggle="modal" data-target="#termsModal">Read Terms and Conditions<span class="text-danger">*</span></a>
    </div>
</div>



<div class="form-group row align-items-center">
    <label class="col-sm-3 control-label col-form-label"></label>
    <div class="col-sm-9">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="agreeTerms" required>
            <label class="form-check-label" for="agreeTerms">I agree to the Terms and Conditions <span class="text-danger">*</span></label>
        </div>
    </div>
</div>


            <div class="border-bottom ">
                <div class="card-body d-flex justify-content-center">
                    <button type="submit" name="bushit" class="btn btn-success btn-rounded px-3 shadow">Submit</button>
                </div>
            </div>


            
        </div>
    </form>
</div>



                                 <script>

$(document).ready(function () {
    $('#imageInput').change(function () {
        var file = this.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imagePreview').attr('src', e.target.result);
                $('#imagePreview').css('display', 'block');
            };
            reader.readAsDataURL(file);
        }
    });

    $('#bushit').submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        console.log(formData);
        $.ajax({
            type: 'POST',
            url: 'fetchBus.php',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                // Handle the response from the server
                console.log('Response received:', response);
                var jsonResponse = JSON.parse(response);
                console.log('Parsed JSON response:', jsonResponse);
                if (jsonResponse.status === 404) {
                    alert(jsonResponse.message);
                } else {
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
                    $('.bushitform')[0].reset(); // Reset the form
                    $('#imagePreview').attr('src', ''); // Clear the image
                    $('#imagePreview').css('display', 'none'); // Hide the image preview
                }
            },
            error: function () {
                alert('Error occurred while fetching bus data.');
            }
        });
    });
});

$('#graduate').on('change', function () {
        var selectedGraduateLevel = $(this).val();

        // Hide/show the appropriate options in the "Year" dropdown
        if (selectedGraduateLevel === 'PG') {
            $('#3rd_year, #4th_year').parent().hide();
        } else {
            $('#2nd_year, #3rd_year, #4th_year').parent().show();
        }

     
    });

    $(document).ready(function () {
    $('#graduate').on('change', function () {
        var selectedGraduateLevel = $(this).val();
        var semesterSelect = $('#semester');

        if (selectedGraduateLevel === 'PG') {
            // Disable semesters 5 to 8 and add strikethrough style
            semesterSelect.find('option[value="5"], option[value="6"], option[value="7"], option[value="8"]')
                .prop('disabled', true)
                .css('text-decoration', 'line-through');
        } else {
            // Enable all semesters and remove the strikethrough style
            semesterSelect.find('option[value="5"], option[value="6"], option[value="7"], option[value="8"]')
                .prop('disabled', false)
                .css('text-decoration', 'none');
        }
    });
});



  





                            </script>


<!-- Modal -->
<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Terms and Conditions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    I have read all the rules and regulations of M.Kumarasamy  College of Engineering for availing Transport facility and shall follow them strictly. I am aware that disciplinary action will be initiated against me if I knowingly or unknowingly fail in my responsibility. Disciplinary action may involve warning, suspension from taking Transport facility, suspension from the College, a penalty for damages caused to the college property, or a combination of the above.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




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