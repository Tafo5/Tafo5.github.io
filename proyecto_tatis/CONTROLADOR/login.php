<?php
require_once('controlador.php');
$ingresar = NEW Model;

$usu=$_POST['usuario'];
$clave=$_POST['clave'];

$ingresar->loguin($usu,$clave);

?>