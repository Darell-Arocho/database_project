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
    <title>Achievements and Awards</title>

    <link rel="stylesheet" href="achievements_and_awards_style.css" />
    <script defer src="app.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
</head>

<body>

    <!-- Table of Achivements and awards -->

    <?php
  $sql = "SELECT * FROM Logros_y_Reconocimientos;";
  $result = mysqli_query($conn, $sql);

  echo "<table>";
  echo "<tr><th>ID_Logro</th><th>Nombre_Logro</th><th>Fecha</th><th>AtletaID</th></tr>";

  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['ID_Logro'] . "</td>";
    echo "<td>" . $row['Nombre_Logro'] . "</td>";
    echo "<td>" . $row['Fecha'] . "</td>";
    echo "<td>" . $row['AtletaID'] . "</td>";
    echo "</tr>";
  }

  echo "</table>";


  ?>
    <!-- Queries for modifying an achivement -->
    <div class="form-container">
        <!-- User inputs -->
        <h3>Modifica</h3>

        <form action="modify.inc.logros.php" method="POST" class="form1">
            <input type="number" name="logroID" placeholder="LogroID">
            <br>
            <input type="text" name="nombreLogro" placeholder="NombreLogro">
            <br>
            <input type="text" name="fecha" placeholder="Fecha">
            <br>
            <input type="number" name="atletaID" placeholder="AtletaID">
            <br>
            <button type="submit" name="modify" class="submitBTN">Modify</button>
        </form>
    </div>
    <!-- <form action="submit.inc.logros.php" method="POST" class="form2">
        <input type="number" name="logroID" placeholder="LogroID">
        <br>
        <input type="text" name="nombreLogro" placeholder="NombreLogro">
        <br>
        <input type="text" name="fecha" placeholder="Fecha">
        <br>
        <input type="number" name="atletaID" placeholder="AtletaID">
        <br>
        <button type="submit" name="submit">submit</button>
      </form> -->



</body>

</html>