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
    <title>Athletes</title>

    <link rel="stylesheet" href="athletes_style.css" />
    <script defer src="app.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
</head>

<body>


    <div class="table-container">
        <!-- Código de la tabla -->
        <?php
    $sql = "SELECT * FROM Atletas;";
    $result = mysqli_query($conn, $sql);

    echo "<table>";
    echo "<tr><th>ID_Atleta</th><th>Nombre</th><th>Genero</th><th>Deporte</th><th>FechaNac</th><th>Altura</th><th>Peso</th><th>Estado</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row['ID_Atleta'] . "</td>";
      echo "<td>" . $row['Nombre'] . "</td>";
      echo "<td>" . $row['Genero'] . "</td>";
      echo "<td>" . $row['Deporte'] . "</td>";
      echo "<td>" . $row['FechaNac'] . "</td>";
      echo "<td>" . $row['Altura'] . "</td>";
      echo "<td>" . $row['Peso'] . "</td>";
      echo "<td>" . $row['Estado'] . "</td>";
      echo "</tr>";
    }

    echo "</table>";

    ?>
    </div>
    <div class="form-container">
        <!-- User inputs -->
        <h3>Añade un nuevo atleta</h3>

        <div class="column">
            <form action="submit.inc.athl.php" method="POST" class="form1">
                <!-- Fields for form 1 -->
                <label for="altura">Altura:</label><br>
                <input type="number" name="altura" placeholder="Altura" id="altura" required><br>

                <label for="deporte">Deporte:</label><br>
                <input type="text" name="deporte" placeholder="Deporte" id="deporte" required><br>

                <label for="estado">Estado:</label><br>
                <input type="text" name="estado" placeholder="Activo" id="estado" required><br>

                <label for="fechanac">FechaNac:</label><br>
                <input type="date" name="fechanac" id="fechanac" required><br>

                <label for="genero">Genero:</label><br>
                <input type="text" name="genero" placeholder="Genero" id="genero" required><br>

                <label for="atletaID">AtletaID:</label><br>
                <input type="number" name="atletaID" placeholder="AtletaID" id="atletaID" required><br>

                <label for="nombre">Nombre:</label><br>
                <input type="text" name="nombre" placeholder="Nombre" id="nombre" required><br>

                <label for="peso">Peso:</label><br>
                <input type="number" name="peso" placeholder="Peso" id="peso" required><br>
                <button type="submit" name="submit" class="submitBTN">Submit</button>
            </form>
        </div>

        <div class="column">
            <form action="delete.inc.athl.php" method="POST" class="form2">
                <!-- Fields for form 2 -->
                <h3>Eliminar atleta</h3>

                <form action="delete.inc.athl.php" method="POST" class="form2">
                    <input type="number" name="atletaID" placeholder="AtletaID">
                    <br>
                    <button type="submit" name="delete" class="submitBTN">Delete</button>
                </form>
        </div>
    </div>






    <?php
  // if (isset($_POST['submit'])) {
  //   $atleta_id = $_POST['atletaid'];
  //   $nombre = $_POST['nombre'];
  //   $genero = $_POST['genero'];
  //   $deporte = $_POST['deporte'];
  //   $fecha_nac = $_POST['fechanac'];
  //   $altura = $_POST['altura'];
  //   $peso = $_POST['peso'];
  //   $activo = $_POST['activo'];

  //   // Use a prepared statement to insert the values into the database
  //   $stmt = mysqli_prepare($conn, "INSERT INTO Atletas (ID_Atleta, Nombre, Genero, Deporte, FechaNac, Altura, Peso, Activo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  //   mysqli_stmt_bind_param($stmt, "issssiis", $atleta_id, $nombre, $genero, $deporte, $fecha_nac, $altura, $peso, $activo);
  //   mysqli_stmt_execute($stmt);

  //   // Redirect the user back to the form page
  //   header("Location: athletes.php?submit=success");
  //   exit();
  // }
  ?>



    <!-- <button class="button_athletes" onclick="location.href='index.html'">Go to home page</button> -->



</body>

</html>