<?php 
	class conectar{
		public function conexion(){
			$conexion=mysqli_connect('localhost',
										'root',
										'',
										'maranathaMMI');
			return $conexion;
		}
	}


	$obj=new conectar();
	if ($obj -> conexion()) {
	echo "conectado";
	}
 ?>