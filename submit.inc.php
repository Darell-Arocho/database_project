<?php
    
    include_once 'dbh_inc.php';
    
    if(isset($_POST['submit'])) {
      $disciplinaID = $_POST['disciplinaID'];
      $nombreDisciplina = $_POST['nombreDisciplina'];
      
      // Insert the data into the table
      $sql = "INSERT INTO Disciplinas (ID_Disciplinas, NombreDisciplina)
              VALUES ('$disciplinaID', '$nombreDisciplina');";
      mysqli_query($conn, $sql);
      
      // Redirect to the previous page
      header("Location: index.html?submit=success");
      exit();
    }
  
  
      
?>