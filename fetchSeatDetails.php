<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["busno"]) && isset($_POST["seatno"])) {
    $selectedBus = $_POST["busno"];
    $seatNumber = $_POST["seatno"];

    // Fetch seat details for the selected seat
    $seatDetailsQuery = "SELECT * FROM student WHERE busno = $selectedBus AND seatno = $seatNumber";
    $seatDetailsResult = mysqli_query($db, $seatDetailsQuery);

    if ($seatDetailsResult && mysqli_num_rows($seatDetailsResult) > 0) {
        $seatData = mysqli_fetch_assoc($seatDetailsResult);
        $studentName = $seatData['name'];
        $gender = $seatData['gender'];
        // Add more details as needed

        // Display seat details in the modal
        echo '<p><strong>Seat Number:</strong> ' . $seatNumber . '</p>';
        echo '<p><strong>Name:</strong> ' . $studentName . '</p>';
        echo '<p><strong>Gender:</strong> ' . $gender . '</p>';
        // Add more details here as needed
    } else {
        echo '<p>No details found for this seat.</p>';
    }
} else {
    echo '<p>Invalid request.</p>';
}
