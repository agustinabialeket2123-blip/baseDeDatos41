<?php
$host = "localhost";
$usuario = "root";
$password = ""; // Si tenés clave en phpMyAdmin, ponela acá
$base_datos = "chat"; // El nombre exacto de tu base de datos

// Fijate que es mysqli (con 'i' al final)
$conexion = new mysqli($host, $usuario, $password, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>