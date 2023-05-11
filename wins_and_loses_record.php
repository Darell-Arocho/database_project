<?php
  include_once 'dbh_inc.php'

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wins and Loses Record</title>

    <link rel="stylesheet" href="wins_and_loses_record_style.css" />
    <script defer src="app.js"></script>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
  </head>
  <body>
    

  <?php
      $sql = "SELECT * FROM Disciplinas;";
      $result = mysqli_query($conn, $sql);
  

      while ($row = mysqli_fetch_assoc($result)){
        echo $row['ID_Disciplinas'] . "<br>";
        echo $row['NombreDisciplina'] . "<br>";
      }

    ?>


    <button class="button_w_l_record" onclick="location.href='index.html'">Go to home page</button>


    
  </body>
</html>