<?php
include("config.php");
$name=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["pass"];
$sql="INSERT INTO user (username,email,pass) VALUES ('$username','$email','$pass')";
$conexion->query($sql);
echo "Cuenta registrada correctamente";
?>