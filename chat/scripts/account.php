<?php
include("config.php");
$name=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["pass"];
$sql="INSERT INTO users (username,email,pass) VALUES ('$name','$email','$password')";
$conexion->query($sql);
echo "Cuenta registrada correctamente";
?>