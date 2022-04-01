<?php 
session_start();

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'tiendaozonium';
//$port = '33065';




$data = mysqli_connect($server, $username, $password, $db/*, $port*/);

$sql = "SELECT * FROM inventario ";
$return=mysqli_query($data,$sql);


mysqli_query($data, "SET NAMES 'UTF8'");
require 'views/index.views.php';
	
?>
<script type="text/javascript">
  
function mostrarproducto(idM){
  $.ajax({
    type: 'POST',
    data: 'idM=' + idM,
    url: 'php/modalproducto.php'
  })
  .done(function(listas_rep){
    
     $('#productomodal').html(listas_rep)
    
$('#exampleModalCenter').modal('show')

  });
}
</script>
<script type="text/javascript">
  
function carritoid(idP){
  $.ajax({
    type: 'POST',
    data: 'idP=' + idP,
    url: 'procesos/insertarproducto.php'
  })
  .done(function(r){
    if(r==1){
    	 
swal("Buen Trabajo!", "Producto Agregado Correctamente", "success")
.then((value) => 
{
location.reload();
});
       
     }
    else
      {
         swal('ERROR','Favor de Iniciar Sesion .','error');
        }

  });
}
</script>
<!--
<script>

$(document).ready(function() {
      var refreshId =  setInterval( function(){
    $('#notificador').load('views/minicarrito.php');//actualizas el div
   }, 1000 );
});

</script> -->