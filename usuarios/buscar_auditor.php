<?php include ("db.php");?>

<?php include ("includes/header.php");?>
<section>
	<?php
     $busqueda = strtolower($_REQUEST['busqueda']);
     if(empty($busqueda))
     {
      header("location: index.php");
     }
	?>
<div class="container p-4">
	<div class="row">
		<div class="col-md-3"> <!-- Aqui empieza la clase formulario -->
		    <?php if (isset($_SESSION['message'])){ ?> <!--alerta de guardado-->
		    	  <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
				 <?= $_SESSION['message'] ?> <!--poner el mensaje-->
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				   <span aria-hidden="true">&times;</span>
				   </button>
				   </div>
		   <?php session_unset();/*cierra sesion(mensaje)*/ } ?> 
		    <div class="card card-body"> <!--targeta-->
			    <form action="guardar.php" method="POST"> <!-- accion la manda al archivo "guardar.php" mediante el metodo POST -->
			    	<div class="form-group"> <!-- Aqui acaba la clase formulario -->
			    		Numero de Usuario:
			    		<input type="number" name="num" class="form-control" autofocus>
			    	</div>
			    	<div class="form-group"> <!-- Aqui acaba la clase formulario -->
			    		Tipo de Usuario:
			    		<input type="text" name="type" class="form-control" autofocus>
			    	</div>
			    	<div class="form-group"> <!--Aqui acaba la clase formulario -->
			    		Nombre de Usuario:
			    		<input type="text" name="name" class="form-control" autofocus>
			    	</div>
			    	<div class="form-group"> <!--Aqui acaba la clase formulario-->
			    		Apellidos del Usuario:
			    		<input type="text" name="lastname" class="form-control"  autofocus>
			    	</div> 
			    	<div class="form-group"> <!-- Aqui acaba la clase formulario -->
			    		Correo Electronico:
			    		<input type="email" name="email" class="form-control"  autofocus>
			    	</div>
			    	<div class="form-group"> <!-- Aqui acaba la clase formulario -->
			    		Correo de Recuperación:
			    		<input type="email" name="recovery" class="form-control"  autofocus>
			    	</div>
			    	<div class="form-group"> <!-- Aqui acaba la clase formulario -->
			    		Contraseña:
			    		<input type="text" name="password" class="form-control"  autofocus>
			    	</div>
			    	<div class="form-group"> <!-- Aqui acaba la clase formulario -->
			    		Estatus:
			    		<input type="text" name="estatus" class="form-control" autofocus>
			    	</div>
			    	<!-- Aqui acaba la clase formulario -->
			    	
                   <input type="submit" class="btn btn-success" name="save" value="Guardar">
			        <br>
               </div>			        
			    </form>
		    </div>
	<!--Aqui acaba la clase formulario -->
		<br>
		<div class="col-md-8"> <!-- esto se refiere a una columna -->
			<form action="buscar_auditor.php" method="get" class="form-search">
			    <input type="text" name="busqueda" id="busqueda" placeholder="Buscar" 
			    value="<?php echo $busqueda ?>">
			    <input type="submit" name="buscar" value="Buscar" class="btn-search">    
			</form>
			<br>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Número</th>
						<th>Tipo de Usuario</th>
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>Correo</th>
						<th>Correo de Recuperación</th>
						<th>Contraseña</th>
						<th>Estatus</th>
					</tr>	
				</thead>
				<tbody>
					<tbody>
						<?php 
                          //$q=$conn->real_escape_string($_POST['auditores']);
                          $query1 = "SELECT * FROM cliente WHERE 
                          type LIKE '%".$busqueda."%' OR
                          name LIKE '%".$busqueda."%' OR
                          lastname LIKE '%".$busqueda."%' OR
                          email LIKE '%".$busqueda."%' OR
		                  password LIKE '%".$busqueda."%'";
						  $tabla = mysqli_query($conn, $query1);
						  while($row =mysqli_fetch_array($tabla)){ ?>
                          <tr>
                          	<td><?php echo $row['id'] ?></td>
                          	<td><?php echo $row['num'] ?></td>
	                        <td><?php echo $row['type'] ?></td>                            
	                        <td><?php echo $row['name'] ?></td>
                          	<td><?php echo $row['lastname'] ?></td>
                          	<td><?php echo $row['email'] ?></td>
                          	<td><?php echo $row['recovery'] ?></td>
                          	<td><?php echo $row['password'] ?></td>
                          	<td><?php echo $row['estatus'] ?></td>
                          	<td>
                          		<a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-secondary"><i class="fas fa-marker"></i></a>
                          		<a href="#" class="btn btn-danger" onclick="preguntar(<?php echo $row['id']; ?>)"><i class="fas fa-trash-alt"></i></a>
                           	</td>
                          	
                          </tr>
						<?php  }
						  ?>
					</tbody>
				</tbody>
			</table>
		 </div>
		</div>	<!-- aqui acaba el div de la tabla -->	
	</div>
</div>
</section>
	

<?php include ("includes/footer.php"); ?>