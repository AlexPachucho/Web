<?php
require_once('Conection.php');

class usuarios extends Conection{

	function listar_usuarios(){
		$resultado=$this->con->query('SELECT * FROM usuarios');
		return $resultado->fetch_all(MYSQLI_ASSOC);//
	}

	function create($us_nombres,$us_apellidos,$us_cedula,$us_ciudad,$us_edad,$us_genero){
		$this->con->query("INSERT INTO usuarios(us_nombres,
												  us_apellidos,
												  us_cedula,
												  us_ciudad,
												  us_edad,
												  us_genero) 
								        VALUES ('$us_nombres',
								        	    '$us_apellidos',
								        	    '$us_cedula',
								        	    '$us_ciudad',
								        	    '$us_edad',
								        	    '$us_genero')
								    ");
	                }
	function edit($us_id){
		$resultado=$this->con->query("SELECT * FROM usuarios WHERE us_id=$us_id");
		return $resultado->fetch_all(MYSQLI_ASSOC)[0];

	}

	function update($us_nombres,$us_apellidos,$us_cedula,$us_ciudad,$us_edad,$us_genero,$us_id){
		$this->con->query("UPDATE usuarios
						   SET us_nombres='$us_nombres',
						   	   us_apellidos='$us_apellidos',
							   us_cedula='$us_cedula',
							   us_ciudad='$us_ciudad',
							   us_edad='$us_edad',
							   us_genero ='$us_genero'
						  WHERE us_id='$us_id'
			   ");
	
	}
	function delete($us_id){
            $this->con->query("DELETE FROM usuarios WHERE us_id=$us_id");
      }

}
 ?>