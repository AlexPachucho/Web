<?php
require_once("Usuarios.php");
$Usuarios=new Usuarios();
$datos=$_REQUEST; //CAPTURA DATOS DEL FORMULARIO
//print_r($Datos);
if(empty($datos['us_id'])){
	$Usuarios->create($datos['us_nombres'],
						 $datos['us_apellidos'],
					 	 $datos['us_cedula'],
					 	 $datos['us_ciudad'],
					 	 $datos['us_edad'],
					 	 $datos['us_genero']);
}else{

		IF(isset($datos['us_nombres'])){

$Usuarios->update($datos['us_nombres'],
					 $datos['us_apellidos'],
					 $datos['us_cedula'],
					 $datos['us_ciudad'],
					 $datos['us_edad'],
					 $datos['us_genero'],$datos['us_id']);
  }else{
  	$Usuarios->DELETE($datos['us_id']);
  }
}


//redireccion de archivo php
header('Location:http://localhost/primero/lista_Usuarios.php');

?>