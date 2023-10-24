<?php
class conexion{
public function conectarse(){
$dsn="mysql:host=localhost;dbname=proyecto_tatis;port=3306;charset=utf8";
$usuario="root";
$clave="";
return new PDO($dsn, $usuario, $clave);
	}
}
?>