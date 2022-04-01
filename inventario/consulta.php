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
$query="SELECT * FROM usuario ORDER BY Id";

//Busqueda por el input//
if(isset($_POST['busqueda']))
{
	$q=$conexion->real_escape_string($_POST['busqueda']);
	$query="SELECT * FROM inventario WHERE 
		IdProd LIKE '%".$q."%' OR
		CantProd LIKE '%".$q."%' OR
		MovInvent LIKE '%".$q."%' OR
		NombreProd LIKE '%".$q."%' OR
		PrecioProd LIKE '%".$q."%' OR
		Estatus LIKE '%".$q."%' OR
		TPS LIKE '%".$q."%'";

}

$buscarProd=$conexion->query($query);
if ($buscarProd->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
			<td>IdProd</td>
			<td>CantProd</td>
			<td>MovInvent</td>
			<td>NombreProd</td>
			<td>PrecioProd</td>
			<td>Estatus</td>
			<td>TPS</td>
			<td>Imagen</td>
		</tr>';

	while($filaProd= $buscarProd->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaProd['IdProd'].'</td>
			<td>'.$filaProd['CantProd'].'</td>
			<td>'.$filaProd['carrera'].'</td>
			<td>'.$filaProd['MovInvent'].'</td>
			<td>'.$filaProd['NombreProd'].'</td>
			<td>'.$filaProd['PrecioProd'].'</td>
			<td>'.$filaProd['Estatus'].'</td>
			<td>'.$filaProd['TPS'].'</td>
			<td>'.$filaProd['Imagen'].'</td>
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias.";
	}


echo $tabla;
?>
