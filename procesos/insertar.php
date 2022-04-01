<?php 

	//Conexion BD 
require_once("conexion.php");
require '../views/payment/vendor/autoload.php';



	//Recoger valores de formulario registro 
	$name=isset($_POST['name']) ? mysqli_real_escape_string($data, $_POST['name']) : false;
	$lastname=isset($_POST['lastname']) ? mysqli_real_escape_string($data, $_POST['lastname']) : false;
	$email=isset($_POST['email2']) ? mysqli_real_escape_string($data, $_POST['email2']) : false;
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


	$stripe = new \Stripe\StripeClient(
		'sk_test_51Kb6O2Cuu9QiirsWh0AyehvPkwCtDF6VsRUioKEe4l3KmPrBGDucaWIzlti4SuGmlCGMJOrOeIBhFQl86Mz9MYSR00S7t4OSVz'
	  );
	$Customer =  $stripe->customers->create([
		"email"=> $email,
		'name'=> $name.' '.$lastname,
	  ]);
	

	$id_stripe = $Customer['id'];

	

	//Cifrar contraseña
	//$password = password_hash($password, PASSWORD_BCRYPT, ['cost' =>4]);

$guardar_usuario = false;

if (count($errores) == 0) {
	$guardar_usuario = true;


$sql="INSERT INTO cliente (num, nombre, lastname, email, pass, estatus,id_stripe) 
	VALUES ('1','$name','$lastname','$email','$password', 'Activo','$id_stripe')";

	//$sql="INSERT INTO cliente (num, nombre, lastname, email, pass, estatus) 
	//VALUES ('1','julianRZ','Ruiz Adrian','ingenieria@ozonoterapiamexico.com','kajota', 'Activo')";

$r=1;
echo 1;
	$RESULT =  mysqli_query($data, $sql);

	}else{
		$_SESSION['errores'] = $errores;
$r=0;	
echo 0;
		//header("location: login-register.php");
	}


	/*$r=1;
	echo $r; */	
	//}
return $r;
 ?>



