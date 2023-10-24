<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Administrador</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Bienvenidos</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listar_usuarios.php">Gestionar Usuarios </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          servicios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">entregas</a>
          <a class="dropdown-item" href="#">contactanos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">dia de entrega</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">jornada entrega</a>
          <a class="dropdown-item" href="#">adquirir refrigerio</a>

        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Registrarse</a>
      </li>
	   <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         	   Bienvenido <?php echo $_SESSION['usua_activo'];?><img src="img/usuario01.png">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cuenta.php">Mi cuenta</a>
          <a class="dropdown-item" href="cerrar.php">Salir</a>


        </div>
      </li>

	  
    </ul>

   
  </div>
</nav>
<nav class="navbar bg-dark" data-bs-theme="dark">
  <!-- Navbar content -->
</nav>

<h1> Bienvenido administrador</h1>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/foto19.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Refrigerios</h5>
    <a href="#" class="btn btn-primary">Ordenar Refrigerios</a>
  </div>
</div>
  



<!-- Bootstrap JS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>