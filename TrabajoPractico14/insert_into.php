<?php
 include("conexion.php");

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $pwd = $_POST['pwd'];

    $consulta_slq = "INSERT INTO inicio(nombre,edad,correo,pwd) VALUES ('$nombre','$correo','$pwd')";

    $envio_consulta = $conexion->query($consulta_slq);

    header('Location: index.php');

     ?>
