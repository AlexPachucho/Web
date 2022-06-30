<?php
require_once("Estudiantes.php");
$Estudiantes=new Estudiantes();

if(isset($_GET['est_id'])){
	 $datos=$Estudiantes->edit($_GET['est_id']);
}else{
	$datos['est_id']=NULL;
	$datos['est_nombres']=NULL;
	$datos['est_apellidos']=NULL;
	$datos['est_cedula']=NULL;
	$datos['est_ciudad']=NULL;
	$datos['est_edad']=NULL;
	$datos['est_genero']=NULL;
}	
?>

<!DOCTYPE hmtl>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=|, initial-scale=1.0">
	<title>Formulario Estudiante</title>
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
		<h1>Formulario de regristro de estudiante</h1>
	
		<form action="acciones_estudiantes.php" method="POST">
		       <input type="hidden" id="est_id" name="est_id" value="<?php echo $datos['est_id']?>">
		<div class="contenedores">
			<label for="est_nombres">Nombres</label>
			<input type="text" name="est_nombres" id="est_nombres" value="<?php echo $datos['est_nombres']?>">
		</div>

		<div class="contenedores">
			<label for="est_apellidos">Apellidos</label>
			<input type="text" name="est_apellidos" id="est_apellidos" value="<?php echo $datos['est_apellidos']?>">
		</div>

		<div class="contenedores">
			<label for="est_cedula">Cédula</label>
			<input type="text" name="est_cedula" id="est_cedula" value="<?php echo $datos['est_cedula']?>">
		</div>

		<div class="contenedores">
			<label for="est_ciudad">Ciudad</label>
			<input type="text" name="est_ciudad" id="est_ciudad" value="<?php echo $datos['est_ciudad']?>">
		</div>

		<div class="contenedores">
			<label for="est_edad">Edad</label>
			<input type="text" name="est_edad" id="est_edad" value="<?php echo $datos['est_edad']?>">
		</div>

		<div class="contenedores">
			<label for="est_genero">Género</label>
			<input type="text" name="est_genero" id="est_genero" value="<?php echo $datos['est_genero']?>">
		</div>

		<div class="contenedores">
		<button>Guardar</button>
		</div>
		
		</form>
</body>
</html>