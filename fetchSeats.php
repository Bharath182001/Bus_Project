<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["busno"])) {
    $selectedBus = $_POST["busno"];

    $seatQuery = "SELECT avl_seat+alloted_seat as avl_seat FROM bus WHERE busno = $selectedBus;";
    $result = mysqli_query($db, $seatQuery);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $totalSeats = $row['avl_seat'];
    } else {
        echo "Bus not defined";
        exit;
    }
    $leftSeats = 2;
    $rightSeats = 3;
    $rowsOfSeats = ceil($totalSeats / ($leftSeats + $rightSeats));

    $sno = 1;
    //1st 50 seats
    for ($i = 1; $i <= $rowsOfSeats; $i++) {
        for ($j = 1; $j <= $leftSeats; $j++) //left seats
        {
            if ($sno > $totalSeats) {
                break;
            }
            $studentQuery = "SELECT gender FROM student WHERE busno = $selectedBus AND seatno = $sno";
            $studentResult = mysqli_query($db, $studentQuery);
            if ($studentResult && mysqli_num_rows($studentResult) > 0) {
                $studentData = mysqli_fetch_assoc($studentResult);
                $gender = $studentData['gender'];

                // Determine seat color based on gender
                if ($gender == 'male') {
                    $seatColor = '#98C1D9'; // Color for male students
                } elseif ($gender == 'female') {
                    $seatColor = 'pink'; // Color for female students
                } else {
                    $seatColor = 'grey'; // Default color for unallocated seats
                }
            } else {
                $seatColor = 'grey'; // Default color for unallocated seats
            } //added modal target here only
            if ($seatColor != 'grey') {
                //Allocated modal trigger
                $modalTrigger = 'data-toggle="modal" data-target="#allocatedmodal"';
            } else {
                //Unallocated modal trigger
                $modalTrigger = 'data-toggle="modal" data-target="#unallocatedmodal"';
            }
            echo '<span>&nbsp;&nbsp;</span><div class="seat-div left-seat" ' . $modalTrigger . ' data-seatno="' . $sno .  '" style="fill: ' . $seatColor . ';">
            
    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"> 
<path class="cls-ra" d="M36,17.3H80.4a8.88,8.88,0,0,1,6.72-7.25A5.77,5.77,0,0,0,81.57,6H36a5.72,5.72,0,0,0-5.76,5.66A5.71,5.71,0,0,0,36,17.3Z"/> 
<path class="cls-ra" d="M80.29,82.79H36A5.66,5.66,0,1,0,36,94.1H81.47a6.13,6.13,0,0,0,5.44-3.41A8.77,8.77,0,0,1,80.29,82.79Z"/> 
<path class="cls-ra" d="M80.08,79.7V20.5H35.92A8.85,8.85,0,0,1,27.17,13h-18a4,4,0,0,0-4.06,4V82.79a4,4,0,0,0,4.06,3.95H27.28a8.65,8.65,0,0,1,8.75-7Z"/> 
<path class="cls-ra" d="M89.15,12.93a5.71,5.71,0,0,0-5.76,5.65V82.15a5.76,5.76,0,0,0,11.52,0V18.58A5.71,5.71,0,0,0,89.15,12.93Z"/> 
<path class="cls-ra" d="M90.21,9.94a8.93,8.93,0,0,0-8.74-7H36a8.94,8.94,0,0,0-8.75,6.93H9.15A7.22,7.22,0,0,0,2,17V82.79a7.06,7.06,0,0,0,7.15,7h18a8.85,8.85,0,0,0,8.75,7.26H81.47A8.91,8.91,0,0,0,90,90.9a8.81,8.81,0,0,0,8-8.75V18.58A8.84,8.84,0,0,0,90.21,9.94ZM36,6H81.57a5.77,5.77,0,0,1,5.55,4.06A8.88,8.88,0,0,0,80.4,17.3H36a5.71,5.71,0,0,1-5.76-5.65A5.72,5.72,0,0,1,36,6ZM27.28,86.74H9.15a4,4,0,0,1-4.06-3.95V17a4,4,0,0,1,4.06-4h18a8.85,8.85,0,0,0,8.75,7.47H80.08V79.7H36A8.65,8.65,0,0,0,27.28,86.74ZM81.47,94.1H36a5.66,5.66,0,1,1,0-11.31H80.29a8.77,8.77,0,0,0,6.62,7.9A6.13,6.13,0,0,1,81.47,94.1ZM94.91,82.15a5.76,5.76,0,0,1-11.52,0V18.58a5.76,5.76,0,0,1,11.52,0Z"/> 
</svg>
<div class="seat-number">' . $sno . '</div>

  </div><span>&nbsp;&nbsp;</span>';

            $sno++;
        }
        echo '<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>';
        for ($k = 1; $k <= $rightSeats; $k++) //Right seats
        {
            if ($sno > $totalSeats) {
                break;
            }
            $studentQuery = "SELECT gender FROM student WHERE busno = $selectedBus AND seatno = $sno";
            $studentResult = mysqli_query($db, $studentQuery);
            if ($studentResult && mysqli_num_rows($studentResult) > 0) {
                $studentData = mysqli_fetch_assoc($studentResult);
                $gender = $studentData['gender'];

                // Determine seat color based on gender
                if ($gender == 'male') {
                    $seatColor = '#98C1D9'; // Color for male students
                } elseif ($gender == 'female') {
                    $seatColor = 'pink'; // Color for female students
                } else {
                    $seatColor = 'grey'; // Default color for unallocated seats
                }
            } else {
                $seatColor = 'grey'; // Default color for unallocated seats
            }
            if ($seatColor != 'grey') {
                //Allocated modal trigger
                $modalTrigger = 'data-toggle="modal" data-target="#allocatedmodal"';
            } else {
                //Unallocated modal trigger
                $modalTrigger = 'data-toggle="modal" data-target="#unallocatedmodal"';
            }
            echo '<span>&nbsp;&nbsp;</span><div class="seat-div right-seat" ' . $modalTrigger .  ' data-seatno="' . $sno . '" style="fill: ' . $seatColor . ';">
    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" > 
<path class="cls-ra" d="M36,17.3H80.4a8.88,8.88,0,0,1,6.72-7.25A5.77,5.77,0,0,0,81.57,6H36a5.72,5.72,0,0,0-5.76,5.66A5.71,5.71,0,0,0,36,17.3Z"/> 
<path class="cls-ra" d="M80.29,82.79H36A5.66,5.66,0,1,0,36,94.1H81.47a6.13,6.13,0,0,0,5.44-3.41A8.77,8.77,0,0,1,80.29,82.79Z"/> 
<path class="cls-ra" d="M80.08,79.7V20.5H35.92A8.85,8.85,0,0,1,27.17,13h-18a4,4,0,0,0-4.06,4V82.79a4,4,0,0,0,4.06,3.95H27.28a8.65,8.65,0,0,1,8.75-7Z"/> 
<path class="cls-ra" d="M89.15,12.93a5.71,5.71,0,0,0-5.76,5.65V82.15a5.76,5.76,0,0,0,11.52,0V18.58A5.71,5.71,0,0,0,89.15,12.93Z"/> 
<path class="cls-ra" d="M90.21,9.94a8.93,8.93,0,0,0-8.74-7H36a8.94,8.94,0,0,0-8.75,6.93H9.15A7.22,7.22,0,0,0,2,17V82.79a7.06,7.06,0,0,0,7.15,7h18a8.85,8.85,0,0,0,8.75,7.26H81.47A8.91,8.91,0,0,0,90,90.9a8.81,8.81,0,0,0,8-8.75V18.58A8.84,8.84,0,0,0,90.21,9.94ZM36,6H81.57a5.77,5.77,0,0,1,5.55,4.06A8.88,8.88,0,0,0,80.4,17.3H36a5.71,5.71,0,0,1-5.76-5.65A5.72,5.72,0,0,1,36,6ZM27.28,86.74H9.15a4,4,0,0,1-4.06-3.95V17a4,4,0,0,1,4.06-4h18a8.85,8.85,0,0,0,8.75,7.47H80.08V79.7H36A8.65,8.65,0,0,0,27.28,86.74ZM81.47,94.1H36a5.66,5.66,0,1,1,0-11.31H80.29a8.77,8.77,0,0,0,6.62,7.9A6.13,6.13,0,0,1,81.47,94.1ZM94.91,82.15a5.76,5.76,0,0,1-11.52,0V18.58a5.76,5.76,0,0,1,11.52,0Z"/> 
</svg>
<div class="seat-number">' . $sno . '</div>
  </div><span >&nbsp;&nbsp;</span>';
            $sno++;
        }
        echo '<br>';
    }
    //End of for loop for auto allocation
    echo '<div class="border-bottom border-dark my-1 mt-3 text-center"></div><div class="border-bottom border-dark my-1 mb-3 text-center"></div>';
    //Start of Manual seats
    $seatQuery2 = "SELECT avl_seat+alloted_seat as avl_seat FROM manual WHERE busno = $selectedBus;";
    $result2 = mysqli_query($db, $seatQuery2);
    if ($result2) {
        $row2 = mysqli_fetch_assoc($result2);
        $totalSeatsmanual = $row2['avl_seat'];
    } else {
        echo "Bus not defined";
        exit;
    }
    $leftSeatsmanual = 2;
    $rightSeatsmanual = 3;
    $rowsOfSeatsmanual = ceil($totalSeatsmanual / ($leftSeatsmanual + $rightSeatsmanual));
    $snomanual = 51;
    for ($i = 1; $i <= $rowsOfSeatsmanual; $i++) {
        for ($j = 1; $j <= $leftSeatsmanual; $j++) //left seats
        {

            $studentQuery2 = "SELECT gender FROM student WHERE busno = $selectedBus AND seatno = $snomanual";
            $studentResult2 = mysqli_query($db, $studentQuery2);
            if ($studentResult2 && mysqli_num_rows($studentResult2) > 0) {
                $studentData2 = mysqli_fetch_assoc($studentResult2);
                $gender = $studentData2['gender'];

                // Determine seat color based on gender
                if ($gender == 'male') {
                    $seatColor = '#98C1D9'; // Color for male students
                } elseif ($gender == 'female') {
                    $seatColor = 'pink'; // Color for female students
                } else {
                    $seatColor = 'grey'; // Default color for unallocated seats
                }
            } else {
                $seatColor = 'grey'; // Default color for unallocated seats
            } //added modal target here only
            if ($seatColor != 'grey') {
                //Allocated modal trigger
                $modalTrigger = 'data-toggle="modal" data-target="#allocatedmodal"';
            } else {
                //Unallocated modal trigger
                $modalTrigger = 'data-toggle="modal" data-target="#unallocatedmodal"';
            }
            echo '<span>&nbsp;&nbsp;</span><div class="seat-div left-seat" ' . $modalTrigger . ' data-seatno="' . $snomanual .  '" style="fill: ' . $seatColor . ';">
            
    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"> 
<path class="cls-ra" d="M36,17.3H80.4a8.88,8.88,0,0,1,6.72-7.25A5.77,5.77,0,0,0,81.57,6H36a5.72,5.72,0,0,0-5.76,5.66A5.71,5.71,0,0,0,36,17.3Z"/> 
<path class="cls-ra" d="M80.29,82.79H36A5.66,5.66,0,1,0,36,94.1H81.47a6.13,6.13,0,0,0,5.44-3.41A8.77,8.77,0,0,1,80.29,82.79Z"/> 
<path class="cls-ra" d="M80.08,79.7V20.5H35.92A8.85,8.85,0,0,1,27.17,13h-18a4,4,0,0,0-4.06,4V82.79a4,4,0,0,0,4.06,3.95H27.28a8.65,8.65,0,0,1,8.75-7Z"/> 
<path class="cls-ra" d="M89.15,12.93a5.71,5.71,0,0,0-5.76,5.65V82.15a5.76,5.76,0,0,0,11.52,0V18.58A5.71,5.71,0,0,0,89.15,12.93Z"/> 
<path class="cls-ra" d="M90.21,9.94a8.93,8.93,0,0,0-8.74-7H36a8.94,8.94,0,0,0-8.75,6.93H9.15A7.22,7.22,0,0,0,2,17V82.79a7.06,7.06,0,0,0,7.15,7h18a8.85,8.85,0,0,0,8.75,7.26H81.47A8.91,8.91,0,0,0,90,90.9a8.81,8.81,0,0,0,8-8.75V18.58A8.84,8.84,0,0,0,90.21,9.94ZM36,6H81.57a5.77,5.77,0,0,1,5.55,4.06A8.88,8.88,0,0,0,80.4,17.3H36a5.71,5.71,0,0,1-5.76-5.65A5.72,5.72,0,0,1,36,6ZM27.28,86.74H9.15a4,4,0,0,1-4.06-3.95V17a4,4,0,0,1,4.06-4h18a8.85,8.85,0,0,0,8.75,7.47H80.08V79.7H36A8.65,8.65,0,0,0,27.28,86.74ZM81.47,94.1H36a5.66,5.66,0,1,1,0-11.31H80.29a8.77,8.77,0,0,0,6.62,7.9A6.13,6.13,0,0,1,81.47,94.1ZM94.91,82.15a5.76,5.76,0,0,1-11.52,0V18.58a5.76,5.76,0,0,1,11.52,0Z"/> 
</svg>
<div class="seat-number">' . $snomanual . '</div>

  </div><span>&nbsp;&nbsp;</span>';

            $snomanual++;
        }
        echo '<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>';
        for ($k = 1; $k <= $rightSeatsmanual; $k++) //Right seats
        {

            $studentQuery2 = "SELECT gender FROM student WHERE busno = $selectedBus AND seatno = $snomanual";
            $studentResult2 = mysqli_query($db, $studentQuery2);
            if ($studentResult2 && mysqli_num_rows($studentResult2) > 0) {
                $studentData2 = mysqli_fetch_assoc($studentResult2);
                $gender = $studentData2['gender'];

                // Determine seat color based on gender
                if ($gender == 'male') {
                    $seatColor = '#98C1D9'; // Color for male students
                } elseif ($gender == 'female') {
                    $seatColor = 'pink'; // Color for female students
                } else {
                    $seatColor = 'grey'; // Default color for unallocated seats
                }
            } else {
                $seatColor = 'grey'; // Default color for unallocated seats
            }
            if ($seatColor != 'grey') {
                //Allocated modal trigger
                $modalTrigger = 'data-toggle="modal" data-target="#allocatedmodal"';
            } else {
                //Unallocated modal trigger
                $modalTrigger = 'data-toggle="modal" data-target="#unallocatedmodal"';
            }
            echo '<span>&nbsp;&nbsp;</span><div class="seat-div right-seat" ' . $modalTrigger .  ' data-seatno="' . $snomanual . '" style="fill: ' . $seatColor . ';">
    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" > 
<path class="cls-ra" d="M36,17.3H80.4a8.88,8.88,0,0,1,6.72-7.25A5.77,5.77,0,0,0,81.57,6H36a5.72,5.72,0,0,0-5.76,5.66A5.71,5.71,0,0,0,36,17.3Z"/> 
<path class="cls-ra" d="M80.29,82.79H36A5.66,5.66,0,1,0,36,94.1H81.47a6.13,6.13,0,0,0,5.44-3.41A8.77,8.77,0,0,1,80.29,82.79Z"/> 
<path class="cls-ra" d="M80.08,79.7V20.5H35.92A8.85,8.85,0,0,1,27.17,13h-18a4,4,0,0,0-4.06,4V82.79a4,4,0,0,0,4.06,3.95H27.28a8.65,8.65,0,0,1,8.75-7Z"/> 
<path class="cls-ra" d="M89.15,12.93a5.71,5.71,0,0,0-5.76,5.65V82.15a5.76,5.76,0,0,0,11.52,0V18.58A5.71,5.71,0,0,0,89.15,12.93Z"/> 
<path class="cls-ra" d="M90.21,9.94a8.93,8.93,0,0,0-8.74-7H36a8.94,8.94,0,0,0-8.75,6.93H9.15A7.22,7.22,0,0,0,2,17V82.79a7.06,7.06,0,0,0,7.15,7h18a8.85,8.85,0,0,0,8.75,7.26H81.47A8.91,8.91,0,0,0,90,90.9a8.81,8.81,0,0,0,8-8.75V18.58A8.84,8.84,0,0,0,90.21,9.94ZM36,6H81.57a5.77,5.77,0,0,1,5.55,4.06A8.88,8.88,0,0,0,80.4,17.3H36a5.71,5.71,0,0,1-5.76-5.65A5.72,5.72,0,0,1,36,6ZM27.28,86.74H9.15a4,4,0,0,1-4.06-3.95V17a4,4,0,0,1,4.06-4h18a8.85,8.85,0,0,0,8.75,7.47H80.08V79.7H36A8.65,8.65,0,0,0,27.28,86.74ZM81.47,94.1H36a5.66,5.66,0,1,1,0-11.31H80.29a8.77,8.77,0,0,0,6.62,7.9A6.13,6.13,0,0,1,81.47,94.1ZM94.91,82.15a5.76,5.76,0,0,1-11.52,0V18.58a5.76,5.76,0,0,1,11.52,0Z"/> 
</svg>
<div class="seat-number">' . $snomanual . '</div>
  </div><span >&nbsp;&nbsp;</span>';
            $snomanual++;
        }
        echo '<br>';
    }
}
