<?php

// Activate error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$response = array();

// Include the database connection
include 'config.php';

// Check if connection was successful
if (!$db) {
    $response['status'] = 'error';
    $response['message'] = 'Failed to connect to the database: ' . mysqli_connect_error();
    exit(json_encode($response));
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["busno"], $_POST["totalSeats"], $_POST["route"], $_POST["stoppings"])) {
        $busno = $_POST["busno"];
        $totalSeats = $_POST["totalSeats"]-10;
        $route = $_POST["route"];
        $stoppings = $_POST["stoppings"];

        $busno_manual = $_POST["busno"];
        $totalSeats_manual = 10;
        $route_manual = $_POST["route"];
        $stoppings_manual = $_POST["stoppings"];

        $sql = "INSERT INTO bus (busno, route, stoppings, avl_seat) VALUES (?, ?, ?, ?)";
        $sql2 = "INSERT INTO manual (busno, route, stoppings, avl_seat) VALUES (?, ?, ?, ?)";
        
        $stmt = $db->prepare($sql);
        $stmt2 = $db->prepare($sql2);

        if ($stmt && $stmt2) {
            $stmt->bind_param("sssi", $busno, $route, $stoppings, $totalSeats); // Assuming avl_seat is an integer
            $stmt2->bind_param("sssi", $busno_manual, $route_manual, $stoppings_manual, $totalSeats_manual);

            if ($stmt->execute() && $stmt2->execute()) {
                $response['status'] = 'success';
                $response['message'] = 'Data inserted successfully!';
            } else {
                $response['status'] = 'error';
                $response['message'] = 'Database execute statement error: ' . $stmt->error;
            }
            $stmt->close();
            $stmt2->close();
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Database prepare statement error: ' . $db->error;
        }
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Not all required POST parameters were received.';
    }
    $db->close();
    echo json_encode($response);
} else {
    $response['status'] = 'error';
    $response['message'] = 'Request method is not POST.';
    echo json_encode($response);
}
