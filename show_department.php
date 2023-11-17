<?php
include("config.php");

// Fetch department data
$query = "SELECT Dept_Name FROM department";
$result = mysqli_query($db, $query);

$departments = array();
while ($row = mysqli_fetch_assoc($result)) {
    $departments[] = $row['Dept_Name'];
}

// Return the data as JSON
echo json_encode($departments);
?>
