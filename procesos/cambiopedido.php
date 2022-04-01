<?php 

session_start();

	//Conexion BD 
require_once("conexion.php");



$zonahoraria=date_default_timezone_set('America/Mazatlan');

$fechaActual =date("Y-m-d");
$horainsert =date("H:i:s");


	//Recoger valores de formulario registro 
		$idusuario = $_SESSION['id'];
		$idP=$_POST['idM'];

$sql="UPDATE `pedido` SET `Estatus` = '2' WHERE `Id` = $idP";
$RESULT =  mysqli_query($data, $sql); 


	$r=1;
echo $r;


return $r;
 ?>



