<?php
  include_once 'dbh_inc.php'

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Athletes</title>

    <link rel="stylesheet" href="athletes_style.css" />
    <script defer src="app.js"></script>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
  </head>
  <body>
    

  <?php
      $sql = "SELECT * FROM Atletas;";
      $result = mysqli_query($conn, $sql);
    
      echo "<table>";
      echo "<tr><th>ID_Atleta</th><th>Nombre</th><th>Genero</th><th>Deporte</th><th>FechaNac</th><th>Altura</th><th>Peso</th><th>Activo</th></tr>";
    
      while ($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row['ID_Atleta'] . "</td>";
        echo "<td>" . $row['Nombre'] . "</td>";
        echo "<td>" . $row['Genero'] . "</td>";
        echo "<td>" . $row['Deporte'] . "</td>";
        echo "<td>" . $row['FechaNac'] . "</td>";
        echo "<td>" . $row['Altura'] . "</td>";
        echo "<td>" . $row['Peso'] . "</td>";
        echo "<td>" . $row['Activo'] . "</td>";
        echo "</tr>";
      }
    
      echo "</table>";

    ?>




    <button class="button_athletes" onclick="location.href='index.html'">Go to home page</button>


  
  </body>
</html>