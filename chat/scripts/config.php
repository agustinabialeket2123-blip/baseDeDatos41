<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "chat";
$connect = new mysql(  $servidor, $usuario, $password, $basedatos);
if($connect->connect_error){  die("CONNECTION ERROR!"); }
?>