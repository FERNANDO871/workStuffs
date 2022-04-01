
<?php
//Recibimos las dos variables
//if(isset($_POST["login_btn"])) {

include 'conexion.php';

	$email=$_POST["email"];
	$password=$_POST["txtpassword"];


	
//Chequeo de la conexión.
	if (mysqli_connect_errno()) {
	echo "Fallo en la conexion:".mysqli_connect_errno();
	exit();
	}

	if (!empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$email_valid = true;
	} else {
		$email_valid = false;
		$errors['email'] = "El correo no es valido";
	}

	if(!empty($password)) {
		$password_valid = true;
	}else{
		$password_valid = false;
		$errors['password'] = 'Contraseña Vacia ';
	}

	$consulta = "SELECT *  FROM cliente WHERE email = '$email' AND 
	pass = '$password'";
 	$resultado = mysqli_query($data, $consulta);

 	$filas = mysqli_fetch_array($resultado);

 /*-	if($filas['contar'] > 0){
 		$filas = true;
 	}else{
 		header("location: login-register.php");
	 	swal("ERROR","Usuario No Registrado.","error");
 	 */
	 	
 	
 if (!$filas['num']) {
	 	$r=0;
	 	echo 0;
 	}
else{
	

$generaruser = "SELECT *  FROM cliente WHERE email = '$email' AND 
	pass = '$password'";
 	$us = mysqli_query($data, $generaruser);

 	$mostrar_user = mysqli_fetch_array($us);

session_start();

$_SESSION['tipo'] =  $mostrar_user[1];
$_SESSION['Nombre'] =  $mostrar_user[2];
$_SESSION['Apellido1'] =  $mostrar_user[3];
$_SESSION['Apellido2'] =  $mostrar_user[7];
$_SESSION['id'] =  $mostrar_user[0];

$r=1;
	echo 1;

}
 	
 
 	
//}


return $r;
//session_destroy();
?>

