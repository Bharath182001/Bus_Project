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
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js"></script>

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
        <div class="page-wrapper">
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div class="row formContainer">
                    <div class="col-12 col-lg-12">
                        <div class="card-mt-custom">
                            <div class="card">
                                <h4 class="card-title pl-2 my-5 text-center">Report Gendration</h4>
                                <div class="form-group row align-items-center">
                                    <label for="selectedBus" class="col-sm-3 control-label col-form-label pl-2">Bus Number</label>

                                    <div class="col-sm-9">

                                        <select id="selectedBus" class="form-select form-control shadow btn-rounded  required">
                                            <option disabled selected>Select bus number</option>
                                            <?php
                                            include "config.php";
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
                                    <div class="card-body d-flex justify-content-center">
                                        <button id="generateReport" class="btn btn-success btn-rounded px-3 shadow"style="width:15em;">Generate Report</button>
                                    </div>
                                </div>



                               
<br>
<br>

                                
                                
<h4 class="card-title pl-2 my-5 text-center">CustomReport</h4>
<div class="form-group row align-items-center d-flex justify-content-center">
    <label for="busno" class="col-sm-2 control-label col-form-label pl-3">Bus Number</label>
    <div class="col-sm-3">
        <select id="busno" class="form-select form-control shadow btn-rounded">
            <option value="">Select Bus Number</option>
            <?php
            include "config.php";
            $query = "SELECT DISTINCT busno FROM student";
            $result = mysqli_query($db, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['busno']}'>{$row['busno']}</option>";
            }
            ?>
        </select>
    </div>

    <label for="stopping" class="col-sm-2 control-label col-form-label">Stopping</label>
    <div class="col-sm-3">
        <select id="stopping" class="form-select form-control shadow btn-rounded">
            <option value="">Select Stopping</option>
            <?php
            include "config.php";
            $query = "SELECT DISTINCT stopping FROM student";
            $result = mysqli_query($db, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['stopping']}'>{$row['stopping']}</option>";
            }
            ?>
        </select>
    </div>
</div>

<div class="form-group row align-items-center d-flex justify-content-center">
    <label for="branch" class="col-sm-2 control-label col-form-label pl-3">Branch</label>
    <div class="col-sm-3">
        <select id="branch" class="form-select form-control shadow btn-rounded">
            <option value="">Select Branch</option>
            <?php
            include "config.php";
            $query = "SELECT DISTINCT Branch FROM student";
            $result = mysqli_query($db, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['Branch']}'>{$row['Branch']}</option>";
            }
            ?>
        </select>
    </div>

    <label for="year" class="col-sm-2 control-label col-form-label">Year</label>
    <div class="col-sm-3">
        <select id="year" class="form-select form-control shadow btn-rounded">
            <option value="">Select Year</option>
            <?php
            include "config.php";
            $query = "SELECT DISTINCT Year FROM student";
            $result = mysqli_query($db, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['Year']}'>{$row['Year']}</option>";
            }
            ?>
        </select>

       <br>

    </div>
    <br>
    <div class="d-flex justify-content-center ">

<button id="generateCustomReport" class="btn btn-success btn-rounded px-3 shadow "style="width:15em;">Generate Custom Report</button>

                                        </div>
</div>
<br>


<h4 class="card-title pl-2 my-5 text-center">Consolidate Report</h4>
                                     <div class="d-flex justify-content-center ">
                                    <button id="generateBusReport" class="btn btn-success btn-rounded px-3 shadow "style="width:15em;">Click Here</button>
                                    
                                </div>
        </div>

        </div>
       


                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $("#generateReport").click(function() {
                            let busNumber = $("#selectedBus").val();
                            console.log(busNumber);

                            if (!busNumber) {
                                alert("Please select a bus number.");
                                return;
                            }

                            $.ajax({
                                url: 'pdf.php',
                                method: 'POST',
                                data: {
                                    busno: busNumber
                                },
                                dataType: 'json',
                                success: function(data) {
                                    if (data.length === 0 || data.error) {
                                        // Show SweetAlert
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oops...',
                                            text: 'No data found for the selected bus!',
                                        });
                                        return;
                                    }
                                    generatePDF(data);
                                },
                                error: function() {
                                    alert("Error fetching student details.");
                                }
                            });
                        });
                    });
                   
                    function generatePDF(data) {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    var logoImg = new Image();
    logoImg.src = 'logo.jpg';

    logoImg.onload = function () {
        const imgWidth = 50;
        const imgHeight = 20;
        doc.addImage(logoImg, 'JPEG', 10, 10, imgWidth, imgHeight);

        doc.setFontSize(18);
        doc.setTextColor(40);
        doc.setFont("helvetica", "bold");

        const textWidth = doc.getStringUnitWidth("Report For BusNo : " + $("#selectedBus").val()) * doc.internal.getFontSize() / doc.internal.scaleFactor;
        const textXPosition = (doc.internal.pageSize.getWidth() - textWidth) / 2;

        doc.text("Report For BusNo : " + $("#selectedBus").val(), textXPosition, 35);

        const stoppingData = groupBy(data, 'stopping');

        Object.keys(stoppingData).forEach((stopping, index) => {
    const maleRows = [];
    const femaleRows = [];

    stoppingData[stopping].forEach(student => {
        const row = [
            student.regno,
            student.name,
            student.gender,
            student.seatno,
            student.Branch,
            student.Year,
            student.semester
        ];

        if (student.gender.toLowerCase() === 'male') {
            maleRows.push(row);
        } else if (student.gender.toLowerCase() === 'female') {
            femaleRows.push(row);
        }
    });

    const stoppingHeaders = ["RegNo", "Name", "Gender", "SeatNo", "Department", "Year", "Semester"];

    const startY = doc.autoTable.previous.finalY || 45; // Use the previous finalY if available

    // Check if the space left after the table isn't sufficient for another row of data
    if (startY > doc.internal.pageSize.height - 20) {
        doc.addPage();
    }

    // Add bus number heading
    doc.setFontSize(18);
    doc.text(`Bus No: ${$("#selectedBus").val()}`, 20, startY + 10);

    // Add stopping heading
    doc.setFontSize(14);
    doc.text(`Stopping: ${stopping}`, 20, startY + 20);

    if (maleRows.length > 0) {
    doc.setFontSize(12);
    const maleTitleY = startY + 40; // Adjusted y-position
    const maleTitleX = 30; // Adjusted x-position (added)
    doc.text(`Male Students`, maleTitleX, maleTitleY);

    doc.autoTable({
        startY: maleTitleY + 15, // Adjusted the spacing
        head: [stoppingHeaders],
        body: maleRows,
        theme: 'striped',
        styles: getTableStyles(),
        didParseCell: function (table) {
            if (table.section === 'head' && table.column.index === 1) {
                table.cell.styles.halign = 'left';
            }
        }
    });
}
    // Add an extra space between male and female tables
    if (femaleRows.length > 0 && maleRows.length > 0) {
        doc.autoTable({
            startY: doc.autoTable.previous.finalY + 15, // Adjusted the spacing
            body: [['']], // Empty row for spacing
            theme: 'plain',
            styles: { cellWidth: 'wrap', lineWidth: 0 }
        });
    }

    // Add Female Students title
    if (femaleRows.length > 0) {
    doc.setFontSize(12);
    const femaleTitleY = maleRows.length > 0
        ? doc.autoTable.previous.finalY + 20  // Adjusted the y-position
        : startY + 40; // Adjusted y-position
    const femaleTitleX = 30; // Adjusted x-position (added)
    doc.text(`Female Students`, femaleTitleX, femaleTitleY);

    doc.autoTable({
        startY: femaleTitleY + 15, // Adjusted the spacing
        head: [stoppingHeaders],
        body: femaleRows,
        theme: 'striped',
        styles: getTableStyles(),
        didParseCell: function (table) {
            if (table.section === 'head' && table.column.index === 1) {
                table.cell.styles.halign = 'left';
            }
            }
        });
    }
});
        addSignatureAndBorders(doc);

        doc.save("BusReport_" + $("#selectedBus").val() + ".pdf");
    }
}

// Helper function to group data by a specific key
function groupBy(array, key) {
    return array.reduce((result, currentValue) => {
        (result[currentValue[key]] = result[currentValue[key]] || []).push(currentValue);
        return result;
    }, {});
}

// Helper function to get table styles
function getTableStyles() {
    return {
        fillColor: [173, 216, 230], // Light Blue
        textColor: 20,
        fontSize: 10,
        fontStyle: 'normal',
        halign: 'center',
        columnWidth: 'wrap',
        alternateRowStyles: { fillColor: [211, 211, 211] } // Gray for alternate rows
    };
}


// Helper function to add signature and borders
function addSignatureAndBorders(doc) {
    let finalY = doc.internal.pageSize.height - 20;

    doc.setFontSize(10);
    const signatureText = "(MANAGER'S SIGNATURE)";
    const signatureWidth = doc.getStringUnitWidth(signatureText) * doc.internal.getFontSize() / doc.internal.scaleFactor;
    const signatureXPosition = doc.internal.pageSize.width - signatureWidth - 20;

    if (doc.autoTable.previous.finalY > finalY - 15) {
        doc.addPage();
        finalY = doc.internal.pageSize.height - 20;
    }

    doc.text(signatureText, signatureXPosition, finalY);

    const pageCount = doc.internal.getNumberOfPages();
    for (let i = 1; i <= pageCount; i++) {
        doc.setPage(i);
        doc.setDrawColor(0, 0, 0);
        doc.setLineWidth(1);
        doc.rect(10, 10, 190, 277);
    }
}
</script>

                <script>

$(document).ready(function() {
    $("#generateBusReport").click(function() {
        $.ajax({
            url: 'allBus.php',
            method: 'POST',
            data: { getAllBusesReport: true },
            dataType: 'json',
            success: function(data) {
    console.log(data);
    // Filter buses to only keep those with students


   
        generatePDFReport(data);
            
},


        });
    });
});

function generatePDFReport(busesData) {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    var logoImg = new Image();

    logoImg.onload = function() {
        busesData.forEach((bus, index) => {
            let verticalOffset = 20;
            
            // Draw black margin around the A4 sheet on every page
            doc.setDrawColor(0);
            doc.rect(10, 10, 190, 277);

            if (index === 0) {
                doc.addImage(logoImg, 'JPG', 15, 15, 55, 20);
                verticalOffset = 50;
            }

            doc.setFontSize(16);
            doc.setTextColor(100, 100, 250);

            let titleText = 'Bus Allocation Report For Busno :' + (bus.busno || 'N/A');
            let textWidth = doc.getStringUnitWidth(titleText) * doc.internal.getFontSize() / doc.internal.scaleFactor;
            let textOffset = (doc.internal.pageSize.width - textWidth) / 2;
            doc.text(titleText, textOffset, verticalOffset);

            doc.setFontSize(12);
            doc.setTextColor(50);
            let verticalPosition = verticalOffset + 20;

            const details = [
                { label: 'Total Male Allocated Seats', value: bus.total_male_seats || 'N/A' },
                { label: 'Total Female Allocated Seats', value: bus.total_female_seats || 'N/A' },
                { label: 'Total Allocated Seats', value: bus.alloted_seat || 'N/A' },
                { label: 'Total Remaining Seats', value: bus.total_seats || 'N/A' }
            ];

            const detailRows = details.map(detail => [detail.label, detail.value]);
            
            doc.autoTable({
                startY: verticalPosition,
                head: [['Detail', 'Seats']],
                body: detailRows,
                theme: 'striped',
                styles: {
                    fontSize: 12,
                    fontStyle: 'normal',
                    halign: 'center',
                    columnWidth: 'wrap'
                },
                headStyles: {
                    fillColor: [192, 192, 192],
                    textColor: 255,
                    fontSize: 12,
                    fontStyle: 'bold',
                    halign: 'center'
                },
                bodyStyles: {
                    fillColor: [224, 224, 224],
                    textColor: 0,
                    halign: 'left'
                },
                columnStyles: {
                    0: { cellWidth: '50%' },
                    1: { cellWidth: '50%', halign: 'center' }
                }
            });

            verticalPosition += details.length * 10 + 20;

            const headers = [["RegNo", "Name", "Gender", "Stopping", "SeatNo","Department","Year","Semester"]];
            const students = bus.students || [];
            const rows = students.map(student => [
                student.regno || 'N/A',
                student.name || 'N/A',
                student.gender || 'N/A',
                student.stopping || 'N/A',
                student.seatno || 'N/A',
                student.Branch || 'N/A',
                student.Year||'N/A',
                student.semester||'N/A'
            ]);

            if (rows.length > 0) {
                doc.autoTable({
                    startY: verticalPosition,
                    head: headers,
                    body: rows,
                    theme: 'striped',
                    styles: {
                        fillColor: [173, 216, 230],
                        textColor: 0,
                        fontSize: 10,
                        fontStyle: 'normal',
                        halign: 'center',
                        columnWidth: 'wrap'
                    },
                    headStyles: {
                        fillColor: [70, 130, 180],
                        textColor: 255,
                        fontSize: 11,
                        fontStyle: 'bold',
                        halign: 'center'
                    },
                    bodyStyles: {
                        fillColor: [220, 220, 255],
                        textColor: 0,
                        halign: 'center'
                    },
                    alternateRowStyles: {
                        fillColor: [240, 248, 255],
                        halign: 'center'
                    },
                    columnStyles: {
                        1: { halign: 'left', cellWidth: 'auto' }
                    },
                    didParseCell: function(data) {
                        if (data.section === 'head' && data.column.index === 1) {
                            data.cell.styles.halign = 'left';
                        }
                    }
                });
            }

            // Draw black margin around the A4 sheet
            doc.setDrawColor(0);
            doc.rect(10, 10, 190, 277);

            // Display page number at the bottom of the page
            let pageNumber = doc.internal.getNumberOfPages();
            doc.setFontSize(10);
            doc.setTextColor(100);
            doc.text(`Page ${pageNumber}`, 105, 290);

            if (index !== busesData.length - 1) {
                doc.addPage();
            }
        });

        doc.save("AllBusesReport.pdf");
    };

    logoImg.src = 'logo.jpg';
}


                    </script>


<script>
$(document).ready(function () {
    $("#generateCustomReport").click(function () {
        let busno = $("#busno").val();
        let stopping = $("#stopping").val();
        let branch = $("#branch").val();
        let year = $("#year").val();

        // Dynamically construct the selectedColumns array based on non-empty values
        let selectedColumns = [];

        if (busno) selectedColumns.push("busno");
        if (stopping) selectedColumns.push("stopping");
        if (branch) selectedColumns.push("branch");
        if (year) selectedColumns.push("year");

        // ... (add more conditions for other columns)

        $.ajax({
            url: 'customPdf.php',
            method: 'POST',
            data: {
                generateCustomPDF: true,
                busno: busno,
                stopping: stopping,
                branch: branch,
                year: year
            },
            dataType: 'json',
            success: function (data) {
                if (data.length === 0 || data.error) {
                    // Show SweetAlert
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'No data found for the selected criteria!',
                    });
                    return;
                }
                generateCustomPDFReport(data);
            },
            error: function () {
                alert("Error fetching student details.");
            }
        });
    });
});

function generateCustomPDFReport(data) {
    console.log(data);
    const { jsPDF } = window.jspdf;
    const margin = 10; // Adjusted margin

    // Set four-sided margins
    const doc = new jsPDF({
        unit: 'mm',
        format: 'a4',
        orientation: 'portrait'
    });

    var logoImg = new Image();
    logoImg.src = 'logo.jpg';

    logoImg.onload = function () {
        const imgWidth = 50;
        const imgHeight = 20;

        doc.addImage(logoImg, 'JPEG', margin, margin, imgWidth, imgHeight);

        doc.setFontSize(18);
        doc.setTextColor(40);
        doc.setFont("helvetica", "bold");

        doc.text("Custom Report", margin + imgWidth + 10, margin + 10);

        // Set the cursor below the title for the table
        doc.setDrawColor(0);
        doc.setLineWidth(0.3);
        doc.line(margin, margin + imgHeight + 15, doc.internal.pageSize.width - margin, margin + imgHeight + 15);

        // Set the cursor for the table
        let cursorY = margin + imgHeight + 20;

        // Display data with proper headers
        const headers = ["Busno", "Register Number", "Name of the student", "Year of study", "Department", "Current semester"];
        const rows = [headers].concat(data.map(item => [item.busno, item.regno, item.name, item.Year, item.Branch, item.semester]));

        // Check if there is data to generate the table
        if (rows.length > 0) {
            // Manually calculate the position of the table
            const tableTop = cursorY;
            const tableLeft = margin;
            const tableWidth = doc.internal.pageSize.width - 2 * margin;
            const tableHeight = doc.internal.pageSize.height - cursorY - margin;

            doc.autoTable({
                head: [headers],
                body: data.map(item => [item.busno, item.regno, item.name, item.Year, item.Branch, item.semester]),
                theme: 'striped',
                styles: getTableStyles(),
                margin: { top: tableTop, left: tableLeft, right: tableLeft, bottom: tableLeft },
                startY: tableTop,
                didDrawPage: function (data) {
                    cursorY = tableTop + tableHeight + 10; // Set cursorY for the next page
                },
            });
        }

        // Save the PDF and trigger the download
        doc.save("CustomReport.pdf");
    };
}











</script>








                <!-- ============================================================== -->
                <!-- End Wrapper -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- All Jquery -->
                <!-- ============================================================== -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>

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

</body>

</html>