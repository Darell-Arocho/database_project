<?php
    
    include_once 'dbh_inc.php';
    
    if(isset($_POST['submit'])) {
      $altura= $_POST['altura'];
      $deporte = $_POST['deporte'];
      $estado = $_POST['estado'];
      $fechanac = $_POST['fechanac'];
      $genero = $_POST['genero'];
      $atletaID = $_POST['atletaID'];
      $nombre = $_POST['nombre'];
      $peso = $_POST['peso'];
      
      // Insert the data into the table
      $sql = "INSERT INTO Atletas (Altura, Deporte, Estado, FechaNac, Genero, ID_Atleta, Nombre, Peso)
              VALUES ('$altura', '$deporte', '$estado', '$fechanac', '$genero', '$atletaID', '$nombre', '$peso');";
      mysqli_query($conn, $sql);
      
      // Redirect to the previous page
      header("Location: index.html?submit=success");
      exit();
    }
  
  
      
?>