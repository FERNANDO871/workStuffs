<?php 
session_start();
if (isset($_SESSION['id'])) {

header('Location: cart.php');
}
else{
	header('Location: login-register.php');
}
	
?>