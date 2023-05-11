<?php
  include_once 'dbh_inc.php'

?>

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
    

  <?php
      $sql = "SELECT * FROM Logros_y_Reconocimientos;";
      $result = mysqli_query($conn, $sql);
    
      echo "<table>";
      echo "<tr><th>ID_Logro</th><th>Nombre_Logro</th><th>Fecha</th><th>AtletaID</th></tr>";
    
      while ($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row['ID_Logro'] . "</td>";
        echo "<td>" . $row['Nombre_Logo'] . "</td>";
        echo "<td>" . $row['Fecha'] . "</td>";
        echo "<td>" . $row['Atleta'] . "</td>";
        echo "</tr>";
      }
    
      echo "</table>";
      

    ?>




    <button class="button_achiev_awards" onclick="location.href='index.html'">Go to home page</button>


  </body>
</html>