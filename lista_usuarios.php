<?php
require_once('Usuarios.php');
$usuarios=new Usuarios();
$consulta=$usuarios->listar_usuarios();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de usuarios</title>
	<style>
		th{
			padding: 8px;
			background: black;
			color: white;
			border: solid 1px #c7cccb;
		}
		td{
			padding: 5px;
			border: solid 1px #687571;
		}
		table{
			width: 80%;
			border-collapse: collapse;
		}

		img{
			width: 20px;
		}
		.regresar{
			background:#F6923A ;
			color:#01161e;
			text-decoration: none;
			font-size: 20px;
			padding: 5px ;
			border-radius: 5px;
			box-shadow:5px 5px 10px #218380;
			border: solid 1px black ;
			font-family: Britannic Bold ;
		}
		.formulario{
			background:#F6923A ;
			color:#01161e;
			text-decoration: none;
			font-size: 20px;
			padding: 5px ;
			border-radius: 5px;
			box-shadow:5px 5px 10px #218380;
			border: solid 1px black ;
			font-family: Britannic Bold ;
		}
	</style>
</head>
<body>
	<H1 style="background-color:#33ffca;color:#fff;font-family:Britannic Bold;"><center>Lista Usuarios</center></H1>
	<table align="center">
		<tr>
			<th>Nº</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Cédula</th>
			<th>Edad</th>
			<th>Ciudad</th>
			<th>Sexo</th>
			<th>Acciones</th>

		</tr>
	<a class="formulario" href="formulario_usuarios.php">Nuevo Usuario</a><br><br><br>
	<a class="regresar" href="index.php">Regresar</a>
  	<?php
  	$x=0;
  	foreach($consulta as $c){
  		$x++;
  	echo "<tr>
  			<td>$x</td>
  			<td>{$c['us_nombres']}</td>
  			<td>{$c['us_apellidos']}</td>
  			<td>{$c['us_cedula']}</td>
  			<td>{$c['us_edad']}</td>
  			<td>{$c['us_ciudad']}</td>
  			<td>{$c['us_genero']}</td>
  			<td>
  				<a href='formulario_usuarios.php?us_id={$c['us_id']}'>
  					<img src='edit.png'/>
  				</a>
  					
  				<a href='acciones_usuarios.php?us_id={$c['us_id']} 'onclick='return validar()'  >
  					<img src='delete.png'/>
  				</a>
  				
  			</td>
  			</tr>";	
  }
   ?>	
	</table>
</body>
</html>
<script>
	function validar(){
		if(confirm("Desea eliminar")){
			return true;
		}else{
			return false;
		}
	}
</script>