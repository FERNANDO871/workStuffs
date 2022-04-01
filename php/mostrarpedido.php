<?php 
require_once 'conexion.php';

function gettabla(){
  $mysqli = getConn();

$idp= $_POST["idM"];

 $fechaActual =date("Y-m-d");


$query_E= "SELECT * FROM pedido where id = $idp ";
$result_E=$mysqli->query($query_E);


$mostrar_P=mysqli_fetch_row($result_E);



                  $listas='<label>Favor de subir el archivo en formato PDF<br>No. Orden: <strong>'.$mostrar_P[6].' - '.$mostrar_P[7].'</strong></label>
      <input type="hidden" class="form-control" value="'.$mostrar_P[6].''.$mostrar_P[7].'" id="idtk" name="idtk">
      <input type="hidden" class="form-control" value="'.$mostrar_P[0].'" id="idpedido" name="idpedido">
';
  
  return $listas;

}

echo gettabla();
?>

                  
