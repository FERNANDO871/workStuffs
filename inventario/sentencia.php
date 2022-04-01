<?php

$conexion = mysqli_connect('localhost', 'root', '');
$db = 'tienda';

$con = mysqli_select_db($conexion, $db) or die ('No podemos conectarnos'.mysqli_error());

$consulta = 'SELECT * FROM inventario';
$resultado = mysqli_query($conexion, $consulta);

echo "
	<table border='1'>
		<tr>
			<td><strong>IdProd</strong></td>
			<td><strong>CantProd</strong></td>
			<td><strong>MovInvent</strong></td>
			<td><strong>NombreProd</strong></td>
			<td><strong>PrecioProd</strong></td>
			<td><strong>Estatus</strong></td>
			<td><strong>TPS</strong></td>
			<td><strong>Imagen</strong></td>
		</tr>";


while ($traer = mysqli_fetch_array($resultado)) 
{
	echo "
		<tr>
			<td>".$traer['IdProd']."</td>
			<td>".$traer['CantProd']."</td>
			<td>".$traer['MovInvent']."</td>
			<td>".$traer['NombreProd']."</td>
			<td>".$traer['PrecioProd']."</td>
			<td>".$traer['Estatus']."</td>
			<td>".$traer['TPS']."</td>
			<td><img src='data:image/jpg;base64,".base64_encode($traer['Imagen'])."'></td>
		</tr>";
}
echo "</table>";

mysqli_close($conexion);

  ?>