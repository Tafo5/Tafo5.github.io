<?php
require_once('../MODELO/conexion.php');
class Model{
private $db;
public function __Construct(){
$this->db = NEW conexion;
}
public function loguin($usu,$clave){
  try{
  $sqlconsultar="SELECT * FROM usuario WHERE usua_usuario='$usu' and usua_pasword = '$clave'";
	$resultado = $this->db->conectarse()->query($sqlconsultar)->fetch();
	
	session_start();
	if ($resultado){
		 
	
			
    		 $rol = $resultado ['usua_rol_fk'];
    		 $id_usu = $resultado ['usua_codigo'];
			 $_SESSION['usua_activo']=$usu;
			 $_SESSION['id_activo']=$id_usu;
     
      
        if ($rol==1){
          header('location: ../VISTA/administrador.php');
    
        }
        elseif ($rol==2) {
            header('location: ../VISTA/cliente.html');
         }
         else{
           echo "Rol no válido";
         }

	}else{
      echo "Datos incorrectos";
	  session_destroy();

	
	}
   }
    catch(PDOexception $men){
    var_dump($men->getMessage());
    }
}

public function mostrarCuenta($id){
    $sql="SELECT * FROM usuario where usua_codigo = '$id'";
    return $this->db->conectarse()->query($sql)->fetchAll();
}

public function actualizarCuenta($nom,$ape,$id){
	try{
    $sql="UPDATE usuario SET usua_nombre='$nom', usua_apellido='$ape' where usua_codigo = '$id'";
    $this->db->conectarse()-> prepare($sql)->execute();
    print_r('se actualiz la clave correctamente');
	}
	catch(PDOexception $men){
    var_dump($men->getMessage());
      
    }
}
 public function listar(){

    $sql="SELECT * FROM usuario";
    return $this->db->conectarse()->query($sql)->fetchAll();

} 

 public function eliminar($id){

	try{
  
    $hola = $this->db->conectarse()-> prepare("CALL eliminar(:id)");
    $hola->bindParam(":id",$id,PDO::PARAM_INT);
    $hola->execute();
	print_r('se Eliminó el Usuario correctamente');
    }
    catch(PDOexception $men){
    var_dump($men->getMessage());
}

} 
}
?>
