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

      <!-- <form action="submit.inc.php" method="POST">
        <input type="number" name="atletaid" placeholder="AtletaID">
        <br>
        <input type="text" name="nombre" placeholder="Nombre">
        <br>
        <input type="text" name="genero" placeholder="Genero">
        <br>
        <input type="text" name="deporte" placeholder="Deporte">
        <br>
        <input type="text" name="fechanac" placeholder="FechaNac">
        <br>
        <input type="number" name="altura" placeholder="Altura">
        <br>
        <input type="number" name="peso" placeholder="Peso">
        <br>
        <input type="text" name="activo" placeholder="Activo">
        <br>
        <button type="submit" name="submit">Submit</button>
      </form> -->


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



    <button class="button_athletes" onclick="location.href='index.html'">Go to home page</button>


  
  </body>
</html>