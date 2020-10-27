<?php
 include("conexion.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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
<h5 style="width:80%;margin-left:10%;margin-top:5%;" >Pedidos Realizados en la Pagina </h5>
<table class="table" style= "margin.top:5%;" >
 <thead>
   <tr>
     <th scope="col">ID</th>
     <th scope="col">Juego</th>
     <th scope="col">Plataforma</th>
     <th scope="col">Importe a Pagar</th>
     <th scope="col">Destinatario</th>
   </tr>
 </thead>
 <tbody>
      <?php
      $mostrar_todo_sql = "SELECT * FROM pedido";
      $procesar_consulta = $conexion->query($mostrar_todo_sql);
      while($row = $procesar_consulta->fetch_assoc()){
           ?>
    <tr>
       <th><?php echo $row['id']; ?></th>
       <th><?php echo $row['juego']?></th>
       <th><?php echo $row['plat']?></th>
       <th>$<?php echo $row['precio']?></th>
       <th><?php echo $row['destinatario']?></th>
       <th><a href="modificaciones.php?id=<?php echo $row['id']; ?>">Modificar</a></th>
       <th><a href="eliminar.php?id=<?php echo $row['id'];  ?>">Eliminar</a></th>
     </tr>
    <?php } ?>
 </tbody>
</table>
</body>
</html>
