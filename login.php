<?php

$con = mysqli_connect("localhost", "root", "", "tienda");
//Chequeo de la conexión.
if (mysqli_connect_error()) {
	echo "Fallo en la conexion:".mysqli_connect_error();
	exit();
}

if(isset($_POST["login_btn"])) {

$email = isset($_POST['email']) ? $_POST['email'] : false;
$password = isset($_POST['txtpassword']) ? $_POST['txtpassword'] : false; 


	if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$email_valid = true;
	} else {
		$email_valid = false;
		$errors['email'] = "El correo no es valido";
	}
		//Validar campo contraseña
	if(!empty($password)) {
		$password_valida = true;
	}else{
		$password_valida = false;
		$errors['txtpassword'] = "La contraseña esta vacia";
	}

$sql = "SELECT * FROM cliente WHERE email = '$email'and password = '$password' 
and type = 'Cliente'";
	$return=mysqli_query($con,$sql);

	$true = mysqli_fetch_row($return);
	//Desactivacion de errores Notice.
	error_reporting(0);
	
	if(!$true[0]) {			
			echo "<script> alert('Usuario o Contraseña incorrectos.');
			window.location= 'login-register.html' </script>"; 
			
	}else{
			echo "<script>alert('Acceso de $email con exito.'); 
			window.location= 'index-2.html' </script>"; 
		}	
		
}

//Cerrado de sesion
mysqli_close($con);

//window.location= 'index-2.html'

