<?php
require_once('controlador.php');
// instanciar la clase Modelo que es la clase general que se encuentra en al archivo Model
$actualizar = NEW Model;
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$id=$_POST['id'];
$actualizar->actualizarCuenta($nombre,$apellido,$id);
?>