<?php 
include "header.php"; 
 ?>
 <div class="breadcrumb-area ">
            <div class="container-fluid h-100">
                <div class="breadcrumb-content h-100">
                    <h2 class="text-capitalize mb-0">Cupones</h2>
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li class="active">Lista de Cupones</li>
                        <li><a href="index.php">Reporte Cupones</a></li>
                    </ul>
                </div>
            </div>
        </div>
<br>


<div class="container-fluid">
	<div class="row">



		<div class="col-2"> <!-- Aqui empieza la clase formulario -->
		    
		  
			   
			    	<!-- accion la manda al archivo "guardar.php" mediante el metodo POST -->
                 
                     <button class="login_btn" id="save" type="button" name="save">Generar Cupon</button>
			        <br>
    
	<!--	</div> Aqui acaba la clase formulario -->
		

		<!-- Estilos para select2 -->

		<!--Termina Estilos para select2 -->
				
	</div>

		<!-- Empieza buscador -->
		<div class="col-10"> <!-- esto se refiere a una columna -->
		
	

					
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
						
						<th>Cupon</th>
						<th>Fecha</th>
						<th>Descuento</th>
						<th>Influencer</th>
						<th>Estatus</th>
						<th>Accion</th>
					</tr>	
				</thead>

			

						
					<tbody style="color: #000000;">

						<?php
						  while($row =mysqli_fetch_array($return)){ 

						  	if ($row{'Estatus'} == 1) {
						  		$tipousuario="ACTIVO";
						  	}
						  	if ($row{'Estatus'} == 2) {
						  		$tipousuario="SUSPENDIDO";
						  	}
						  	if ($row{'Estatus'} == 3) {
						  		$tipousuario="Administrador";
						  	}
						  	?>
                          <tr>
                          	<td><?php echo $row[0] ?></td>
                          	
	                        <td><?php echo $row[4] ?></td>                       
	                        <td><?php echo $row[2] ?></td>
	                         <td><?php echo $row[5] ?>%</td>

	                        <td><?php echo $row[6] ?> <?php echo $row[7] ?></td>  
                          	<td><?php echo $tipousuario ?></td>
                          	<td>
                          		<span class="btn btn-lighprimaryt btn-xs" onclick="idparticipantes()">
                                    <span class="fas fa-edit"></span>
                                    </span>
                                    <span class="btn btn-lighprimaryt btn-xs" onclick="idparticipantes()" style="color: red">
                                    <span class="fas fa-ban"></span>
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

 <!-- Begin Yena's Modal Area -->
        <div class="modal fade modal-wrapper" id="modalcupon">
            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-body">
                       
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

<br>
<form id="formcupon">


  <div class="row">

    <div class="col-3">
    	Nombre Cupon:
      <input type="text" class="form-control" placeholder="Cupon" id="txtcupon" name="txtcupon">
    </div>

    <div class="col-6" id="idinf">
    	Nombre Influencer:
      <input type="text" class="form-control" placeholder="Influencer" readonly id="txtnombreinf"  name="txtnombreinf">
    </div>
    <div class="col-3">
    Descuento:
			    	<select  class="form-control" style="cursor: pointer"  id="txtdes" name="txtdes">
      						<option value="5" selected="">5%</option>
     						<option value="10" >10%</option>
      						<option value="15">15%</option>
      						<option value="20">20%</option>
    				</select>
    </div>

  </div>

  <button class="login_btn" id="savecupon" type="button" name="savecupon">Guardar Cupon</button>
  <div id="idmensaje"></div>
<br>


</form>










                                <div class="table-responsive">
                                <table class="table table-hover" id="tablacupones">
                <thead>
                    <tr>
                        <th>Id</th>
                        
                        <th>Influencer</th>
                        
                       
                    </tr>   
                </thead>

            

                        
                    <tbody style="color: #000000;">

                        <?php
                          while($row =mysqli_fetch_array($return1)){ 

                            if ($row{'estatus'} == 1) {
                                $tipousuario="Cliente";
                            }
                            if ($row{'estatus'} == 2) {
                                $tipousuario="Influencer";
                            }
                            if ($row{'estatus'} == 3) {
                                $tipousuario="Administrador";
                            }
                            ?>
                          <tr style="cursor: pointer;" onclick="idinfluencer(<?php echo $row['id'] ?>)">
                            <td><?php echo $row['id'] ?></td>
                             <td><?php echo $row['nombre'] ?> <?php echo $row['lastname'] ?>  </td>
                            
                        
                           
                            
                          </tr>
                        <?php  } ?>
                    </tbody>
            </table>
                                </div>



                        </div>
                    </div>
                </div>
            </div>


<?php include ("footer.php"); ?>

