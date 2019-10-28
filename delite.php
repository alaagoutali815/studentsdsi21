<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

include 'dbconnexion.php';
$fna=$_POST['firstname'];
$lna=$_POST['lastname'];
$ema=$_POST['email'];
$pho=$_POST['phone'];


$bdd->exec("DELETE FROM students WHERE phone='$p' "); 

echo 'entree ont etee modifier';



?>
</body>
</html>