<?php
  include_once 'dbh_inc.php'

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Discipline</title>

    <link rel="stylesheet" href="sports_style.css" />
    <script defer src="app.js"></script>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- <style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: center;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #4CAF50;
			color: white;
		}
	</style> -->

  <!-- <style>
  table {
    border-collapse: collapse;
    width: 100%;
  }
  th, td {
    text-align: center;
    padding: 8px;
    border-bottom: 1px solid #ddd;
    border-right: 1px solid #ddd;
  }
  th {
    background-color: #4CAF50;
    color: white;
  }
</style> -->



  </head>
  <body>
    
    <!-- <div class="container">
      <div class="row ">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h2 class="header2">Disciplinas</h2>
            </div>
            <div class="card-body">
              <table class="table">
                <tr class="bg-dark">
                  <td>ID_Disciplinas</td>
                  <td>NombreDisciplina</td>
                </tr>
                <tr>
                  <td>ID_Disciplinas</td>
                  <td>NombreDisciplina</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <?php
      // $sql = "SELECT * FROM Disciplinas;";
      // $result = mysqli_query($conn, $sql);
  

      // while ($row = mysqli_fetch_assoc($result)){
      //   echo $row['ID_Disciplinas'] . "<br>";
      //   echo $row['NombreDisciplina'] . "<br>";
      // }

      
      $sql = "SELECT * FROM Disciplinas;";
      $result = mysqli_query($conn, $sql);
    
      echo "<table>";
      echo "<tr><th>ID_Disciplina</th><th>NombreDisciplina</th></tr>";
    
      while ($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row['ID_Disciplinas'] . "</td>";
        echo "<td>" . $row['NombreDisciplina'] . "</td>";
        echo "</tr>";
      }
    
      echo "</table>";
    
    

     ?>




    <button class="button_sports" onclick="location.href='index.html'">Go to home page</button>


    
  </body>
</html>