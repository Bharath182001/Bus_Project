<?php
include "config.php";

if (isset($_POST['generateCustomPDF'])) {
    // Get input values, default to null if not set
    $busno = isset($_POST['busno']) ? $_POST['busno'] : null;
    $stopping = isset($_POST['stopping']) ? $_POST['stopping'] : null;
    $branch = isset($_POST['branch']) ? $_POST['branch'] : null;
    $year = isset($_POST['year']) ? $_POST['year'] : null;

    // Initialize an array to store selected columns
    $selectedColumns = [];

    // Default columns
    $selectedColumns[] = "busno";
    $selectedColumns[] = "regno";
    $selectedColumns[] = "name";
    $selectedColumns[] = "Year";
    $selectedColumns[] = "Branch";
    $selectedColumns[] = "semester";
    

    // Add columns based on non-empty values
    if ($busno) {
        $selectedColumns[] = "busno";
    }

    if ($stopping) {
        $selectedColumns[] = "stopping";
    }

    if ($branch) {
        $selectedColumns[] = "Branch";
    }

    // Build the WHERE part of the query
    $whereConditions = [];
    if ($busno) {
        $whereConditions[] = "busno = '$busno'";
    }

    if ($stopping) {
        $whereConditions[] = "stopping = '$stopping'";
    }

    if ($branch) {
        $whereConditions[] = "Branch = '$branch'";
    }

    if ($year) {
        $whereConditions[] = "Year = '$year'";
    }

    // Construct the final SQL query
    $query = "SELECT " . implode(",", $selectedColumns) . " FROM student";

    // Add WHERE conditions if any
    if (!empty($whereConditions)) {
        $query .= " WHERE " . implode(" AND ", $whereConditions);
    }

    $result = mysqli_query($db, $query);

    $students = [];

    while ($student = mysqli_fetch_assoc($result)) {
        $students[] = $student;
    }

    // Send the data to the client
    echo json_encode($students);
    exit;
}
?>
