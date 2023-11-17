<?php
include("config.php");

if (isset($_POST['getPass'])) {
    $regno = mysqli_real_escape_string($db, $_POST['regno']);
    $getPassQuery = "SELECT * FROM student WHERE regno = '$regno'";
    $result = mysqli_query($db, $getPassQuery);
    $count = mysqli_num_rows($result);
    if ($count != 0) {
        $row = mysqli_fetch_assoc($result);
        $passDetails = array(
            'name' => $row['name'],
            'gender' => $row['gender'],
            'regno' => $row['regno'],
            'busno' => $row['busno'],
            'seatno' => $row['seatno'],
            'stopping' => $row['stopping']
        );
        header('Content-Type: application/json');
        echo json_encode($passDetails);
    } else {
        echo "No pass found for  no";
    }
} elseif (isset($_POST['seatno'])) {
    $selectedSeatNumber = $_POST['seatno'];

    // Modify this query to fetch student details based on the seat number
    $studentQuery = "SELECT name, gender, regno, busno, seatno, stopping FROM student WHERE seatno = '$selectedSeatNumber'";
    $studentResult = mysqli_query($db, $studentQuery);

    if ($studentResult) {
        if (mysqli_num_rows($studentResult) > 0) {
            // Fetch student details
            $studentData = mysqli_fetch_assoc($studentResult);
            $passDetails = array(
                'name' => $studentData['name'],
                'gender' => $studentData['gender'],
                'regno' => $studentData['regno'],
                'busno' => $studentData['busno'],
                'seatno' => $studentData['seatno'],
                'stopping' => $studentData['stopping']
            );
            // Return student details as JSON response
            header('Content-Type: application/json');
            echo json_encode($passDetails);
        } else {
            // No matching student found
            echo json_encode(["error" => "Student not found"]);
        }
    } else {
        // Error in the database query
        echo json_encode(["error" => "Database query error"]);
    }
}
