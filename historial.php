<?php
  include_once 'dbh_inc.php'

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Historial</title>

    <link rel="stylesheet" href="historial_style.css" />
    <script defer src="app.js"></script>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
  </head>
  <body>
    

  <?php
      $sql = "SELECT * FROM Historial_de_Equipos;";
      $result = mysqli_query($conn, $sql);
    
      echo "<table>";
      echo "<tr><th>ID_Historial</th><th>FechaInicio</th><th>FechaFin</th><th>AtletaID</th><th>EquipoID</tr>";
    
      while ($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row['ID_Historial'] . "</td>";
        echo "<td>" . $row['FechaInicio'] . "</td>";
        echo "<td>" . $row['FechaFin'] . "</td>";
        echo "<td>" . $row['AtletaID'] . "</td>";
        echo "<td>" . $row['EquipoID'] . "</td>";
        echo "</tr>";
      }
    
      echo "</table>";

    ?>




    <button class="button_athletes" onclick="location.href='index.html'">Go to home page</button>


  
  </body>
</html>