<?php
require_once("Usuarios.php");
$Usuarios=new Usuarios();

if(isset($_GET['us_id'])){
	 $datos=$Usuarios->edit($_GET['us_id']);
}else{
	$datos['us_id']=NULL;
	$datos['us_nombres']=NULL;
	$datos['us_apellidos']=NULL;
	$datos['us_cedula']=NULL;
	$datos['us_ciudad']=NULL;
	$datos['us_edad']=NULL;
	$datos['us_genero']=NULL;
}	
?>

<!DOCTYPE hmtl>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=|, initial-scale=1.0">
	<title>Formulario usuario</title>
	<style type="">
		.contenedores{
			margin-top:2px;
			margin-left:100px; 
		}
		label{
			width:100px;
			float: left;
			font-family:Britannic Bold;
			font-size:16px;
			border-buttom:solid 1px #ccc;
		}
	</style>
</head>
<body>
		<h1>Formulario de regristro de usuario</h1>
 
		<form action="acciones_usuarios.php" method="POST">
		<input type="hidden" id="us_id" name="us_id" value="<?php echo $datos['us_id']?>">
		<div class="contenedores">
			<label for="us_nombres">Nombres</label>
			<input type="text" name="us_nombres" id="us_nombres" value="<?php echo $datos['us_nombres']?>">
		</div>

		<div class="contenedores">
			<label for="us_apellidos">Apellidos</label>
			<input type="text" name="us_apellidos" id="us_apellidos" value="<?php echo $datos['us_apellidos']?>">
		</div>

		<div class="contenedores">
			<label for="us_cedula">Cédula</label>
			<input type="text" name="us_cedula" id="us_cedula" value="<?php echo $datos['us_cedula']?>">
		</div>

		<div class="contenedores">
			<label for="us_ciudad">Ciudad</label>
			<input type="text" name="us_ciudad" id="us_ciudad" value="<?php echo $datos['us_ciudad']?>">
		</div>

		<div class="contenedores">
			<label for="us_edad">Edad</label>
			<input type="text" name="us_edad" id="us_edad" value="<?php echo $datos['us_edad']?>">
		</div>

		<div class="contenedores">
			<label for="us_genero">Género</label>
			<input type="text" name="us_genero" id="us_genero" value="<?php echo $datos['us_genero']?>">
		</div>

		<div class="contenedores">
		<button>Guardar</button>
		</div>
		
		</form>
</body>
</html>