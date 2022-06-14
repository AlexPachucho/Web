<?php
require_once('estudiantes.php');
$Estudiantes=new Estudiantes();
$consulta=$Estudiantes->listar_estudiantes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de Estudiantes</title>
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
			font-family:Arial;
			font-size: 25px;
			padding: 5px ;
			border-radius: 5px;
			box-shadow:5px 5px 10px #218380;
			border: solid 1px black ;
			font-family: Britannic Bold ;
		}
	</style>
</head>
<body>
	<H1 style="background-color:#33ffca;color:#fff;font-family:Britannic Bold;"><center>Lista Estudiantes</center></H1>
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
	<a class="regresar" href="index.php">regresar</a>
  	<?php
  	$x=0;
  	foreach($consulta as $c){
  		$x++;
  	echo "<tr>
  			<td>$x</td>
  			<td>{$c['est_nombres']}</td>
  			<td>{$c['est_apellidos']}</td>
  			<td>{$c['est_cedula']}</td>
  			<td>{$c['est_edad']}</td>
  			<td>{$c['est_ciudad']}</td>
  			<td>{$c['est_sexo']}</td>
  			<td>
  				<a href='' ></a>
  					<img src='edit.png'/>
  				<a href='' ></a>
  				<img src='delete.png'/>
  			</td>
  			</tr>";	
  }
   ?>	
	</table>
</body>
</html>