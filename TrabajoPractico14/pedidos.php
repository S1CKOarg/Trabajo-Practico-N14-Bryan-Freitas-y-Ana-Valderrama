<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="pedidos.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="registro.php">Registrase <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="iniciar_sesion.php">Iniciar Sesion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pedidos.php">Pedidos</a>
      </li>
    </ul>
  </div>
</nav>
<br></br>
  <h3 style="font-family:impact">Pedir juego</h3>
    <form style="width:30%; margin-left:5%; margin-top:5%; border:1px solid #006cff; padding:2%;" method="post" action="insert_into2.php">
      <div class="form-group">
        <label>Juego que Desea</label>
        <input type="text" name="juego" class="form-control">
      </div>
      <div>
      <label>Plataforma del Juego</label>
      <input type="text" name="plat" class="form-control">
    </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Importe a pagar</label>
        <input type="int" class="form-control"  name="precio">
      </div>
      <div>
        <label>Id del destinatario</label>
        <input type="text" name="direccion" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Enviar datos</button>
    </form>
  </body>
</html>
