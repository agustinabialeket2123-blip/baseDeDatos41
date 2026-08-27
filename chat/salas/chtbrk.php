<?php
include $_SERVER['DOCUMENT_ROOT'] .  '/chat/scripts/config.php';
$msg=$_POST["msg"];
$sql="INSERT INTO user (msg) VALUES ('$msg')";
$conexion->query($sql);

?>