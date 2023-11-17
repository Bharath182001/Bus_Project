<?php
include "config.php";

if (isset($_POST['selectedBus'])) {
    $selectedBus = $_POST['selectedBus'];
    $optionsHtml = '';
    $sql = "SELECT stoppings FROM bus WHERE busno = '$selectedBus'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $stoppingsList = explode(",", $row['stoppings']);
            foreach ($stoppingsList as $stopping) {
                $trimmedStopping = trim($stopping);
                $optionsHtml .= '<option value="' . $trimmedStopping . '">' . $trimmedStopping . '</option>';
            }
        }
    }

    echo $optionsHtml;
} else {
    echo '';
}


if (isset($_POST['stopping'], $_POST['regno'], $_POST['name'], $_POST['gender'], $_POST['bus'], $_POST['seat'])) {
    $stopping = $_POST['stopping'];
    $regno = $_POST['regno'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $bus = $_POST['bus'];
    $seat = $_POST['seat'];
    $usercheckQuery = "SELECT * from student WHERE regno = '$regno'";
    $usercheckexec = mysqli_query($db, $usercheckQuery);
    if (mysqli_num_rows($usercheckexec) == 0) {

        $insertQuery = "INSERT INTO student (regno, name, gender, stopping, seatno, generated_date, busno) VALUES ('$regno', '$name', '$gender', '$stopping', '$seat', NOW(), '$bus')";
        if (mysqli_query($db, $insertQuery)) {

            if ($seat >= 51 && $seat <= 60) {
                $updationQuery = "UPDATE manual SET avl_seat = avl_seat-1,alloted_seat = alloted_seat+1 WHERE busno = $bus";
                mysqli_query($db, $updationQuery);

                $genderUpdateQuery = ($gender == 'male') ? "UPDATE manual SET all_male_seat = all_male_seat+1 WHERE busno = $bus" : "UPDATE manual SET all_female_seat = all_female_seat+1 WHERE busno = $bus";
                mysqli_query($db, $genderUpdateQuery);
            } else {
                $updationQuery = "UPDATE bus SET avl_seat = avl_seat-1,alloted_seat = alloted_seat+1 WHERE busno = $bus";
                mysqli_query($db, $updationQuery);

                $genderUpdateQuery = ($gender == 'male') ? "UPDATE bus SET all_male_seat = all_male_seat+1 WHERE busno = $bus" : "UPDATE bus SET all_female_seat = all_female_seat+1 WHERE busno = $bus";
                mysqli_query($db, $genderUpdateQuery);
            }
            $response = array('status' => 'success');
            echo json_encode($response);
        }
    } else {
        $response = array('status' => 'duplicate');
        echo json_encode($response);
    }
} else {
    // Invalid request, return an error response
    $response = array('status' => 'error', 'message' => 'Invalid request');
    echo json_encode($response);
}
