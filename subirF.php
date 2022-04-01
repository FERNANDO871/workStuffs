<?php 

include 'conexion.php';

if (!$data) {
 header('Location: error.php');
 }
 


$sonaHoraria = date_default_timezone_set("America/Chihuahua");
$fechaA=date("Y-m-d");

 //--------New------------//
  $idpedido =  $_POST['idpedido'];
  $idtiket =  $_POST['idtk'];
  $fechaActual =date("Y-m-d");
  $time = date("H:i:s"); 

  $facturapdf  = $_FILES['idfilef']['name'];

$ruta_carpeta="facturas/".$idpedido;


$Factura=$_FILES['idfilef']['tmp_name'];


$ruta_guardar_Factura = $ruta_carpeta ."/". $facturapdf;

if (!file_exists($ruta_carpeta))
{

  mkdir($ruta_carpeta,0755,true);


      if (move_uploaded_file($Factura, $ruta_guardar_Factura)) {

        $Factura = move_uploaded_file($Factura,$ruta_guardar_Factura);


$sql= "INSERT INTO  `facturasid` (`idP`, `factura`,`fecha`, `hora`,`folio`) VALUES (
      '$idpedido',
      '$facturapdf',
      '$fechaActual',
      '$time',
      '$idtiket')";

$result=mysqli_query($data,$sql); 
        
if ($result) {
 echo "archivo se guardo";}
else{
 echo "archivo no se guardo";

      }

}
     

      

}



?>