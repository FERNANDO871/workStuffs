<?php 
require_once 'conexion.php';

function gettabla(){
  $mysqli = getConn();

$idp= $_POST["idM"];

 $fechaActual =date("Y-m-d");


$query_E= "SELECT * FROM cliente where id = $idp ";
$result_E=$mysqli->query($query_E);


$mostrar_P=mysqli_fetch_row($result_E);



                  $listas='Nombre Influencer:
      <input type="text" class="form-control" value="'.$mostrar_P[2].' '.$mostrar_P[3].'" readonly>
      <input type="hidden" class="form-control" value="'.$mostrar_P[0].'" id="idinfluencer" name="idinfluencer">
';
  
  return $listas;

}

echo gettabla();
?>

                  
