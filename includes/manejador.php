<?php

 
//Recibimos las dos variables
$email=$_POST["email"];
$password=$_POST["password"];

//Validacion de correo y contraseña 
$administrador = mysqli_query("SELECT * FROM administrador WHERE email = '$email' AND password = '$password'");
$influencer = mysqli_query("SELECT * FROM influencer WHERE email = '$email' AND password = '$password'");
$cliente = mysqli_query("SELECT * FROM cliente WHERE email = '$email' AND password = '$password'");

//Comprobacion de entrada del administrador.
if (mysqli_num_rows($administrador) > 0)  {
	session_start();
	$_SESSION['administrador']="$administrador";
	header("Location: index.html");
	exit();
}
//Comprobacion de entrada de influencer.
else if (mysqli_num_rows($influencer) > 0) {
	session_start();
	$_SESSION['influencer']="$influencer";
	header("Location: index.html");
	exit();
}
//Comprobacion de entrada de cliente
else if (mysqli_num_rows($cliente) > 0) {
	session_start();
	$_SESSION['cliente']="$cliente";
	header("Location: index.html");
	exit();
}
else {
$incorrecto = "El usuario y contraseña son incorrectos.";
echo $incorrecto;
}