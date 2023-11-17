<?php
 include("config.php");

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the data from the form
    $deptNo = $_POST["Dept_No"];
    $deptName = $_POST["Dept_Name"];

   // $sql = "INSERT INTO Department (Dept_No, Dept_Name) VALUES (?, ?)";
   $sql = "INSERT INTO Department (Dept_No, Dept_Name) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("ss", $deptNo, $deptName);

    if ($stmt->execute()) {
        // Data inserted successfully
        echo "Department added successfully!";
    } else {
        // Error occurred during insertion
        echo "Error: " . $db->error;
    }

    // Close the database connection
    $stmt->close();
    $db->close();
} else {
    // If the request method is not POST, return an error message
    echo "Invalid request method.";
}
?>