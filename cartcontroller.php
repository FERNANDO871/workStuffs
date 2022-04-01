<?php 

/**
 * 
 */
class CarritoController{

	public function index(){
		echo "Controlador de Carrito, Accion index";
	}

	public function add(){
		
		if (isset($_GET['Id'])) {
			$producto_id = $_GET['id'];
		}else{
			header('Location: shop-fullwidth.php');
		}

		if (isset($_SESSION['carrito'])) {
			
		}else{
			$_SESSION['carrito'];
		}
	}
	



}

 ?>