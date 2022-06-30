<?php
class Operaciones
{
	public $n1;
	public $n2;
	public $resultado;

	function __construct(){
		$this->n1=10;
		$this->n2=25;
	}

	function sumar(){
		return $this->resultado=$this->n1+$this->n2;
	}

	function restar(){
		return $this->resultado=$this->n1-$this->n2;
	}

	function multiplicación(){
		return $this->resultado=$this->n1*$this->n2;
	}

	function división(){
		return $this->resultado=$this->n1/$this->n2;
	}



}

$Operacion1= new Operaciones();
echo $Operacion1->sumar();
echo "<br>";

$Operacion2= new Operaciones();
echo $Operacion2->restar();
echo "<br>";

$Operacion3= new Operaciones();
echo $Operacion3->multiplicación();
echo "<br>";

$Operacion4= new Operaciones();
echo $Operacion4->división();	
echo "<br>";
?>


