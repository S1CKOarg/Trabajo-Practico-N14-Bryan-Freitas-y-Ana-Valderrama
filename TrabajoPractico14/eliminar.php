<?php

include("conexion.php");

$id = $_REQUEST['id'];

$query = "DELETE FROM pedido WHERE id='$id'";
$envio = $conexion->query($query);

header("Location: pagina.php");
?>
