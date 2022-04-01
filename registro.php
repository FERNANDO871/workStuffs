<?php
//Conexion BD 
$con = mysqli_connect("localhost", "root", "", "tienda");
//Chequeo de la conexión.
if (mysqli_connect_errno()) {
	echo "Fallo en la conexion:".mysqli_connect_errno();
	exit();
}


/*	$name = $_POST["name"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$recovery = $_POST["recovery"];
    $password = $_POST["password"]; */

//Login
//if(isset($_POST["register_btn"])) {
	
	//Inciar sesion

	//Recoger datos
	$name = isset($_POST['name']) ? $_POST['name'] : false;
	$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : false;
	$email = isset($_POST['email']) ? $_POST['email'] : false;
	$recovery = isset($_POST['recovery']) ? $_POST['recovery'] : false;
	$password = isset($_POST['password']) ? $_POST['password'] : false; 
//if($_SERVER['REQUEST_METHOD'] == 'POST'){

	//Array de errores
	//$errors = array();

	//validar los datos antes de guardarlos en la base de datos.

	//Validar campo nombre
	if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)) {
		$name_valid = true;
	}else{
		$name_valid = false;
		$errors['name'] = "El nombre no es valido";
	}
	//Validar campo apellido
	if(!empty($lastname) && !is_numeric($lastname) && !preg_match("/[0-9]/", $lastname)) {
		$lastname_valid = true;
	}else{
		$lastname_valid = false;
		$errors['lastname'] = "Los apellidos no son validos";
	}
	//Validar campo correo
	if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$email_valid = true;
	} else {
		$email_valid = false;
		$errors['email'] = "El correo no es valido";
	}
	//Validar campo recuperacion
	if(!empty($recovery) && filter_var($recovery, FILTER_VALIDATE_EMAIL)) {
		$recovery_valid = true;
	} else {
		$recovery_valid = false;
		$errors['recovery'] = "El correo de recuperación no es valido";
	}
	//Validar campo contraseña
	if(!empty($password)) {
		$password_valida = true;
	}else{
		$password_valida = false;
		$errors['password'] = "La contraseña esta vacia";
	}
	

	

		//Cifrar contraseña
		//$passwordsave = password_hash($password, PASSWORD_BCRYPT, ['cost' =>4]);

		//Insertar usuario en la base de datos

		$sql =  "INSERT INTO cliente (id,name, lastname, email, recovery, password) 
		VALUES (null,'$name','$lastname','$email','$recovery','$password')";

		if(mysqli_query($con, $sql)) {			
			$return=mysqli_query($con,$sql); "<script>alert('Usuario $name $lastname registrado con exito.'); 
			window.location= 'login-register.html'</script>"; 
		}else{
			echo "Error:" .$sql."<br>".mysqli_error($con);
			echo "<script> alert('Usuario no registrado con exito.')</script>"; 
		}	
		$return=mysqli_query($con,$sql);
		


//Cerrado de sesion
mysqli_close($con);
?>
//Redireccionamiento
//header('Location: login-register.html');