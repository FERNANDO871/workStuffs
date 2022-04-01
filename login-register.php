<?php 
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'tiendaozonium';
//$port = '33065';


$data = mysqli_connect($server, $username, $password, $db/*, $port*/);

$sql = "SELECT * FROM inventario ";
$return=mysqli_query($data,$sql);


mysqli_query($data, "SET NAMES 'UTF8'");
require 'views/login-register.views.php';    
?>
 <script type="text/javascript">
    function showPassword(){
    var txtpassword=document.getElementById('txtpassword');
    if(txtpassword.type=='password')
    {
    txtpassword.type='text';
    }
    else{
    txtpassword.type='password';
    }
}
</script>
<!--
<script type="text/javascript">
$(function(){
    $(".register_btn");
});
</script>
-->
<script type="text/javascript">
    $(document).ready(function(){
        $('#loginbtn1').click(function(){
            var datos=$('#frmlog').serialize();
            $.ajax({
                type:"POST",
                url:"manejador.php",
                data:datos
            })
               .done(function(r){
                    if(r==1){
                       location.href ="distribuidor.php";
                    }else{
                        swal('ERROR','Usuario ò Contraseña Incorrecto .','error');
                    }
                }); 
            });
    });
 </script>


<script type="text/javascript">
    $(document).ready(function(){
        $('#registerbtn').click(function(){
            var datos=$('#frmajax').serialize();
            $.ajax({
                type:"POST",
                url:"procesos/insertar.php",
                data:datos
            })
              .done(function(r){
                    if(r==1){
                        document.getElementById('frmajax').reset();
                        swal('Registro de usuario con exito.','sucess');
                    }else{
                        swal('ERROR','Verificar los campos ajax.','error');
                    }
                }); 
            }); 
    });
</script>


