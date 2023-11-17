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
    if (isset($_POST["regno"])) {
        $regno = $_POST["regno"];

        // Start transaction
        $db->begin_transaction();

        // Fetch busno, gender, and seatno associated with the regno
        $busno_sql = "SELECT busno, gender, seatno FROM student WHERE regno = ?";
        $busno_stmt = $db->prepare($busno_sql);
        $busno_stmt->bind_param('s', $regno);
        $busno_stmt->execute();
        $busno_result = $busno_stmt->get_result();

        if ($busno_result->num_rows > 0) {
            $row = $busno_result->fetch_assoc();
            $busno = $row['busno'];
            $gender = $row['gender'];
            $seatno = $row['seatno'];

            // Fetch init_seat from the bus table for the particular busno
            $init_seat_sql = "SELECT init_seat FROM bus WHERE busno = ?";
            $init_seat_stmt = $db->prepare($init_seat_sql);
            $init_seat_stmt->bind_param('s', $busno);
            $init_seat_stmt->execute();
            $init_seat_result = $init_seat_stmt->get_result();
            $init_seat_row = $init_seat_result->fetch_assoc();
            $init_seat = $init_seat_row['init_seat'];

            // If the seat number from the student table is greater than init_seat, update the manual table
            if ($seatno > $init_seat) {
                $gender_update0 = ($gender == 'male') ? ", all_male_seat = all_male_seat - 1" : ", all_female_seat = all_female_seat - 1";
                $update_manual_sql = "UPDATE manual SET  avl_seat = avl_seat + 1, alloted_seat = alloted_seat - 1" . $gender_update0 . " WHERE busno = ?";
                $update_manual_stmt = $db->prepare($update_manual_sql);
                $update_manual_stmt->bind_param('i', $busno);
                $update_manual_stmt->execute();
                $update_manual_stmt->close();
            }

            // Delete the student
            $sql = "DELETE FROM student WHERE regno = ?";
            $stmt = $db->prepare($sql);
            $stmt->bind_param('s', $regno);

            if ($stmt->execute()) {
                // If seatno is NOT greater than init_seat, update the bus table
                if ($seatno <= $init_seat) {
                    $gender_update = ($gender == 'male') ? ", all_male_seat = all_male_seat - 1" : ", all_female_seat = all_female_seat - 1";
                    $update_sql = "UPDATE bus SET avl_seat = avl_seat + 1, alloted_seat = alloted_seat - 1" . $gender_update . " WHERE busno = ?";
                    $update_stmt = $db->prepare($update_sql);
                    $update_stmt->bind_param('s', $busno);
                    $update_stmt->execute();
                    $update_stmt->close();
                }

                $response['status'] = 'success';
                $response['message'] = 'Data Deleted successfully!';
                $db->commit();
            } else {
                error_log("Error deleting student: " . $stmt->error);
                $db->rollback();
            }
            $stmt->close();
            $init_seat_stmt->close();
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Regno not found in the database.';
            $db->rollback();
        }
        $busno_stmt->close();
    } else {
        $response['status'] = 'error';
        $response['message'] = 'No regno provided.';
    }
    $db->close();
    echo json_encode($response);
} else {
    $response['status'] = 'error';
    $response['message'] = 'Request method is not POST.';
    echo json_encode($response);
}

?>
