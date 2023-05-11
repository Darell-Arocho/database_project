<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Achievements and Awards</title>

    <link rel="stylesheet" href="achievements_and_awards_style.css" />
    <script defer src="app.js"></script>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
  </head>
  <body>
    
    <button onclick="location.href='index.html'">Go to home page</button>


    <?php

    $serverName = "localhost";
    $userName = "darellal";
    $password = "comp4018";
    $dbName = "db_AmarilysHarryDarell";

    // Create connection

    $con = mysqli_connect($serverName, $userName, $password, $dbName);

    if(mysqli_connect_errno()){
        echo "Failed to connect";
        exit();
    }
    echo "Connection successful!";

?>
  </body>
</html>