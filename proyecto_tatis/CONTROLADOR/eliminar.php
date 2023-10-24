<?php
require_once('controlador.php');
// instanciar la clase Modelo que es la clase general que se encuentra en al archivo Model
$id=$_GET['id'];
$eliminar = NEW Model;
$eliminar->eliminar($id);
?>