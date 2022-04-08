<?php


require "../../procesos/conexion.php";

// obtener el id del clientre con la sesion
session_start();
// $idcliente = $_SESSION['id'];
$idcliente = '183';


//obtener el falio del pedido
$folioPedido= $_GET['id_pedido']?? '1401';
$facturacion= $_GET['facturacion']?? 0;
$paqueteria= $_GET['paqueteria'] ?? 'UPS';
$fechaActual =date("Y-m-d");

//cantidad ------------------------------------------------------------------------------------------
try{

    $query1 = "SELECT * FROM pedido  where idClt=$idcliente ORDER BY folio desc limit 1";
    $consulta1 = mysqli_query($data, $query1);
    $Cantidad = mysqli_fetch_assoc($consulta1);
    echo $Cantidad['folio'];
    echo '<br>';
    echo $Cantidad['folio'];
    echo '<br>';
    
} catch (Exception $e){
    // $folioPedido = $idcliente . '1';
    echo '<br>';
    echo 'no se pudo karnal';
    echo '<br>';
    echo $e;
}


echo 'si se ejecuta';


//actualizar el estadus a 2 con el id del cliente ---------------------------------------------------
// $query3= "INSERT INTO pedido (Fecha, IdClt, Estatus, Cantidad, Numero, serie, folio, facturacion, paqueteria) VALUES (
//                        '$fechaActual',$idcliente,'1',$c, '1',100,'$folioPedido','$facturacion', '$paqueteria')";

// $consulta3 = mysqli_query($data, $query3);
// $query1 = "UPDATE carrito SET Estatus=2, pedido='$folioPedido'  WHERE idClt=$idcliente and Estatus=1 ";
// $consulta = mysqli_query($data, $query1);

//actualizar el estadus a 2 con el id del cliente--------------------------------------------------------


// actuializar el pedido de stripe -------------------------------------------------------------


//comentar esta linea para ver los valores en la pantalla
// header("location: http://localhost/tiendaweb/");

?>





