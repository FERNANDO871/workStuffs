<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'tiendaozonium';
//$port = '33065';


$data = mysqli_connect($server, $username, $password, $db/*, $port*/);

mysqli_query($data, "SET NAMES 'UTF8'");


