<?php
 include ("db.php");

 $salida = "";

 $query = "SELECT * FROM cliente ORDER BY id";

 if (isset($_POST['consulta'])) {
 	$q = $conn->real_escape_string($_POST['consulta']);
 	$query = "SELECT type, num, name, lastname, email, recovery, estatus FROM cliente
 			WHERE type LIKE '%".$q."%' OR num LIKE '%".$q."%' OR name LIKE '%".$q."%' 
 			OR lastname LIKE '%".$q."%' OR email LIKE '%".$q."%' OR recovery LIKE '%".$q."%'
 			OR status LIKE '%".$q."%'"; 
 } 

 	$resultado = $mysqli -> $query($query);

 	


 