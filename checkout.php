<?php 
session_start();

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'tiendaozonium';
//$port = '33065';
$data = mysqli_connect($server, $username, $password, $db/*, $port*/);

$idcliente = $_SESSION['id'];


$carrito_cart = "SELECT c. id, c. idProd, c. Cantidad, i. NombreProd, i. PrecioProd, c. idCupon FROM carrito c 
INNER JOIN inventario i ON c. IdProd = i. id  where c. Estatus = 1 and c. idClt =  $idcliente";
$return_cart=mysqli_query($data,$carrito_cart);

$carrito_cart_cupon = "SELECT * FROM pedido where idClt = '$idcliente' ORDER BY `Id` DESC ";
$return_cart_cupon=mysqli_query($data,$carrito_cart_cupon);

$row2 = mysqli_fetch_row($return_cart_cupon);



$TotalForm = number_format($row2[4], 2);


require 'views/checkout.views.php';
    
?>

<!--
<script>

$(document).ready(function() {
      var refreshId =  setInterval( function(){
    $('#notificador').load('views/minicarrito.php');//actualizas el div
   }, 1000 );
});

</script> -->
<script type="text/javascript">

   $(document).ready(function(){
    
   $('#Agregarid').click(function(){


 datos3=$('#formcarrito').serialize();

 $.ajax({
type: "POST",
data:  datos3,
url: 'procesos/insertarcarrito.php',
success:function(r){
if (r=1) {

location.reload();

} else {
alertify.error("fallo al agregar");

}


}
});

     });
 });


</script>
<script type="text/javascript">

  function Agregarcupon(idC1){
var idC2 = $('#txtidcupon').val()

$.ajax({
type:'POST',
data:{id:idC1,id1:idC2},
url:'php/scriptcupon.php',
success:function(r){

if (r==1) 
{
	$("#idmensaje").html("<div  style='color: #fb0000; font-size: 13px; '>CUPON INCORRECTO</div>");
}
if (r==2) 
{
	$("#idmensaje").html("<div  style='color: #fb0000; font-size: 13px; '>CUPON EXPIRÓ</div>");
}
if (r == 0) 
{
	location.reload();

}
 
}

})

}

</script>
