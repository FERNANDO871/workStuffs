<?php 

session_start();
	//Conexion BD 
require_once("conexion.php");



$zonahoraria=date_default_timezone_set('America/Mazatlan');

$fechaActual =date("Y-m-d");
$horainsert =date("H:i:s");


	//Recoger valores de formulario registro 
	$idusuario = $_SESSION['id'];
	$namecupon=$_POST['txtcupon'];
	$nameinf=$_POST['idinfluencer'];
	$des=$_POST['txtdes'];
		
	//Cifrar contraseña
	//$password = password_hash($password, PASSWORD_BCRYPT, ['cost' =>4]);

$sql1="SELECT id  FROM cupones where idIn = $nameinf and Estatus = 1";
$RESULT1 =  mysqli_query($data, $sql1);


$row =mysqli_fetch_array($RESULT1);


if (!$row['id'])
 {	

$sql2="SELECT id  FROM cupones where nombre = '$namecupon'";
$RESULT2 =  mysqli_query($data, $sql2);

$row2 =mysqli_fetch_array($RESULT2);



if (!$row2['id'])
 {	
$sql="INSERT INTO cupones (idin, Fecha, Estatus, nombre, descuento, idU) VALUES (
$nameinf,
'$fechaActual',
1,
'$namecupon',
$des,
$idusuario
)";
$RESULT =  mysqli_query($data, $sql);


$r=1;
echo 1;
	
}
else
{

$r=2;	
echo 2;

}

	}
	else{

$r=0;	
echo 0;
		//header("location: login-register.php");
	}


	/*$r=1;
	echo $r; */	
	//}
return $r;
 ?>



