<?php 

class Metodo
{

	public function mostrar($nombre){
		echo "El nombre es ". $nombre;

	}
}

$nombre = "Bernardo";
$resultado=Metodo::mostrar($nombre);


 ?>