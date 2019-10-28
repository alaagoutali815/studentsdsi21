<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="jumbotron">
<h2 class="text-center">Liste des étudiants  DSI21 Iset Bizerte 2019</h2>

</div>

  <table class="table table-dark">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Operation</th>
            

        </tr>
        </thead>
    <tbody>
   
<?php
include 'dbconnexion.php';

$sql = "SELECT * FROM students";
$result = $bdd->query($sql);


  
  
    while($row = $result->fetch()) {
      
        echo "<tr>";
        echo "<td>". $row['id']. "</td>";
        echo "<td>". $row['firstname']. " </td>";
        echo "<td>" . $row['lastname']. " </td>" ;
        echo "<td>". $row['email']. "</td>";
        echo "<td>" . $row['phone']. "</td>";
        echo "</tr>";
    }
   

?>
 </table>
</div>
</body>
</html>