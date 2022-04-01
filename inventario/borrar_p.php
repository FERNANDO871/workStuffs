<?php
   include("db.php");

   if(isset($_GET['Id'])){
   	$id_tarea=$_GET['Id'];
    $q_borrar = "DELETE FROM inventario WHERE Id=$id_tarea";
    $r_borrar = mysqli_query($conn, $q_borrar);
    if(!$r_borrar){
    die("Error al Borrar");
    }
    $_SESSION['message'] = 'Producto Eliminado';
    $_SESSION['message_type'] = 'danger';
    header("Location: index2.php");
   }
?>