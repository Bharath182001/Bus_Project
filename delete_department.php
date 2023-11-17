<?php

include("config.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the department name to delete from the POST data
    $departmentName = $_POST['departmentName'];

$sql = "DELETE FROM department WHERE Dept_Name = ?";
    
// Prepare the statement
$stmt = $db->prepare($sql);

// Bind the department name parameter
$stmt->bind_param("s", $departmentName);

// Execute the statement
if ($stmt->execute()) {
    // Department was successfully deleted
    echo 'success';
} else {
    // Failed to delete department
    echo 'error';
}

// Close the statement and database connection
$stmt->close();
$db->close();
}

?>