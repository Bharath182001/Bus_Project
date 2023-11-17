<?php
   include "config.php";
   
    $query = "
    SELECT DISTINCT * FROM (
        SELECT * FROM bus
        UNION 
        SELECT * FROM manual
    ) AS combinedTables
    GROUP BY busno
    ";
    
    $result = mysqli_query($db, $query);

    var_dump ($result);

