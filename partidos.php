<?php
include_once 'dbh_inc.php'

?>
<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Partidos</title>

    <link rel="stylesheet" href="partidos_style.css" />
    <script defer src="app.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
</head>

<body>


    <?php
  $sql = "SELECT * FROM Partidos;";
  $result = mysqli_query($conn, $sql);

  echo "<table>";
  echo "<tr><th>ID_Partido</th><th>Resultado</th><th>Fecha</th><th>AtletaID</th><th>ID_Disciplinas</tr>";

  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['ID_Partido'] . "</td>";
    echo "<td>" . $row['Resultado'] . "</td>";
    echo "<td>" . $row['Fecha'] . "</td>";
    echo "<td>" . $row['AtletaID'] . "</td>";
    echo "<td>" . $row['ID_Disciplinas'] . "</td>";
    echo "</tr>";
  }

  echo "</table>";

  ?>







</body>

</html>