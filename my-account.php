<?php 
session_start();

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'tiendaozonium';
//$port = '33065';
$data = mysqli_connect($server, $username, $password, $db/*, $port*/);

$idcliente = $_SESSION['id'];


$sql = "SELECT c. id, c. idIn, c. fecha, c. Estatus, c. nombre, c. descuento, i. nombre, i. lastname From cupones c INNER JOIN cliente i on c. IdIn = i. id where c. idIn = $idcliente ";
$return=mysqli_query($data,$sql);


$carrito_cart = "SELECT c. id, c. idProd, c. Cantidad, i. NombreProd FROM carrito c 
INNER JOIN inventario i ON c. IdProd = i. id  where c. Estatus = 1 and c. idClt =  $idcliente";
$return_cart=mysqli_query($data,$carrito_cart);

$carrito_pedidos = "SELECT * FROM pedido where idClt = '$idcliente'";
$return_pedidos=mysqli_query($data,$carrito_pedidos);






require 'views/my-account.views.php';
    
?>

<!--
<script>

$(document).ready(function() {
      var refreshId =  setInterval( function(){
    $('#notificador').load('views/minicarrito.php');//actualizas el div
   }, 1000 );
});

</script> -->