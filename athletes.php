<!-- Establish conexion  -->
<?php
include_once 'dbh_inc.php'

?>
<!-- Render navbar to facilitate navigation -->
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

    <div class="form-container">
        <!-- User inputs -->
        <h3>Añade un nuevo atleta</h3>

        <div class="column">
            <form action="submit.inc.athl.php" method="POST" class="form1">
                <!-- Fields for form 1 -->
                <label for="altura">Altura:</label><br>
                <input type="number" name="altura" placeholder="Altura" id="altura" step="any" required><br>

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
            <!-- Fields for form 2 -->
            <h3>Eliminar atleta</h3>

            <form action="delete.inc.athl.php" method="POST" class="form2">
                <input type="number" name="atletaID" placeholder="AtletaID">
                <br>
                <button type="submit" name="delete" class="submitBTN">Delete</button>
            </form>
        </div>
    </div>



</body>

</html>