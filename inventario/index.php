<?php include ("db.php");?>
<?php include "includes/p-header.html"; ?>
	<?php include "includes/header.php"; ?>


		<style type="text/css">
			.zoom{
				width: 120px;
				height: auto;
				transition: transform ease-in-out 0.3s;	
				cursor: pointer;	
			}
			.zoom:hover{
				transform: scale(3.5);
			}
		</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->




<!-- <script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script> -->


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">





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
	<!--	   <?php session_unset();/*cierra sesion(mensaje)*/ } ?> -->
		    <div class="card card-body"> <!--targeta-->


 <!-- accion la manda al archivo "guardar.php" mediante el metodo POST -->
 <form action="guardar.php" id="frminv" method="POST" enctype="multipart/form-data"  
			    onsubmit="return validar();"> 
			    	

<!--  <script src="boton.derecho.js" type="text/javascript" charset="utf-8" async defer></script> -->

	
		<!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->

			    	<div class="form-group"> <!-- Aqui acaba la clase formulario -->
			    		Id Producto:
			    		<input type="text" name="IdProd" class="form-control" required>
			    	</div>
			    	<div class="form-group"> <!-- Aqui acaba la clase formulario -->
			    		Cantidad de Producto:
			    		<input type="text" name="CantProd" class="form-control"  required>
			    	</div>
			    	<div class="form-group"> <!--Aqui acaba la clase formulario -->
			    		Movimiento en Inventario:
			    		<input type="text" name="MovInvent" class="form-control"  required>
			    	</div>
			    	<div class="form-group"> <!--Aqui acaba la clase formulario-->
			    		Nombre:
			    		<input type="text" name="NombreProd" class="form-control"   required>
			    	</div> 

			       <div class="form-group"> <!--Aqui acaba la clase formulario-->
			    		Precio:
			    		<input type="text" name="PrecioProd" class="form-control"   required>
			    	</div> 

			    	<div class="form-group"> <!-- Aqui acaba la clase formulario -->
			    		Estatus:
			    		<input type="text" name="Estatus" class="form-control"   required>
			    		<!--<textarea name="email" rows="2" class="form-control" required></textarea>-->
			    	</div>
			
			    	<div class="form-group"> <!-- Aqui acaba la clase formulario -->
			    		Tipo de Salida:
			    		<input type="text" name="TPS" class="form-control"   required>
			    		<!--<textarea name="celular" class="form-control" autofocus required></textarea>-->
			    	</div>
			    	<div class="form-group"> <!-- Aqui acaba la clase formulario -->
			    		Imagen:
			    		<input type="file" name="Imagen" class="form-control"  accept=".jpg, .jpeg, .png"
              autofocus required>

			    	</div>
			    	<!-- Aqui acaba la clase formulario -->
			    	

                   <input type="submit" class="btn btn-success" name="save" id="save" 
                   value="Guardar">
			        <br>
               </div>			        
      </form>
		    </div>
	<!--	</div> Aqui acaba la clase formulario -->
	

		<br>
									<!-- EMPIEZA BUSCADOR -->

		<div class="col-md-8"> <!-- esto se refiere a una columna -->
	
		   
		   <script>
		$(document).ready(function() {
    $('#frminv').DataTable();
});
		</script>
			


			<br>
			<table id="datable" class="table table-bordered">
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

				<tbody>
					<tbody>
						<?php 
              $query1 = "SELECT * FROM inventario";
						  $tabla = mysqli_query($conn, $query1);
						  while($row =mysqli_fetch_array($tabla)){ ?>
                          <tr>
                          	<td><?php echo $row['IdProd'] ?></td>
                          	<td><?php echo $row['CantProd'] ?></td>
                          	<td><?php echo $row['MovInvent'] ?></td>   
	                          <td><?php echo $row['NombreProd'] ?></td>  
	                          <td><?php echo $row['PrecioProd'] ?></td>                     
	                          <td><?php echo $row['Estatus'] ?></td>
                          	<td><?php echo $row['TPS'] ?></td>
                          	<td>
												<style type="text/css">
														.image-upload img
														{
   															 width: 180px;
    														cursor: pointer;
														}
												</style>
				 <button type="button" id="btnmodal" class="btn" data-toggle="modal" data-target="#exampleModal"> 
                          		<div class="image-upload">
                          			<label for="fileInput">
                          				<img class="zoom" id="btnmodal" 
                          			 	title="Click para actualizar imagen" 
                          				 src="data:image/jpg;base64,
                          				<?php echo base64_encode($row['Imagen']); ?>"/>
                          				<!--<input style="display: none;" type="file" 
                          				id="fileInput" accept=".jpg, .jpeg, .png"/>-->
                          			</label>
                          		</div>
                         </button>

                          

                          </td>
                      

                          <script type="text/javascript">
                            function ask(){
                              var respuesta = confirm("Desea eliminar el producto ?")
                              return respuesta;
                            }
                          </script>

                <td>

                          		<center><!-- Button trigger modal -->
								<button type="button" action id="updatedata" name="editarbtn" class="btn btn-success editbtn" data-toggle="modal" data-target="#modeditar">
  							Editar
								</button></center>

                          		<!--<a href="editar.php?Id=<?php //echo $row['Id']?>" class="btn btn-secondary" data-bs-toggle="tooltip" 
                          		title = "Editar"><i class="fas fa-marker"></i></a>-->

                          		<a href="borrar.php?Id=<?php echo $row['Id']?>" 
                          			class="btn btn-danger" onclick="return ask(<?php echo $row['Id']; ?>)" data-bs-toggle="tooltip" title = "Borrar">
                          			<i class="fas fa-trash-alt"></i></a>
                           	</td>
                          	
                          </tr>

						<?php  } ?>
					</tbody>
				</tbody>
			</table>
		 </div>
		</div>	<!-- aqui acaba el div de la tabla -->	
	</div>
</div>




<!--Modal Editar datos producto-->
<div class="modal fade" id="modeditar" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="editar.php" id="editfrm" 
          method="POST" enctype="multipart/form-data">
               <div class="form-group"> <!-- Editar Id Producto -->
              Id Producto:
              <input type="text" name="IdProd" id="IdProd" class="form-control" autofocus required>
            </div>

              <div class="form-group"> <!-- Editar Cantidad Producto -->
              Cantidad de Producto:
              <input type="text" name="CantProd" id="CantProd" class="form-control" autofocus required>
            </div>

            <div class="form-group"> <!-- Editar Movimiento Producto -->
              Movimiento en Inventario:
              <input type="text" name="MovInvent" id="MovInvent" class="form-control" autofocus required>
            </div>

            <div class="form-group"> <!--Nombre Producto-->
              Nombre:
              <input type="text" name="NombreProd" id="NombreProd" class="form-control"  autofocus required>
            </div> 

            <div class="form-group"> <!--Ediar precio producto-->
              Precio:
              <input type="text" name="PrecioProd" id="PrecioProd" class="form-control"  autofocus required>
            </div> 

            <div class="form-group"> <!--Editar estatus producto-->
              Estatus:
              <input type="text" name="Estatus" id="Estatus" class="form-control"  autofocus required>
            </div>

            <div class="form-group"> <!--Editar salida de producto-->
              Tipo de Salida:
              <input type="text" name="TPS" id="TPS" class="form-control"  autofocus required>
            </div>

 
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button id="editar" name="editarbtn" type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Termina modal editar datos producto-->


<!-- Modal actualizar imagen -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Imagen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  id="actuaImg" action="guardar-imagen.php" method="POST" 
        enctype="multipart/form-data" >
        <input type="file" name="Imagen" class="form-control"  required>
          
          <button id="saveimg2" type="submit" class="btn btn-primary">Guardar Cambio</button>
        </form>
 
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          
      </div>
    </div>
  </div>
</div>

<!--Termina modal-->


   <!-- Guardar por AJAX -->
    <script type="text/javascript">
    $(document).ready(function(){
        $('#save').click(function(){
            var datos=$('#frminv').serialize();
            $.ajax({
                type:"POST",
                url:"guardar.php",
                data:datos
            })
                .done(function(r){
                    if(r==1){
                        swal('Registro con éxito.','sucess');
                        header("Location: index.php");
                    }else{
                        swal('ERROR','Error en registro.','error');
                    }
                });
            });
    });
 </script>

 <script>
 	$('.editbtn').on('click', function(){
 		$tr=$(this).closest('tr');
 		var datos=$tr.children("td").map(function (){
 		 return $(this).text();
 	}); 
 	$('#IdProd').val(datos[0]);
 	$('#CantProd').val(datos[1]);
 	$('#MovInvent').val(datos[2]);
 	$('#NombreProd').val(datos[3]);
 	$('#PrecioProd').val(datos[4]);
 	$('#Estatus').val(datos[5]);
 	$('#TPS').val(datos[6]);
});
 </script>


   <!--Editar datos producto por AJAX -->
    <script type="text/javascript">
    $(document).ready(function(){
        $('#editar').click(function(){
            var datos=$('#editfrm').serialize();
            $.ajax({
                type:"POST",
                url:"editar.php",
                data:datos
            })
                .done(function(r){
                    if(r==1){
                        swal('Actualización con éxito.','sucess');
                    }else{
                        swal('ERROR','Error en actualización.','error');
                    }
                });
            });
    });
 </script>

    <!-- Actualizar imagen por AJAX -->
    <script type="text/javascript">
    $(document).ready(function(){
        $('#saveimg2').click(function(){
            var datos=$('#actuaImg').serialize();
            $.ajax({
                type:"POST",
                url:"guardar-imagen.php",
                data:datos
            })

            });
    });
 </script> 


 <script type="text/javascript">

   $(document).ready(function(){
    var frm = $("#actimg");

    var btnEnviar= $("#saveimg");
    
    var textosubir = btnEnviar.text();
    var textoSubiendo='<i class="fa fa-spinner fa-spin fa-3x fa-fw></i>';
    frm.bind("submit", function(){

var frmData = new FormData($("#actimg")[0]);

     $.ajax
     ({
      url: frm.attr("action"),
      type: frm.attr("method"),
      data: frmData,
      processData: false,
      contentType: false,
      cache: false,
      beforeSend:function(data){
        btnEnviar.html(textoSubiendo);
        btnEnviar.attr("disable",true);
      },
      success: function(data){
        btnEnviar.html(textosubir);
        btnEnviar.attr("disable",false);
      // location.reload();

      } 

     });
return false;
    });
   
 });
 
</script>


<script type="text/javascript" src="scripts.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="crud/assets/jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

<script type="text/javascript">
    $(document).ready( function () {
        $('#datable').DataTable();
    } );
</script>



	<?php include ("includes/footer.php"); ?>
<?php include ("includes/p-footer.html"); ?>