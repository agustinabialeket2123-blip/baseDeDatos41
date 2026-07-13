<?php
include("config.php");
$sql="SELECT * FROM clientes";
$resultado=$conexion->query($sql);
while($fila=$resultado->fetch_assoc()){ echo $fila["nombre"]; echo "<br>";}
?>
