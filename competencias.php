<?php
include_once 'dbh_inc.php'

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Competencias</title>

  <link rel="stylesheet" href="competencias_style.css" />
  <script defer src="app.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
</head>

<body>


  <?php
  $sql = "SELECT * FROM Competencias;";
  $result = mysqli_query($conn, $sql);

  echo "<table>";
  echo
  "<tr><th>ID_Competencias</th><th>NombreCompetencia</th><th>NivelCompetencia</th><th>ID_Atleta</th><th>Fecha</th></tr>";

  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['ID_Competencias'] . "</td>";
    echo "<td>" . $row['NombreCompetencia'] . "</td>";
    echo "<td>" . $row['NivelCompetencia'] . "</td>";
    echo "<td>" . $row['ID_Atleta'] . "</td>";
    echo "<td>" . $row['Fecha'] . "</td>";
    echo "</tr>";
  }

  echo "</table>";

  ?>




  <button class="button_athletes" onclick="location.href='index.html'">Go to home page</button>



</body>

</html>