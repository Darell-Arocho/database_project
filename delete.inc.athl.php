<?php
    
    include_once 'dbh_inc.php';
    
    if(isset($_POST['delete'])) {
      $deleteID = $_POST['atletaID'];
      
      // Insert the data into the table
      $sql = "DELETE FROM Atletas WHERE ID_Atleta='$deleteID';";
      mysqli_query($conn, $sql);
      
      // Redirect to the previous page
      header("Location: index.html?submit=success");
      exit();
    }
  
  
      
?>