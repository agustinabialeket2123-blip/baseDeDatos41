<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <?php include("base/navbar.php"); ?>
    <main>
        <h1>Crear una cuenta</h1>
        <form action="/chat/scripts/account.php" method="POST">
                <label for="username">Nombre de Usuario</label><br>
                <input type="text" name="username" placeholder="JohnDoe2009x"required><br>
                
                <label for="email">Correo Electrónico</label><br>
                <input type="email" name="email" placeholder="correo@tmail.com" required><br>

                <label for="pass">Contraseña</label><br>
                <input type="password" name="pass" placeholder="••••••••" required><br>

                <label for="passCheck">Repetir Contraseña</label><br>
                <input type="password" name="passCheck" placeholder="••••••••" required><br>
                
                <input class="checkbox" type="checkbox" name="agree" required>
                <label class="smallText" for="agree">Prometo cumplir con todas las <a href="reglas.html">reglas</a> que se encuentan en este servicio de chat.</label>		<br>
                <input class="button" type="submit" value="Registrarse">
            </form>
    </main>
</body>
</html> 
