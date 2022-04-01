<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'tiendaozonium';

$data = mysqli_connect($server, $username, $password, $db);

mysqli_query($data, "SET NAMES 'UTF8'");

//Iniciar la sesion

/*if (!isset($_SESSION)) {
	session_start();
} */