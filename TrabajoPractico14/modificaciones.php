<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Modificar</title>
  </head>
  <body>
    <?php
    include("conexion.php");
        $id = $_REQUEST['id'];
        $query = "SELECT * FROM pedido WHERE id='$id'";
        $envio = $conexion->query($query);
        $row=$envio->fetch_assoc();
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="">Bienvenido</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="pedidos.php">Pedir juegos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Cerrar Sesion</a>
      </li>
     </ul>
   </div>
  </nav>
  <br></br>
  <form style="width:30%; margin-left:5%; margin-top:5%; border:1px solid #006cff; padding:2%;" method="post" action="modificar.php?id=<?php echo $row['id'];?>" enctype="multipart/form-data">
      <div class="form-group">
        <label>Juego que quieres</label>
        <input type="text" name="juego" class="form-control"  value="<?php echo $row['juego']; ?>">
      </div>
      <div>
      <label>Consola a la que pertenece</label>
      <input type="text" name="consola" class="form-control" value="<?php echo $row['consola']; ?>">
    </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Importe a Pagar </label>
        <input type="int" class="form-control"  name="precio" value="<?php echo $row['precio']; ?>">
      </div>
      <div>
        <label>direccion a llegar</label>
        <input type="text" name="direccion" class="form-control" value="<?php echo $row['direccion']; ?>">
      </div>
      <input type="submit" class="btn btn-success" value="Modificar">
      <a href="pagina.php" class="btn btn-danger">Cancelar</a>
    </form>
  </body>
</html>
