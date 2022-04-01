
<!DOCTYPE html>
<html>
<head>
	<title>Inventario</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



	<!--Libreria Sweet Alert-->
	<script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script > 

	<!-- Libreria CDN Datatables -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

	<style type="text/css">
			.zoom{
				width: 80px;
				height: auto;
				transition: transform ease-in-out 0.5s;	
				cursor: pointer;	
			}
			.zoom:hover{
				transform: scale(3.0);
			}
		</style>
</head>

<body>

<!-- Modal Agregar Datos Producto-->
					<!-- Modal-header -->
<div class="modal fade" id="inventarioModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar datos del producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      					<!-- Modal-Body -->
    <form action="guardar.php" id="frmguardar" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
    
  <fieldset>
    <legend></legend>
    <div class="mb-3">
      <label for="TextInput" class="form-label">Id Producto</label>
      <input type="text" id="IdProd" name="IdProd" class="form-control" placeholder="# Identificador" required>
    </div>

     <div class="mb-3">
      <label for="TextInput" class="form-label">Cantidad Producto</label>
      <input type="text" id="CantProd" name="CantProd" class="form-control" placeholder="Cantidad" required>
    </div>

    <div class="mb-3">
      <label for="TextInput" class="form-label">Movimiento en Inventario</label>
      <input type="text" id="MovInvent" name="MovInvent" class="form-control" placeholder="Movimiento" required>
    </div>

     <div class="mb-3">
      <label for="TextInput" class="form-label">Nobre de Producto</label>
      <input type="text" id="NombreProd" name="NombreProd" class="form-control" placeholder="Nombre" required>
    </div>

     <div class="mb-3">
      <label for="TextInput" class="form-label">Precio</label>
      <input type="text" id="PrecioProd" name="PrecioProd" class="form-control" placeholder="Precio" required>
    </div>

    <div class="mb-3">
      <label for="Select" class="form-label">Estatus</label>
      <select id="Estatus" name="Estatus" class="form-select">
        <option>Elegir</option>
        <option value="Disponible">Disponible</option>
        <option value="No dispoible">No disponible</option>
      </select>
    </div>

     <div class="mb-3">
      <label for="TextInput" class="form-label">Tipo de Salida</label>
      <input type="text" id="TPS" name="TPS" class="form-control" placeholder="Tipo de SAlida" required>
    </div>

       <div class="mb-3">
      <label for="TextInput" class="form-label">Imagen</label>
      <input type="file" id="Imagen" name="Imagen" class="form-control" required>
    </div>

    <!--<div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
        <label class="form-check-label" for="disabledFieldsetCheck">
          Can't check this
        </label>
      </div>
    </div>-->
  </fieldset>
      </div>
      			<!-- Modal-Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" id="savedata" name="savedata" class="btn btn-primary">Guardar Producto</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- Boton abrir modal agregar producto -->
	<div class="container">
		<div class="jumbotron">
			<div class="card">
				<h2>Inventario</h2>
			</div>
			<div class="card">
				<div class="card-body">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary" 
						data-bs-toggle="modal" data-bs-target="#inventarioModal">
  						Agregar Producto
						</button>
				</div>
			</div>
			<div class="card">
				<div class="card-body">


						<?php 
					$conexion = mysqli_connect("localhost", "root", "");
					$db = mysqli_select_db($conexion, 'tienda');

					$query = "SELECT * FROM inventario";
					$query_run = mysqli_query($conexion, $query);
					?>

				<table class="table table-hover">
							  <thead>
							    <tr>
							      <th scope="col">Id Producto</th>
							      <th scope="col">Cantidad</th>
							      <th scope="col">Movimiento Inventario</th>
							      <th scope="col">Nombre</th>
							      <th scope="col">Precio</th>
							      <th scope="col">Estatus</th>
							      <th scope="col">TPS</th>
							      <th scope="col">Imagen</th>
							      <th scope="col">Accion</th>
							    </tr>
							  </thead>

							  <?php
					if ($query_run) 
					{
					foreach ($query_run as $row)
					 {
					 ?>

							  <tbody>
							    <tr>
							      <td><?php echo $row['IdProd']; ?></td>
							      <td><?php echo $row['CantProd']; ?></td>
							      <td><?php echo $row['MovInvent']; ?></td>
							      <td><?php echo $row['NombreProd']; ?></td>
							      <td><?php echo $row['PrecioProd']; ?></td>
							      <td><?php echo $row['Estatus']; ?></td>
							      <td><?php echo $row['TPS']; ?></td>
							      <td>

							 				<style type="text/css">
														.image-upload img
														{
   															 width: 80px;
    														cursor: pointer;
														}
												</style>
						<button type="button" id="btnmodal" class="btn" data-toggle="modal" data-target="#imagenModal" > 
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
                          			


							      	<!--<?php //echo $row['Imagen']; ?>-->
							      		
							      	</td>
							      <td>

							      	<button type="button" class="btn btn-success editbtn" data-toggle="modal"data-target="#editarModal">Editar</button>
							      </br></br>
							      	<a  href="borrar_p.php?id=<?php echo $row['Id']?>" 
							      		class="btn btn-danger" 
							      	onclick="preguntar(<?php echo $row['Id']; ?>)"> 
							      	<button type="button" class="btn btn-danger editbtn" data-toggle="modal"data-target="#">Eliminar</button>
							      </a>
							      </td>

							    </tr>
					
							  </tbody>

							  	<?php
					 			}
							 } 
								?>

							</table>

				</div>
			</div>
		</div>
	</div>

	 <!-- <script>
					$(document).ready(function () {
						$('.editbtn').on('click', function(){
							$(#editarModal).modal('show');
						});
					});
	            </script> -->



	<!-- Modal Editar Datos Producto-->
					<!-- Modal-header -->
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar datos del producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      					<!-- Modal-Body -->
    <form action="editar.php" id="editfrm" name="editfrm" method="POST" 
    enctype="multipart/form-data">
      <div class="modal-body">
    
  <fieldset>
    <legend></legend>
    <div class="mb-3">
      <label for="TextInput" class="form-label">Id Producto</label>
      <input type="text" id="IdProd" name="IdProd" class="form-control" placeholder="# Identificador" required>
    </div>

     <div class="mb-3">
      <label for="TextInput" class="form-label">Cantidad Producto</label>
      <input type="text" id="CantProd" name="CantProd" class="form-control" placeholder="Cantidad" required>
    </div>

    <div class="mb-3">
      <label for="TextInput" class="form-label">Movimiento en Inventario</label>
      <input type="text" id="MovInvent" name="MovInvent" class="form-control" placeholder="Movimiento" required>
    </div>

     <div class="mb-3">
      <label for="TextInput" class="form-label">Nombre de Producto</label>
      <input type="text" id="NombreProd" name="NombreProd" class="form-control" placeholder="Nombre" required>
    </div>

     <div class="mb-3">
      <label for="TextInput" class="form-label">Precio</label>
      <input type="text" id="PrecioProd" name="PrecioProd" class="form-control" placeholder="Precio" required>
    </div>

    <div class="mb-3">
      <label for="Select" class="form-label">Estatus</label>
      <select id="Estatus" name="Estatus" class="form-select">
        <option>Elegir</option>
        <option value="Disponible">Disponible</option>
        <option value="No dispoible">No disponible</option>
      </select>
    </div>

     <div class="mb-3">
      <label for="TextInput" class="form-label">Tipo de Salida</label>
      <input type="text" id="TPS" name="TPS" class="form-control" placeholder="Tipo de SAlida" required>
    </div>


    <!--<div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
        <label class="form-check-label" for="disabledFieldsetCheck">
          Can't check this
        </label>
      </div>
    </div>-->
  </fieldset>
      </div>
      			<!-- Modal-Footer -->
      <div class="modal-footer">
       	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

        <button type="submit" id="updatedata" name="updatedata" class="btn btn-primary">Guardar Cambios</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--Termina Modal Editar Datos Producto-->

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</script>

</body>
</html>



<!-- Modal actualizar imagen -->
<div class="modal fade" id="imagenModal" tabindex="-1" role="dialog" 
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
       	<input type="file" name="Imagen" class="form-control">
 
      </div>
      <div class="modal-footer">
      	<form action="guardar-imagen.php?Id=<?php echo $row['Id'];?>" method="POST" >
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        	<button type="submit"  class="btn btn-primary">Guardar Imagen</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Termina modal-->

<script type="text/javascript" src="scripts.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="crud/assets/jquery/jquery-3.3.1.min.js"></script>


   <!--Insertar datos producto por AJAX -->
    <script type="text/javascript">
    $(document).ready(function(){
        $('#savedata').click(function(){
            var datos=$('#frmguardar').serialize();
            $.ajax({
                type:"POST",
                url:"guardar.php",
                data:datos
            })
                .done(function(r){
                    if(r==1){
                        swal('Registro con exito.','sucess');
                    }else{
                        swal('Error en registro.','Verficar datos.','error');
                    }
                });
            });
    });
 </script>


<!--Editar datos de producto por AJAX -->
  <script type="text/javascript">
    $(document).ready(function(){
        $('#updatedata').click(function(){
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

<script >
	
</script>
 

  <script>
  $(document).ready(function(){
 	$('.editbtn').on('click', function(){
 		$('#editarModal').modal('show');
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