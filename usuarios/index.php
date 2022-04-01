<?php 
include ("db.php");

include ("includes/p-header.html"); 

include "includes/header.php"; 

/*session_start(); */
/*echo $_SESSION[$email]; */
 ?>


		<!-- ESTILOS -->

		
		<!-- SCRIPTS JS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="peticion.js"></script>

<!-- Bootstrap only Css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


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

				  
 

 <script type="text/javascript" src="validar-auditores.js"></script>  
		   <?php session_unset();/*cierra sesion(mensaje)*/ } ?> 
		    <div class="card card-body"> <!--targeta-->
		    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			    <form action="guardar.php" method="POST"  onsubmit="return validar();"> 
			    	<!-- accion la manda al archivo "guardar.php" mediante el metodo POST -->


<!--  <script src="boton.derecho.js" type="text/javascript" charset="utf-8" async defer></script> -->


			    	<div class="form-group"> <!-- Aqui inicia el campo usuario formulario-->
			    		Tipo de Usuario:
			    	<select name="num" class="form-control" style="cursor: pointer" required>
      						<option>---------------------------▼</option>
      						<option value="1">Cliente</option>
     						<option value="2">Influencer</option>
      						<option value="3">Administrador</option>
    				</select>
			   <!--<input type="text" name="type" class="form-control" autofocus required>-->
			    	</div>
			    	<div class="form-group"> <!--Aqui acaba la clase formulario -->
			    		Nombre:
			    		<input type="text" name="name" class="form-control" autofocus required>
			    	</div>
			    	<div class="form-group"> <!--Aqui acaba la clase formulario-->
			    		Apellidos:
			    		<input type="text" name="lastname" class="form-control"  autofocus required>
			    	</div> 
			    	<div class="form-group"> <!-- Aqui acaba la clase formulario -->
			    		Correo Electronico:
			    		<input type="email" name="email" class="form-control"  autofocus required>
			    	
			    	</div>
			    	<div class="form-group"> <!-- Aqui acaba la clase formulario -->
			    		Contraseña:
			    		<input type="text" name="password" class="form-control"  autofocus required>
			    		
			    	</div>
			    	<div class="form-group"> <!-- Aqui acaba la clase formulario -->
			    		Confirmar Contraseña:
			    		<input type="text" name="confirm" class="form-control"  autofocus required>
			    		
			    	</div>
			    	<div class="form-group"> <!-- Aqui acaba la clase formulario -->
			    		Estatus:
			    		<select type="text" name="estatus" class="form-control" style="cursor: pointer;" required>
			    			<option>---------------------------▼</option>
			    			<option value="Activo">Activo</option>
			    			<option value="Inactivo">Inactivo</option>
			    		</select>
			    	</div>
			    	<!-- Aqui acaba la clase formulario -->
			    	

                   <input type="submit" class="btn btn-success" name="save"
                    value="Guardar">
			        <br>
               </div>			        
			    </form>
		    </div>
	<!--	</div> Aqui acaba la clase formulario -->
		

		<!-- Estilos para select2 -->

				<link rel="stylesheet" type="text/css" href="includes/select2.min.css">

				<script
  					src="https://code.jquery.com/jquery-3.6.0.js"
 					integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
 					 crossorigin="anonymous">
 				</script>

				<script src="includes/select2.min.js"></script>
		<!--Termina Estilos para select2 -->
				
		<!-- Empieza buscador -->
		<div class="col-md-8"> <!-- esto se refiere a una columna -->
		
	

					
		<!-- Termina buscador -->

		<!-- Funcion preguntar eliminar -->
						 <script type="text/javascript">
                            function ask(){
                              var respuesta = confirm("Desea eliminar el usuario ?")
                              return respuesta;
                            }
                          </script>
        <!-- Termina funcion preguntar eliminar -->
		

			<br>
			<table class="table table-hover" id="tablausuario">
				<thead>
					<tr>
						<th>Id</th>
						<th>Tipo de Usuario</th>
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>Correo</th>
						<th>Contraseña</th>
						<th>Confirmar Contraseña</th>
						<th>Estatus</th>
						<th>Accion</th>
					</tr>	
				</thead>

			

						
					<tbody >

						<?php 
                          $query1 = "SELECT * FROM cliente";
						  $tabla = mysqli_query($conn, $query1);
						  while($row =mysqli_fetch_array($tabla)){ ?>
                          <tr>
                          	<td><?php echo $row['id'] ?></td>
                          	<td><?php echo $row['num'] ?></td>  
	                        <td><?php echo $row['name'] ?></td>                       
	                        <td><?php echo $row['lastname'] ?></td>
                          	<td><?php echo $row['email'] ?></td>
                          	<td><?php echo $row['password'] ?></td>
                          	<td></td>
                          	<td><?php echo $row['estatus'] ?></td>
                          	<td>
                          		<a  href="editar.php?id=<?php echo $row['id']?>" class="btn btn-secondary" data-bs-toggle="tooltip" title = "Editar"><i class="fas fa-marker"></i></a>
                          		
                          		<a  href="borrar.php?id=<?php echo $row['id']?>" class="btn btn-danger" 
                          			onclick="return ask(<?php echo $row['id']; ?>)"  
                          			data-bs-toggle="tooltip" title = "Borrar">
                          			<i class="fas fa-trash-alt"></i></a>
                           	</td>
                          	
                          </tr>
						<?php  } ?>
					</tbody>
			</table>
		 </div>
		</div>	<!-- aqui acaba el div de la tabla -->	
	</div>
</div>



<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="crud/assets/jquery/jquery-3.3.1.min.js"></script>


 <script>
  $(function () {
    $("#tablausuario").DataTable({
      language:{
      url: '//cdn.datatables.net/plug-ins/1.10.18/i18n/Spanish.json'
    },
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false
    });
   
  });
 
</script>


<?php include ("includes/footer.php"); ?>

<?php include ("includes/p-footer.html"); ?>