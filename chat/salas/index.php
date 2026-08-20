<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar Sesión</title>
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] .  '/chat/base/navbar.php'; ?>
        <main>
            <h1>Selección de salas</h1>
            <a href="chat.php?room=general">General</a>
            <a href="chat.php?room=tecno">Tecnología</a>
            <a href="chat.php?room=polit">Política</a>
            <a href="chat.php?room=juegos">Videojuegos</a>
            <a href="chat.php?room=depor">Deportes</a>
            <a href="chat.php?room=cocina">Cocina</a>
            <a href="chat.php?room=musica">Música</a>
        </main>
    </body>
    </html>