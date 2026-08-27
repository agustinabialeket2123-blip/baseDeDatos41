<?php
session_start();
require_once '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $pass = $_POST['pass'];

    $stmt = $conexion->prepare("SELECT id, usuario, password FROM usuarios WHERE usuario = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($user = $resultado->fetch_assoc()) {
        if (password_verify($pass, $user['password']) || $pass === $user['password']) {
            $_SESSION['usuario'] = $user['usuario'];
            header("Location: ../index.php");
            exit();
        }
    }
    
    // Si falla el login, regresa con un mensaje de error
    header("Location: ../login.php?error=1");
    exit();
}
?>