<?php session_start();


$ipermiso=$_SESSION['tipo'];

if (isset($_SESSION['id'])) {
if ($ipermiso ==1)
{
header('Location: index.php');

}
if ($ipermiso ==2)
{
header('Location: Pedidos.php');
}

if ($ipermiso ==3)
{
header('Location: Controlusuario.php');
}
if ($ipermiso ==4)
{
header('Location: Pedidos.php');
}
if ($ipermiso ==5)
{
header('Location: Pedidos.php');
}
if ($ipermiso ==6)
{
header('Location: Pedidos.php');
}
}
else{
	header('Location: login-register.php');
}
	
?>