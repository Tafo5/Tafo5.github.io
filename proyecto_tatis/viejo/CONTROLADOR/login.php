<?php
require_once('controlador.php ');
$ingresar = NEW Model;

$usu_usuario=$_POST["usuario"];
$clave=$_POST["Clave"];
$ingresar->loguin($usu_usuario,$clave);
?>