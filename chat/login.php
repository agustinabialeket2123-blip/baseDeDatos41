<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <?php include("base/navbar.php"); ?>
    <main>
        <h1>Iniciar Sesión</h1>
        <form action="scripts/loginacc.php" method="POST">
            <label for="username">Nombre de Usuario</label><br>
            <input type="text" id="username" name="username" placeholder="JohnDoe2009x" required><br>
            
            <label for="pass">Contraseña</label><br>
            <input type="password" id="pass" name="pass" placeholder="••••••••" required><br>
            
            <input class="button" type="submit" value="Acceder">
        </form>
    </main>
</body>
</html> 
