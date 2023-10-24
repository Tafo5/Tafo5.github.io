<?php
require_once('../CONTROLADOR/controlador.php');
session_start();
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Listar Usuarios</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Louis</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Entrar <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">contactanos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          servicios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">novedades</a>
          <a class="dropdown-item" href="#">temas</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">accesibilidad</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">modo de pago</a>
          <a class="dropdown-item" href="#">ofertas</a>

        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">registrate</a>
        <div class="dropdown">
      </li>

    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">buscar</button>
    </form>
  </div>
</nav>
<nav class="navbar bg-dark" data-bs-theme="dark">
  <!-- Navbar content -->
</nav>
Está seguro que desea eliminar a <?php echo $id;?>
<p>
<button type="button" class="btn btn-primary"><a href="../controlador/eliminar.php?id=<?php echo $id;?>">Si</a></button>
<button type="button" class="btn btn-primary">No</button>