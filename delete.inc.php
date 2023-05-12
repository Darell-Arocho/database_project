<?php
    
    include_once 'dbh_inc.php';
    
    if(isset($_POST['delete'])) {
      $deleteID = $_POST['disciplinaID'];
      
      // Insert the data into the table
      $sql = "DELETE FROM Disciplinas WHERE ID_Disciplinas='$deleteID';";
      mysqli_query($conn, $sql);
      
      // Redirect to the previous page
      header("Location: index.html?submit=success");
      exit();
    }
  
  
      
?>