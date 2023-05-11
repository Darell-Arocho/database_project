<?php

    $serverName = "localhost";
    $userName = "darellal";
    $password = "comp4018";
    $dbName = "db_AmarilysHarryDarell";

    // Create connection

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);

    if(mysqli_connect_errno()){
        echo "Failed to connect";
        exit();
    }
    echo "Connection successful!";

?>