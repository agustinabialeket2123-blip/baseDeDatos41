<?php
$sala = isset($_GET['room']) ? htmlspecialchars($_GET['room']) : 'general';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat General - <?php echo ucfirst($sala); ?></title>
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/chat/base/navbar.php'; ?>
    <main>
       <h2>Estás en la sala: <?php echo ucfirst($sala); ?></h2>
       <div id="chatbox" style="margin:auto;">
            <textarea name="" id="textchat" disabled rows="25" cols="45" ></textarea>
            <form action="chtbrk.php?room=<?php echo $sala; ?>" method="POST" style="position:absolute; bottom:0;">
            <input type="hidden" name="room" value="<?php echo $sala; ?>">

            <input type="text" id="msg" name="msg" placeholder="Escribe aquí un mensaje:" required style="padding: 0.5vh; padding-inline: 1.5vw;  font-size: medium;">´
            <input class="button" type="submit" value="Enviar">
        </form>
    </div>
    </main>
</body>
</html>