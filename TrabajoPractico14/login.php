<?php
    include("conexion.php");

    $nombre = $_POST['nombre'];
    $pwd = $_POST['pwd'];

    $validacion;

    $query = mysqli_query($conexion,"SELECT * FROM inicio WHERE nombre = '".$nombre."' AND pwd = '".$pwd."'");

    $resultado = mysqli_num_rows($query);

    if($resultado == 1){
        $validacion =  $nombre;
        header("Location: pagina.php");
    }
    else{
        $validacion = "El Nombre de usuario y/o contraseña ingresados son incorrectos incorrectos";
        header("Location: error.php");
    }

?>
