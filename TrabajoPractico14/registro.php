<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Registros</title>
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
  <h3 style="font-size: 54px;
    margin-left: 5%;
    margin-bottom: 4%;
    float: none;">Registrarse</h3>
    <form style="width:30%; margin-left:5%; margin-top:5%; border:1px solid #006cff; padding:2%;" method="post" action="insert_into.php">
      <div class="form-group">
        <label>Nombre de Usuario</label>
        <input type="text" name="nombre" class="form-control">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Edad</label>
        <input type="int" class="form-control"  name="edad">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" >Correo Electronico</label>
        <input type="email" class="form-control" iaria-describedby="emailHelp" name="correo">
      </div>
      <div>
        <label>Contraseña </label>
        <input type="text" name="pwd" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Enviar datos</button>
    </form>
  </body>
</html>
