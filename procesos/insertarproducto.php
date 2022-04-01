<?php 

session_start();

	//Conexion BD 
require_once("conexion.php");



$zonahoraria=date_default_timezone_set('America/Mazatlan');

$fechaActual =date("Y-m-d");
$horainsert =date("H:i:s");


	//Recoger valores de formulario registro 
		$idusuario = $_SESSION['id'];
		$idPro=$_POST['idP'];



if (!$idusuario)
 {	

/* $sql="INSERT INTO cupones (idin, Fecha, Estatus, nombre, descuento, idU) VALUES (
$nameinf,
'$fechaActual',
1,
'$namecupon',
$des,
$idusuario
)";
$RESULT =  mysqli_query($data, $sql); 
*/
	$r=2;
echo $r;


}
else
{
$sql="INSERT INTO carrito (idProd, Cantidad, idClt, Fecha, Estatus, idCupon, pedido) VALUES (
$idPro,
1,
$idusuario,
'$fechaActual',
1,
0,
0
)";
$RESULT =  mysqli_query($data, $sql); 


	$r=1;
echo $r;

}


  

  



return $r;
 ?>



