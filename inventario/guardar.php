<?php
include ("includes/header.php");
include ("db.php");
if (isset($_POST['save'])){
   $IdProd = $_POST['IdProd'];
   $CantProd = $_POST['CantProd'];
   $MovInvent = $_POST['MovInvent'];
   $NombreProd = $_POST['NombreProd'];
   $PrecioProd = $_POST['PrecioProd'];
   $Estatus = $_POST['Estatus'];
   $TPS = $_POST['TPS'];
   $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

   // echo $title;
   // echo"</br>";
   // echo $descripcion;
   $query = "INSERT INTO inventario (IdProd, CantProd, MovInvent, NombreProd, PrecioProd, Estatus, TPS, Imagen) VALUES ('$IdProd', '$CantProd','$MovInvent','$NombreProd', '$PrecioProd','$Estatus', '$TPS' , '$Imagen')"; // esta linea para insertar datos
   $result = mysqli_query($conn, $query); //proceso para mandar los datos a la base de dato
   if (!$result) {

            $_SESSION['message'] = 'Guardado Fallido'; //alerta de bootstrap
            $_SESSION['message_type'] = 'danger'; //success es el color (rojo)   
            header("Location: index.php"); //redirecciona a la pagina del inventario.
   }else{
   $_SESSION['message'] = 'Producto guardado correctamente'; //alerta de bootstrap
   $_SESSION['message_type'] = 'success'; //success es el color (verde)   
   header("Location: index.php"); //redirecciona a la pagina del inventario
   }
}
mysqli_free_result($result);
mysqli_close($conn);
?>