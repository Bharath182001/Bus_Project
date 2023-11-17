<?php
include "config.php";

$busNumber = $_POST['busno'];
$query = "SELECT*FROM student WHERE busno = ?";

$stmt = $db->prepare($query);
$stmt->bind_param('s', $busNumber);

if ($stmt->execute()) {
    $result = $stmt->get_result();
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo json_encode(["error" => "Error fetching student details: " . $stmt->error]);
}
?>