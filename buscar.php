<?php

$mysqli = new mysqli("localhost","root","","inventario");

$salida = "";
$query = "SELECT * FROM tienda ORDER BY Id";
$query = "SELECT IdProd, CantProd, MovInvent, NombreProd, PrecioProd, Estatus, TPS FROM NombreProd, Estatus,buscar,php, TPS WHERE NombreProd Like '%".$q."%' Or TPS LIKE '%".$q."%'";


$resultado = $mysqli->query($query);

if ($resultado -> num_rows > 0){

	$salida .= "<table class='tabla_datos'>
	    		<thead> 
	    			<tr>    
	    				<th>Id Producto</th>
						<th>Cantidad Producto</th>
						<th>Movimiento Inventario</th>
						<th>Nombre</th>
						<th>Precio</th>
						<th>Estatus</th>
						<th>TPS</th>
						<th>Imagen</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>";
		while ($fila = $resultado->fetch_assoc()) {
			$salida.="	<tr>
						<th>".$fila['IdProd']."</th>
						<th>".$fila['CantProd']."</th>
						<th>Movimiento Inventario</th>
						<th>Nombre</th>
						<th>Precio</th>
						<th>Estatus</th>
						<th>TPS</th>
						<th>Imagen</th>
						<th>Accion</th>
				</tr>";
		}

}else{

}
