<?php 
include "header.php"; 
 ?>
 <div class="breadcrumb-area ">
            <div class="container-fluid h-100">
                <div class="breadcrumb-content h-100">
                    <h2 class="text-capitalize mb-0">Pedidos</h2>
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li class="active">Pedidos</li>
                        <li><a href="#">Pedidos Abiertos</a></li>
                        <li><a href="#">Pedidos Enviados</a></li>
                        <li><a href="#" >Reporte Pedidos</a></li>
                    </ul>
                </div>
            </div>
        </div>
<br>


<div class="container-fluid">
	<div class="row" >



		<div class="col-2"> <!-- Aqui empieza la clase formulario -->
		    
		  
			   
			    	<!-- accion la manda al archivo "guardar.php" mediante el metodo POST 
                 
                     <button class="login_btn" id="save" type="button" name="save">Generar Cupon</button>

			        <br>
    -->
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
      <?php echo $hoy ?>
<?php echo $tabla ?>

                     


			



		 </div><!-- aqui acaba el div de la tabla     <span class='btn btn-light btn-xs'  >
                    <span class='far fa-folder-open'></span>
                                  </span>            <a  href="editar.php?id=" class="btn btn-secondary" data-bs-toggle="tooltip" title = "Editar"><i class="fas fa-edit"></i></a>    -->	
</div>	



	</div>
</div>



<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="crud/assets/jquery/jquery-3.3.1.min.js"></script>

<!-- modal-->
<div class="modal fade modal-wrapper" id="modalpedidos">
            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-body">
                       
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

<br>
<form id="formEtapa4" action="subirF.php" method ="POST" role="form" enctype="multipart/form-data">


  <div class="row">


    <div class="col-6" id="idinf">
     
    </div>
    <div class="col-6">
  <input type="file" class="custom-file-input" id="idfilef" name="idfilef" lang="es">

    </div>


  </div>

  <button class="login_btn" id="savecupon" type="submit" name="form4_btn" id="form4_btn">Guardar</button>
  <div id="msjetapa4"></div>
<br>


</form>

                        </div>
                    </div>
                </div>
            </div>

<?php include ("footer.php"); ?>

