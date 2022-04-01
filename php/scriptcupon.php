<?php 
require_once 'conexion.php';

function gettabla(){
  $mysqli = getConn();

$idCliente= $_POST["id"];
$idCupon= $_POST["id1"];

 $fechaActual =date("Y-m-d");


$query_E= "SELECT * FROM cupones where nombre = '$idCupon' ";
$result_E=$mysqli->query($query_E);


$mostrar_P=mysqli_fetch_row($result_E);

if(!$mostrar_P[0])
{
$r=1;
}
else
{


$query_E1= "SELECT * FROM cupones where nombre = '$idCupon' and Estatus = 1";
$result_E1=$mysqli->query($query_E1);

$mostrar_P1=mysqli_fetch_row($result_E1);

if(!$mostrar_P1[0])
{
$r=2;

}
else
{

$query_E3= "UPDATE carrito SET IdCupon = $mostrar_P[0] where idClt = $idCliente ";
$result_E3=$mysqli->query($query_E3);


$r=0;
}


	
}

 return $r;

}

echo gettabla();
?>

                  
