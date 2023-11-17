<?php
include "config.php";

if (isset($_POST['getAllBusesReport'])) {
    $query = "
    SELECT 
        b.busno,
        SUM(b.avl_seat + IFNULL(m.avl_seat, 0)) as total_seats,
        SUM(b.all_male_seat + IFNULL(m.all_male_seat, 0)) as total_male_seats,
        SUM(b.all_female_seat + IFNULL(m.all_female_seat, 0)) as total_female_seats,
        SUM(b.all_male_seat + IFNULL(m.all_male_seat, 0) + b.all_female_seat + IFNULL(m.all_female_seat, 0)) as alloted_seat
    FROM bus b
    LEFT JOIN manual m ON b.busno = m.busno
    GROUP BY b.busno;
    ";
    
    $result = mysqli_query($db, $query);

    $allBusData = [];

    while ($bus = mysqli_fetch_assoc($result)) {
        $busNumber = $bus['busno'];
        
        // Getting students for the bus
        $studentQuery = "SELECT * FROM student WHERE busno = '$busNumber'";
        $studentResult = mysqli_query($db, $studentQuery);

        $students = [];
        while ($student = mysqli_fetch_assoc($studentResult)) {
            $students[] = $student;
        }

        $bus['students'] = $students;
        $allBusData[] = $bus;
    }

    echo json_encode($allBusData);
}
?>