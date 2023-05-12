<?php
    include_once 'dbh_inc.php';
    
    if(isset($_POST['modify'])) {
      $logroID = $_POST['logroID'];
      $nombreLogro = $_POST['nombreLogro'];
      $fecha = $_POST['fecha'];
      $atletaID = $_POST['atletaID'];
      
      // Update the data in the table
      $sql = "UPDATE Logros_y_Reconocimientos SET Nombre_Logro='$nombreLogro', Fecha='$fecha', AtletaID='$atletaID'
              WHERE ID_Logro='$logroID';";
      mysqli_query($conn, $sql);
      
      // Redirect to the previous page
      header("Location: index.html?submit=success");
      exit();
    }
?>
