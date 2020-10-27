<?php
include("conexion.php");
 $id = $_REQUEST['id'];

 $juego = $_POST['juego'];
 $consola = $_POST['platadorma'];
 $precio = $_POST['precio'];
 $direccion = $_POST['destinatario'];

 $query = "UPDATE pedido SET juego='$juego', plataforma='$plataforma', precio='$precio', destinatario='$destinatario' WHERE id = '$id'";
 $envio = $conexion->query($query);

 header("Location: pagina.php");
 ?>
