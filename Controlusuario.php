<?php session_start();
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'tiendaozonium';
//$port = '33065';


$data = mysqli_connect($server, $username, $password, $db/*, $port*/);

$sql = "SELECT * FROM cliente ";
$return=mysqli_query($data,$sql);


mysqli_query($data, "SET NAMES 'UTF8'");
require 'views/Controlusuario.views.php';	
?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#save').click(function(){
            var datos=$('#formuser').serialize();
            $.ajax({
                type:"POST",
                url:"procesos/insertAdmin.php",
                data:datos
            })
              .done(function(r){
                    if(r==1){
                       location.reload();

                    }else{
                        swal('ERROR','Verificar los campos ajax.','error');
                    }
                }); 
            }); 
    });
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
    });
   
  });
 
</script>
