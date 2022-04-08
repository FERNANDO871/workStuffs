<?php


require "../../procesos/conexion.php";


// obtener el id del clientre con la sesion
session_start();
$idcliente = $_SESSION['id'];


//obtener el falio del pedido
$folioPedido= $_GET['id_pedido']?? '1401';
$facturacion= $_GET['facturacion']?? 0;
$paqueteria= $_GET['paqueteria'] ?? 'UPS';



//actualizar el estadus a 2 con el id del cliente --------------------------------------------
$query = "UPDATE carrito SET Estatus=2 WHERE pedido='$folioPedido'";
$consulta = mysqli_query($data, $query);
$query1 = "UPDATE pedido SET facturacion= $facturacion WHERE folio='$folioPedido' ";
$consulta = mysqli_query($data, $query1);
$query2 = "UPDATE pedido SET paqueteria='$paqueteria' WHERE folio='$folioPedido'";
$consulta = mysqli_query($data, $query2);
//actualizar el estadus a 2 con el id del cliente------------------------------------------

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="payment.css">
    <title>Document</title>
</head>
<body>
    <div class="successful">
    <h1 >pago exitoso 
        <br><?php echo 'el estatus a 2 fue actualizando';?></br>
        <br>folio : <?php echo $_GET['folio']??'1401'?></br>
        <br> facturacion:  <?php echo $_GET['facturacion']??'true'?></br>
        <br>metodo de pago: <?php echo $_GET['metodoPago']??'card'?></br>
        <br>paqueteria: <?php echo $_GET['paqueteria']??'card'?></br>
    </h1>
</div>
</body>
</html>


<?php  

    header("location: http://localhost/tiendaweb/");

?>