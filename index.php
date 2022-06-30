<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<style>
		h1{
			background:#58a4b0 ; /*Color del fondo*/
			color:#0a0908  ; /*Color del texto*/
			border: solid 1.5px black ;
			border-radius: 5px;
			text-align: center ;
			font-family: Britannic Bold ;
			box-shadow:5px 5px 10px #348aa7;

		}
		
		.menu{
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
		
		.menu:hover{
			background:#D1FF56;
			color:#01161e;
			transition: 0.4s linear 0.2s;
			border: solid 2px black;
		}
		img:hover{
			filter: saturate(180%);
		}
	</style>
</head>
<body bgcolor="#E8E8E8">
	<h1>Menu Principal web</h1>
	<div align="center"><img src="pagina web.jpg" width="200" height="200"/></div><br>
	<center><a class="menu" href="lista_estudiantes.php">Estudiantes</a></center><br>
	<center><a class="menu" href="lista_usuarios.php">Usuarios</a></center>
</body>
</html>