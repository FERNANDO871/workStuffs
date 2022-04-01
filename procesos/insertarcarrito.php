<?php 

session_start();

	//Conexion BD 
require_once("conexion.php");



$zonahoraria=date_default_timezone_set('America/Mazatlan');

$fechaActual =date("Y-m-d");
$horainsert =date("H:i:s");


	//Recoger valores de formulario registro 
		$idusuario = $_SESSION['id'];
		$idPro=$_POST['txtidp'];
  		$idcant =$_POST['txtcan'];


$Total[]=$idcant;

 $numero = count($Total);



for ($i = 0; $i < sizeof($idPro); $i++)
{



$cadena="UPDATE carrito SET Cantidad = '".$idcant[$i]."' WHERE  id = '".$idPro[$i]."';"; 


$resultado= mysqli_query($data,$cadena);

}



  

  

	$r=2;
echo $resultado;

return $r;
 ?>



