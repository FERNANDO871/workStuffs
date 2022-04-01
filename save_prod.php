<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 


if(isset($_POST["btn-save"])) {
	//Conexion BD 
//Inicializar sesion

include("conexion.php");
if(!isset($_SESSION['miSesion'])){
	header("location:login-register.php");
}


	//Recoger valores de formulario registro 
	$name=isset($_POST['name']) ? mysqli_real_escape_string($data, $_POST['name']) : false;
	$lastname=isset($_POST['lastname']) ? mysqli_real_escape_string($data, $_POST['lastname']) : false;
	$email=isset($_POST['email']) ? mysqli_real_escape_string($data, $_POST['email']) : false;
	$password=isset($_POST['pass']) ?  mysqli_real_escape_string($data, $_POST['pass']) : false;
	$confirm=isset($_POST['confirm']) ? mysqli_real_escape_string($data, $_POST['confirm']) : false;

	$errores = array();

	//Validar campos
	if (!is_numeric($name) && !preg_match("/[0-9]/", $name)) {
		$name_valid = true;
	}else{
		$name_valid = false;
		$errores['name'] =  'Verificar campo nombre.';
	}

	if (!is_numeric($lastname) && !preg_match("/[0-9]/", $lastname)) {
		$lastname_valid = true;
	}else{
		$lastname_valid = false;
		$errores['lastname'] =  'Verificar campo apellido.';
	}

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$email_valid = true;
	}else{
		$email_valid = false;
	}

	if (strcmp($password, $confirm)===0){
		$password_valid = true;
	}else{
		$password_valid = false;
		$errores['password'] = 'Error campo de contraseña';
	}

	

	//Cifrar contraseña
	//$password = password_hash($password, PASSWORD_BCRYPT, ['cost' =>4]);

$guardar_usuario = false;

if (count($errores) == 0) {
	$guardar_usuario = true;

	$sql="INSERT INTO cliente (num, name, lastname, email, password, confirm, estatus) 
	VALUES ('1','$name','$lastname','$email','$password','$confirm', 'activo')";
echo'<script type="text/javascript">
    	alert("Usuario Registrado.");
   		window.location.href="login-register.php";
    	</script>';
	$RESULT =  mysqli_query($data, $sql);

	}else{
		$_SESSION['errores'] = $errores;
		echo'<script type="text/javascript">
    	alert("Error, Verificar Datos.");
   		window.location.href="login-register.php";
    	</script>';

		//header("location: login-register.php");
	}
}

	/*$r=1;
	echo $r; */	
//session_destroy();
	//}
 ?>


