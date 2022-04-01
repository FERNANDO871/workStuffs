<?php
   include("db.php");

   if(isset($_GET['id'])){
   	$id_tarea=$_GET['id'];
    $q_borrar ="DELETE FROM cliente WHERE id=$id_tarea";
    $r_borrar = mysqli_query($conn, $q_borrar);
    if(!$r_borrar){
    die("Error al Borrar");
    }
    $_SESSION['message'] = 'Usuario Eliminado';
    $_SESSION['message_type'] = 'danger';
    header("Location: index.php");
   }
?>