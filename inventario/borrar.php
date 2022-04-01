<?php
   include("db.php");

   if(isset($_GET['Id'])){
    $id = $_GET['Id'];
    $query ="DELETE FROM inventario WHERE Id=$id";
    $resultado = mysqli_query($conn, $query);
      if(!$resultado){
    die("Error al Borrar");
    }
    $_SESSION['message'] = 'Producto Eliminado';
    $_SESSION['message_type'] = 'danger';
   header("Location: index.php");
  }
   // session_destroy();
?>