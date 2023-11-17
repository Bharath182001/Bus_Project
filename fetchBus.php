<?php
include("config.php");

$response = ['status' => 500, 'message' => 'Internal error'];
   
$regno = mysqli_real_escape_string($db, $_POST['regno']);
$name = mysqli_real_escape_string($db, $_POST['name']);
$gender = mysqli_real_escape_string($db, $_POST['gender']);
$selectedStopping = mysqli_real_escape_string($db, $_POST['stopping']);
$fatherName = mysqli_real_escape_string($db, $_POST['fatherName']);
$dob = mysqli_real_escape_string($db, $_POST['dob']);
$department = mysqli_real_escape_string($db, $_POST['department']);
$Year = mysqli_real_escape_string($db, $_POST['year']);
$bloodGroup = mysqli_real_escape_string($db, $_POST['bloodGroup']);
$Address = mysqli_real_escape_string($db, $_POST['address']);
$fatherMobileNumber = mysqli_real_escape_string($db, $_POST['Father_Number']);
$motherMobileNumber = mysqli_real_escape_string($db, $_POST['Mother_Number']);
$guardianMobileNumber = mysqli_real_escape_string($db, $_POST['Guardian_Number']);
$studentMobileNumber = mysqli_real_escape_string($db, $_POST['Student_Number']);
$emailAddress = mysqli_real_escape_string($db, $_POST['emailAddress']);
$semester = mysqli_real_escape_string($db, $_POST['semester']);
$graduate = mysqli_real_escape_string($db, $_POST['graduate']);

// Handle image upload
if (isset($_FILES['image'])) {
    $image = $_FILES['image'];
    $imagePath = ''; // Initialize the image path

    if ($image['error'] == UPLOAD_ERR_OK) {
        // Specify the folder where you want to save the uploaded images
        $targetDir = 'studentimages/';  // Corrected path

        // Generate a unique name for the image to avoid overwriting
        $imagePath = $targetDir . uniqid() . '_' . $image['name'];

        // Move the uploaded image to the specified folder
        if (move_uploaded_file($image['tmp_name'], $imagePath)) {
            // Image upload was successful
        } else {
            // Handle the case where image upload fails
            $response = ['status' => 500, 'message' => 'Failed to upload the image.'];
            echo json_encode($response);
            exit;
        }
    }
}

$query = "SELECT busno, avl_seat, alloted_seat, init_seat FROM bus WHERE stoppings LIKE '%" . $selectedStopping . "%' AND avl_seat > 0";
$result = mysqli_query($db, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $busno = $row['busno'];
    $MAX_SEATS = $row['avl_seat'] + $row['alloted_seat'];
    $totalSeats = $row['init_seat'];

    // Separate seats for males and females whenever possible
    $separateSeats = $gender == 'female' ? $MAX_SEATS % 2 : 0;

    // Initialize seat number based on gender
    $seatNumber = ($gender == 'male') ? $MAX_SEATS : 1;

    // Loop to find a suitable seat
    while ($seatNumber >= 1 && $seatNumber <= $MAX_SEATS) {
        // Check if the seat is already taken
        $seatCheckQuery = "SELECT seatno FROM student WHERE busno = $busno AND seatno = $seatNumber";
        $seatCheckResult = mysqli_query($db, $seatCheckQuery);

        if (mysqli_num_rows($seatCheckResult) == 0) {
            // Seat is available

            // ... (remaining code)

            $insertQuery = "INSERT INTO student(regno, name, gender, stopping, seatno, busno, generated_date, studentImage, fatherName, dob, Branch, Address, Year, Blood_Group, fatherMobileNumber, MotherMobileNumber, GuardianMobileNumber, studentMobileNumber, email, semester, graduation) VALUES('$regno', '$name', '$gender', '$selectedStopping', '$seatNumber', '$busno', NOW(), '$imagePath', '$fatherName', '$dob', '$department', '$Address', '$Year', '$bloodGroup', '$fatherMobileNumber', '$motherMobileNumber', '$guardianMobileNumber', '$studentMobileNumber', '$emailAddress', '$semester', '$graduate')";

            if (mysqli_query($db, $insertQuery)) {
                $updationQuery = "UPDATE bus SET avl_seat = avl_seat-1,alloted_seat = alloted_seat+1 WHERE busno = $busno";
                mysqli_query($db, $updationQuery);

                $genderUpdateQuery = ($gender == 'male') ? "UPDATE bus SET all_male_seat = all_male_seat+1 WHERE busno = $busno" : "UPDATE bus SET all_female_seat = all_female_seat+1 WHERE busno = $busno";
                mysqli_query($db, $genderUpdateQuery);

                $response = ['status' => 200, 'message' => 'Pass generated Successfully', 'gender' => $gender];
                break; // Exit the loop after successful allocation
            } else {
                $response = ['status' => 500, 'message' => 'Error: ' . mysqli_error($db)];
                break; // Exit the loop if there is an error
            }
        } else {
            // Move to the next seat
            $seatNumber = ($gender == 'male') ? $seatNumber - 1 : $seatNumber + 1;
        }
    }

    if ($seatNumber > $MAX_SEATS) {
        $response = ['status' => 404, 'message' => 'No suitable seats available'];
    }
} else {
    $response = ['status' => 404, 'message' => 'No buses available for the selected stopping'];
}

echo json_encode($response);
?>
