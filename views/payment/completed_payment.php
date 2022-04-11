<?php


require "../../procesos/conexion.php";

// obtener el id del clientre con la sesion
session_start();
$idcliente = $_SESSION['id'];
//linea de prueba
// $idcliente = '181';


//obtener los valores enviados desde checkout.php
$facturacion= $_GET['facturacion']?? 0;
$monto = $_GET['monto'] ?? null;
$paqueteria= $_GET['paqueteria'] ?? 'UPS';
$pago = $_GET['metodoPago'];
//obtener los valores enviados desde checkout.php

//setear la fecha actual para llenar el registro en la DB 
$fechaActual =date("Y-m-d");


//creando el folio para agregar al pedido -------------------------------------------------------------------------
try{
    
    
    $query1 = "SELECT * FROM pedido  where idClt=$idcliente ORDER BY folio desc limit 1";
    $consulta1 = mysqli_query($data, $query1);
    $Cantidad = mysqli_fetch_assoc($consulta1);
    echo $Cantidad['folio'];
    echo '<br>';

    //preguntar si ya hay un folio existente en caso de que no asignar el folio = al Id del cliente concatenado con 1
    // si existe un registro toma el mayor de todos y sumale 1
    if ($Cantidad['folio']){
        $Folio= $Cantidad['folio']+ 1;
        echo $Folio;
    }else{
        $Folio = $idcliente.'1';
        echo $Folio;
        
    }
    
    
} catch (Exception $e){
    
    echo $e;
    
}
//creando el folio para agregar al pedido -------------------------------------------------------------------------




//generar el pedido en la BD ---------------------------------------------------------------------------------------
$query3= "INSERT INTO pedido (Fecha, IdClt, Estatus, Cantidad, Numero, serie, folio, facturacion, paqueteria,pago) VALUES (
                       '$fechaActual','$idcliente','1','$monto', '1','100','$Folio','$facturacion', '$paqueteria','$pago')";
$consulta3 = mysqli_query($data, $query3);
//generar el pedido en la BD -----------------------------------------------------------------------------------------



//actualizar el estadus a 2 con el id del cliente en la tabla carrito--------------------------------------------------------
$query1 = "UPDATE carrito SET Estatus=2, pedido='$Folio'  WHERE idClt=$idcliente and Estatus=1 ";
$consulta = mysqli_query($data, $query1);
//actualizar el estadus a 2 con el id del cliente en la tabla carrito--------------------------------------------------------


// agregando la descripcion a Stripe --------------------------------------------------------------------


//comentar esta linea para ver los valores en la pantalla
header("location: http://localhost/tiendaweb/my-account.php");

?>





