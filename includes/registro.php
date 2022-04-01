<?php
if(isset($_POST)){
	//Conexion a la base de datos.
	require_once 'conexion.php';
	//Inciar sesion
	if(!isset($_SESION)) {
		session_start();
	}

	//Recoger datos
	$name = isset($_POST['name']) ? mysqli_real_escape_string($db,$_POST['name']) : false;
	$lastname = isset($_POST['lastname']) ? mysqli_real_escape_string($db,$_POST['lastname']) : false;
	$email = isset($_POST['email']) ? mysqli_real_escape_string($db,$_POST['email']) : false;
	$recovery = isset($_POST['recovery']) ? mysqli_real_escape_string($db, $_POST['recovery']) : false;
	$password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

	//Array de errores
	$errores = array();

	//validar los datos antes de guardarlos en la base de datos.
	//Validar campo nombre
	if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)){
		$name_valid = true;
	}else{
		$name_valid = false;
		$errors['name'] = "El nombre no es valido";
	}
	//Validar campo apellido
	if(!empty($lastname) && !is_numeric($lastname) && !preg_match("/[0-9]/", $lastname)){
		$lastname_valid = true;
	}else{
		$lastname_valid = false;
		$errors['lastname'] = "Los apellidos no son validos";
	}
	//Validar campo correo
	if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
		$email_valid = true;
	} else {
		$email_valid = false;
		$errors['email'] = "El correo no es valido";
	}
	//Validar campo de recuperacion 
	if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
		$email_valid = true;
	} else {
		$email_valid = false;
		$errors['recovery'] = "El correo no es valido";
	}
	//Validar campo contraseña
	if(!empty($password)) {
		$password_valid = true;
	}else{
		$password_valid = false;
		$errors['password'] = "La contraseña esta vacia";
	}

	$save_user = false;
	if(count($errores) == 0){
		$save_user = true;

		//Cifrar contraseña
		$password_save = password_hash($password, PASSWORD_BCRYPT, ['cost' =>4]);

		//Insertar usuario en la base de datos
		$sql = "INSERT INTO cliente VALUES(null, '$name','$lastname','$email','$recovery','$password_save');";
		$save = mysqli_query($db, $sql);

		/*if($save)
		{
			$_SESSION['completado'] = "El registro se ha completado con exito";
		}
		else{
			$_SESION['errores']['general'] = "Fallo al guardar el usuario !!";
		}*/

	}else{
		$_SESSION['errores'] = $errores;
	}
		
}

header('Location: index-2.php');
