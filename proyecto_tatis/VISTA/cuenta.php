<!DOCTYPE html>
<html lang="es">
<head>
	<title>Mi cuenta</title>
</head>
<body>
<?php
require_once('../CONTROLADOR/controlador.php');
session_start();
$cuenta = new Model;

foreach ($cuenta->MostrarCuenta($_SESSION['usua_codigo']) as $reg=>$valor){
	?>
	<h1>Bienvenido profesor</h1>

	<h1>Mi cuenta</h1>
    <label>Identificacion</label>
    <input type="text" name="identificacion" id="identificacion" value="<?php echo $valor['usua_identificacion'];?>">
    <p>
      <br>
    <label>Tipo de Identificacion</label>
    <input type="text" name="tipo" id="tipo" value="<?php echo $valor['usua_tipoidentificacion'];?>">
     <label>Nombre</label>
    <input type="text" name="nombre" id="nombre" value="<?php echo $valor['usua_nombre'];?>">
     <label>Apellido</label>
    <input type="text" name="apellido" id="apellido"value="<?php echo $valor['usua_apellido'];?>">
     <label>Celular</label>
    <input type="text" name="celular" id="celular"value="<?php echo $valor['usua_celular'];?>">
     <label>Dirección</label>
    <input type="text" name="direccion" id="direccion"value="<?php echo $valor['usua_direccion'];?>">
     <label>Usuario</label>
    <input type="text" name="usuario" id="usuario"value="<?php echo $valor['usua_usuario'];?>">
    <label>Clave</label>
    <input type="text" name="clave" id="clave"value="<?php echo $valor['usua_pasword'];?>">  
    <label>Codigo</label>
    <input type="text" name="codigo" id="codigo"value="<?php echo $valor['usua_codigo'];?>">
    <button type="submit">Enviar</button>
    <p>
      <div id="mensaje" style="background:#DDF999;width:300px;">
        </div>
</form>

 <body>



</body>
</html>