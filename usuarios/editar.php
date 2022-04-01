<?php
include "../conexion.php";

if(isset($_GET['id'])){
	$id_aud =$_GET['id'];
	$query = "SELECT * FROM cliente WHERE id = $id_aud";
    $r_edit = mysqli_query($data,$query);
    if(mysqli_num_rows($r_edit) == 1){
     $row = mysqli_fetch_array($r_edit);
     $num = $row['num'];
     $name = $row['name'];
     $lastname = $row['lastname'];
     $email = $row ['email'];
     $password = $row ['password'];
     $confirm = $row['confirm'];
     $estatus = $row['estatus'];
    }
}
if(isset($_POST['update'])){
$id = $_GET['id'];
$num = $_POST['num'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password']; //5
$confirm = $_POST['confirm'];
$estatus = $_POST['estatus'];
$qedit = "UPDATE cliente set num = '$num', name = '$name', lastname = 
'$lastname', email = '$email', password = '$password', confirm = '$confirm', 
estatus = '$estatus' WHERE id='$id'";
  mysqli_query($data,$qedit);

  $_SESSION['message'] = 'Usuario Actualizado';
  $_SESSION['message_type'] = 'success';
  header("Location:index.php");
}
if(isset($_POST['cancelar'])){
 $_SESSION['message'] = 'Acción Cancelada';
 $_SESSION['message_type'] = 'warning';
header("Location:index.php");
}

?>
<?php include("includes/header.php") ?>
<div class="container p-4">
	<div class="row">
		<div class="col-md-4 mx-auto">
			<div class="card card-body">
				<form action="editar.php?id=<?php echo $_GET['id'];?>" method="POST">
					<div class="form-group">
						Tipo de Usuario:
						<input type="text" name="num" value="<?php echo $num; ?>" class="form-control"> <!--1-->
					</div>
					<div class="form-group">
						Nombre:
						<input type="text" name="name" value="<?php echo $name; ?>" class="form-control"><!--3-->
					</div>
					<div class="form-group">
						Apellidos:
						<input type="text" name="lastname" value="<?php echo $lastname; ?>" class="form-control"><!--4-->
					</div>
					<div class="form-group">
						Correo:
						<input type="text" name="email" value="<?php echo $email; ?>" class="form-control">
						<!--<textarea name="txt_email" type="email" rows="2" class="form-control"><?php //echo $email ?>--><!--</textarea>-->
					</div>
					<div class="form-group">
						Correo de Recuperación:
						<input type="text" name="password" value="<?php echo $password; ?>" class="form-control">
                        <!--<textarea name="txt_tel" rows="2" class="form-control"><?php //echo $tel ?></textarea>-->
						<!--6-->
					</div>
					<div class="form-group">
						Contraseña: 
						<input type="text" name="confirm" value="<?php echo $confirm; ?>" class="form-control">

						<!--7-->
					</div>

                    <div class="form-group">	
                    Estatus:
                    <select id="estatus" name="estatus"  value="<?php echo $estatus; ?>"  
                    	class="form-control">
						<option value="Activo">Activo</option>
						<option value="Inactivo">Inactivo</option>
					</select>
						<!--<input type="text" name="estatus" value="<?php // echo $estatus; ?>" class="form-control"> -->
					</div>

					<button class="btn btn-success" action="editar.php" name="update" id="update">Actualizar</button>
					<button class="btn btn-danger" name="cancelar">Cancelar</button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include("includes/footer.php") ?>
