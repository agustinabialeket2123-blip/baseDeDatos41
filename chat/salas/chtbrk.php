<?php
include("config.php");
$user=$_POST["username"];
$msg=$_POST["msg"];
$sql="INSERT INTO user (username,email,pass) VALUES ('$username','$email','$pass')";
$conexion->query($sql);
echo "Cuenta registrada correctamente";
?>