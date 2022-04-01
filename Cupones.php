<?php session_start();
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'tiendaozonium';
//$port = '33065';


$data = mysqli_connect($server, $username, $password, $db/*, $port*/);

$sql = "SELECT c. id, c. idIn, c. fecha, c. Estatus, c. nombre, c. descuento, i. nombre, i. lastname From cupones c INNER JOIN cliente i on c. IdIn = i. id ";
$return=mysqli_query($data,$sql);

$sql1 = "SELECT * FROM cliente where num = 2 ";
$return1=mysqli_query($data,$sql1);


mysqli_query($data, "SET NAMES 'UTF8'");
require 'views/Cupones.views.php';	
?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#save').click(function(){
       

       $('#modalcupon').modal('show')
            }); 
    });
</script>



<script type="text/javascript">
    $(document).ready(function(){
        $('#savecupon').click(function(){
      var nombrecupon = $('#txtcupon').val()
       var nombreinfluencer = $('#txtnombreinf').val()


if (nombrecupon == 0) 
{
$("#idmensaje").html("<div  style='color: #fb0000; font-size: 13px; '>NOMBRE CUPON VACIO</div>");
}
else
{
if (nombreinfluencer == 0) 
{
$("#idmensaje").html("<div  style='color: #fb0000; font-size: 13px; '>NOMBRE INFLUENCER VACIO</div>");
}
else
{


cuponesf=$('#formcupon').serialize();

  $.ajax({
                type:"POST",
                url:"procesos/insertcupon.php",
                data:cuponesf
            })
               .done(function(r){
                    if(r==1){

                      location.reload();
                       
                    }else{

                      if(r==2)

                      {

                        $("#idmensaje").html("<div  style='color: #fb0000; font-size: 13px; '>NOMBRE CUPON OCUPADO</div>");
                      }

                      else
                      {

                        $("#idmensaje").html("<div  style='color: #fb0000; font-size: 13px; '>YA TIENE CUPON ACTIVO</div>");
                      }
                    }
                }); 





}
}






            }); 
    });
</script>

<script type="text/javascript">
  
function idinfluencer(idM){
  $.ajax({
    type: 'POST',
    data: 'idM=' + idM,
    url: 'php/mostrarinfluencer.php'
  })
  .done(function(listas_rep){
    
     $('#idinf').html(listas_rep)


  });
}
</script>

 <script>
  $(function () {
    $("#tablausuario").DataTable({
      language:{
      url: '//cdn.datatables.net/plug-ins/1.10.18/i18n/Spanish.json'
    },
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false
    })
    $("#tablacupones").DataTable({
      language:{
      url: '//cdn.datatables.net/plug-ins/1.10.18/i18n/Spanish.json'
    },
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false
    });
   
  });

 
</script>
