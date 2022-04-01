<?php
//Conexion a la base de datos//

$host = 'localhost';
$basededatos = 'tienda';
$usuario = 'root';
$contraseña = '';  



$conexion = new mysqli($host, $usuario,$contraseña, $basededatos);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}  

//Valores por mostrear por pantalla//

$tabla="";
$query="SELECT * FROM cliente ORDER BY id";

//Busqueda por el input//
if(isset($_POST['busqueda']))
{
	$q=$conexion->real_escape_string($_POST['busqueda']);
	$query="SELECT * FROM cliente WHERE 
		id LIKE '%".$q."%' OR
		type LIKE '%".$q."%' OR
		num LIKE '%".$q."%' OR
		name LIKE '%".$q."%' OR
		lastname LIKE '%".$q."%' OR
		email LIKE '%".$q."%' OR
		recovery LIKE '%".$q."%' OR
		password LIKE '%".$q."%' OR
		estatus LIKE '%".$q."%'";

}

$buscarProd=$conexion->query($query);
if ($buscarProd->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
			<td>id</td>
			<td>type</td>
			<td>num</td>
			<td>name</td>
			<td>lastname</td>
			<td>email</td>
			<td>recovery</td>
			<td>password</td>
			<td>estatus</td>
		</tr>';

	while($filaProd= $buscarProd->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaProd['id'].'</td>
			<td>'.$filaProd['type'].'</td>
			<td>'.$filaProd['num'].'</td>
			<td>'.$filaProd['name'].'</td>
			<td>'.$filaProd['lastname'].'</td>
			<td>'.$filaProd['email'].'</td>
			<td>'.$filaProd['recovery'].'</td>
			<td>'.$filaProd['password'].'</td>
			<td>'.$filaProd['estatus'].'</td>
		 </tr>';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias.";
	}


echo $tabla;
?>
