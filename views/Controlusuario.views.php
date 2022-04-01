<?php 
include "header.php"; 
 ?>
 <div class="breadcrumb-area ">
            <div class="container-fluid h-100">
                <div class="breadcrumb-content h-100">
                    <h2 class="text-capitalize mb-0">Administrador</h2>
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li class="active">Control de Usuario</li>
                    </ul>
                </div>
            </div>
        </div>
<br>


<div class="container-fluid">
	<div class="row">
		<div class="col-3"> <!-- Aqui empieza la clase formulario -->
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
			    <form  id="formuser"> 
			    	<!-- accion la manda al archivo "guardar.php" mediante el metodo POST -->


<!--  <script src="boton.derecho.js" type="text/javascript" charset="utf-8" async defer></script> -->


			    	<div class="form-group"> <!-- Aqui inicia el campo usuario formulario-->
			    		Tipo de Usuario:
			    	<select name="num" class="form-control" style="cursor: pointer" required>
      						<option value="1">Cliente</option>
     						<option value="2" selected="">Influencer</option>
      						<option value="3">Administrador</option>
      						<option value="4">Tesoreria</option>
     						<option value="5">Almacen</option>
      						<option value="6">Facturacion</option>
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
			    	
			    	<!-- Aqui acaba la clase formulario -->
			    	

                 
                     <button class="login_btn" id="save" type="button" name="save">Guardar</button>
			        <br>
               		        
			    </form>
		    </div>
	<!--	</div> Aqui acaba la clase formulario -->
		

		<!-- Estilos para select2 -->

		<!--Termina Estilos para select2 -->
				
	</div>

		<!-- Empieza buscador -->
		<div class="col-9"> <!-- esto se refiere a una columna -->
		
	

					
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
						
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>Tipo de Usuario</th>
						<th>Correo</th>
						<th>Contraseña</th>
						<th>Estatus</th>
						<th>Accion</th>
					</tr>	
				</thead>

			

						
					<tbody style="color: #000000;">

						<?php
						  while($row =mysqli_fetch_array($return)){ 

						  	if ($row['num'] == 1) {
						  		$tipousuario="Cliente";
						  	}
						  	if ($row['num'] == 2) {
						  		$tipousuario="Influencer";
						  	}
						  	if ($row['num'] == 3) {
						  		$tipousuario="Administrador";
						  	}
						  	if ($row['num'] == 4) {
						  		$tipousuario="Tesoreria";
						  	}
						  	if ($row['num']== 5) {
						  		$tipousuario="Almacen";
						  	}
						  	if ($row['num'] == 6) {
						  		$tipousuario="Facturacion";
						  	}
						  	?>
                          <tr>
                          	<td><?php echo $row['id'] ?></td>
                          	
	                        <td><?php echo $row['nombre'] ?></td>                       
	                        <td><?php echo $row['lastname'] ?></td>
	                        <td><?php echo $tipousuario?></td>  
                          	<td><?php echo $row['email'] ?></td>
                          	<td><?php echo $row['pass'] ?></td>
                          	
                          	<td><?php echo $row['estatus'] ?></td>
                          	<td>
                          		<span class="btn btn-lighprimaryt btn-xs" onclick="idparticipantes()">
                                    <span class="fas fa-edit"></span>
                                    </span>
                                    <span class="btn btn-lighprimaryt btn-xs" onclick="idparticipantes()" style="color: red">
                                    <span class="fas fa-trash-alt"></span>
                                    </span>

                           	</td>
                          	
                          </tr>
						<?php  } ?>
					</tbody>
			</table>



		 </div><!-- aqui acaba el div de la tabla     <span class='btn btn-light btn-xs'  >
                    <span class='far fa-folder-open'></span>
                                  </span>            <a  href="editar.php?id=" class="btn btn-secondary" data-bs-toggle="tooltip" title = "Editar"><i class="fas fa-edit"></i></a>    -->	
</div>	



	</div>
</div>



<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="crud/assets/jquery/jquery-3.3.1.min.js"></script>




<?php include ("footer.php"); ?>

