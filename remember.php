<?php

include 'conexion.php';

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['txtpassword'];
	$pass = md5($password);
	//check login
	$query = "Select * from cliente where email = '$email' and pssword 0 = '$password'";
	$user = mysqli_query($data, $query);
	$userow = mysqli_num_rows($user);

	if ($userrow > 0) {
		#check
		$remember = $_POST['remember'];
	} else {
		echo "Error:" .$sql."<br>".mysqli_error($con);
			echo "<script> alert('Usuario no registrado con exito.')</script>";
	}
	
}
?>