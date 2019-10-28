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
$f=$_POST['firstname'];
$l=$_POST['lastname'];
$e=$_POST['email'];
$p=$_POST['phone'];


$bdd->exec("UPDATE students SET phone='$p' WHERE firstname='$f'"); 
echo 'entree ont etee modifier';



?>
</body>
</html>