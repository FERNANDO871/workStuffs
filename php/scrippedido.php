<?php 
require_once 'conexion.php';

function gettabla(){
  $mysqli = getConn();

$idCliente= $_POST["id"];
$idtotal= $_POST["id1"];

 $fechaActual =date("Y-m-d");


$query_E= "SELECT * FROM pedido where idClt = '$idCliente' ORDER BY `Id` DESC ";
$result_E=$mysqli->query($query_E);

$mostrar_P=mysqli_fetch_row($result_E);


if (!$mostrar_P[0]) {
	
	$i= 01;
	$folio= $idCliente . $i;
	}
	else
	{

	$i=$mostrar_P[7] + 01;
	$folio=  $i ;

	}


$query_E2= "INSERT INTO pedido (Fecha, IdClt, Estatus, Cantidad, Numero, serie, folio) VALUES (
'$fechaActual',
	$idCliente,
	  '1',
	   $idtotal, 
	   '1',
	    100,
	     '$folio'
	 )";
$result_E2=$mysqli->query($query_E2);


 $query_E3= "UPDATE carrito SET pedido = $folio, Estatus = 2 where Estatus = 1";
$result_E3=$mysqli->query($query_E3);




$r=0;



	


 return $r;

}

echo gettabla();
?>

                  
