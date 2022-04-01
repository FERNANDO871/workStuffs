<?php

$contraseña = "";
$usuario = "root";
$bd = "tiendaozonium";
try{
	$base_de_datos= new PDO('mysql:host=localhost;dbname='.$bd,$usuario,$contraseña);
	/*echo "<script>alert('La conexion se realizo correctamente')</script>"; */
} catch(Exeption $e){
	"<script>alert('Ocurrio un error al conectarse')</script>".$e->getMessge();
}
