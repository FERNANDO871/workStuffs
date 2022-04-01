<?php
include "../conexion.php";


if(isset($_GET['Id'])){
	$IdP =$_GET['Id'];
	$query = "SELECT * FROM inventario WHERE Id = $IdP";
    $r_edit = mysqli_query($data,$query);
    if(mysqli_num_rows($r_edit) == 1){
     $row = mysqli_fetch_array($r_edit);
     $IdProd = $row['IdProd'];
     $CantProd = $row['CantProd'];
     $MovInvent = $row['MovInvent'];
     $NombreProd = $row['NombreProd'];
     $PrecioProd = $row ['PrecioProd'];
     $Estatus = $row ['Estatus'];
     $TPS = $row['TPS'];
	}
}
if(isset($_POST['editarbtn'])){
$IdP = $_GET['Id'];
$IdProd = $_POST['IdProd'];
$CantProd = $_POST['CantProd'];
$MovInvent = $_POST['MovInvent'];
$NombreProd = $_POST['NombreProd'];
$PrecioProd = $_POST['PrecioProd'];
$Estatus = $_POST['Estatus']; //5
$TPS = $_POST['TPS'];

$qedit = "UPDATE inventario set IdProd = '$IdProd', CantProd = '$CantProd', 
MovInvent = '$MovInvent', NombreProd = '$NombreProd', PrecioProd = '$PrecioProd', 
Estatus = '$Estatus', TPS = '$TPS' WHERE Id ='$IdP'";
  mysqli_query($data,$qedit);

  $_SESSION['message'] = 'Producto Actualizado';
  $_SESSION['message_type'] = 'success';
  header("Location:index.php");
}
if(isset($_POST['cancelar'])){
header("Location:index.php");
} ?>  


<?php // include("includes/header.php") ?>
<div class="container p-4">
	<div class="row">
		<div class="col-md-4 mx-auto">
			<div class="card card-body">
				<form action="editar.php?id=<?php // echo $_GET['id'];?>" method="POST">
					<div class="form-group">
						Numero:
						<input type="number" name="num" value="<?php echo $num; ?>" class="form-control"> 
					</div>
					<div class="form-group">
						Tipo de Usuario:
						<input type="text" name="type" value="<?php echo $type; ?>" class="form-control">
					</div>
					<div class="form-group">
						Nombre:
						<input type="text" name="name" value="<?php echo $name; ?>" class="form-control">
					</div>
					<div class="form-group">
						Apellidos:
						<input type="text" name="lastname" value="<?php echo $lastname; ?>" class="form-control">
					</div>
					<div class="form-group">
						Correo:
						<input type="text" name="email" value="<?php echo $email; ?>" class="form-control">
						
					</div>
					<div class="form-group">
						Correo de Recuperación:
						<input type="text" name="recovery" value="<?php echo $recovery; ?>" class="form-control">
                     
						
					</div>
					<div class="form-group">
						Contraseña: 
						<input type="text" name="password" value="<?php echo $password; ?>" class="form-control">
                       
						
					</div>
                    <div class="form-group">
                    	
                    Estatus:
						<input type="text" name="estatus" value="<?php echo $estatus; ?>" class="form-control">
					</div>
					<button class="btn btn-success" name="update">Actualizar</button>
					<button class="btn btn-danger" name="cancelar">Cancelar</button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include("includes/footer.php") ?>
