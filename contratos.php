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
    <title>Contratos</title>

    <link rel="stylesheet" href="contratos_style.css" />
    <script defer src="app.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
</head>

<body>


    <?php
  $sql = "SELECT * FROM Contratos;";
  $result = mysqli_query($conn, $sql);

  echo "<table>";
  echo "<tr><th>ID_Contrato</th><th>FechaFin</th><th>FechaInicio</th><th>Salario</th><th>AtletaID</th><th>EquipoID</th></tr>";

  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['ID_Contrato'] . "</td>";
    echo "<td>" . $row['FechaFin'] . "</td>";
    echo "<td>" . $row['FechaInicio'] . "</td>";
    echo "<td>" . $row['Salario'] . "</td>";
    echo "<td>" . $row['AtletaID'] . "</td>";
    echo "<td>" . $row['EquipoID'] . "</td>";
    echo "</tr>";
  }

  echo "</table>";

  ?>







</body>

</html>