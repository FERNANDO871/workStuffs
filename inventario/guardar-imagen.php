 <?php
 //include("db.php");

  //session_start();

 $server = "localhost";
$username = 'root';
$password = '';
$database = 'tienda';
//$port = '33065';
$conn = mysqli_connect($server, $username, $password, $database/*, $port*/);


$Id = $_POST['Id'];

$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));


 $query = "UPDATE inventario  SET  Imagen = '$Imagen' WHERE Id = '$Id'"; // esta linea para actualizar imagen.
  
 $result = mysqli_query($conn, $query); 

    if ($result) {
   	   header("Location: index.php"); 
   	    $_SESSION['message'] = 'Cambio de Imagen Realizado'; //alerta de bootstrap
  		 $_SESSION['message_type'] = 'success';
   }else{
 header("Location: index.php"); 
        $_SESSION['message'] = 'Cambio no Realizado'; //alerta de bootstrap
       $_SESSION['message_type'] = 'danger';
   }

  
/*
    $_SESSION['message'] = 'Cambio de Imagen Realizado'; //alerta de bootstrap
   $_SESSION['message_type'] = 'success'; //success es el color (verde)   
   header("Location: index.php"); //redirecciona a la pagina del inventario
 */

mysqli_close($conn);
?>