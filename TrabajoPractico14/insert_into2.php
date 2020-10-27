<?php
 include("conexion.php");

 $juego = $_POST['juego'];
 $consola = $_POST['plataforma'];
 $precio = $_POST['precio'];
 $direccion = $_POST['destinatario'];

$consulta_slq = "INSERT INTO pedido(juego,plataforma,precio,destinatario) VALUES ('$juego','$plataforma','$precio','$destinatario')";

$envio_consulta = $conexion->query($consulta_slq);

header("Location: pagina.php");
 ?>
