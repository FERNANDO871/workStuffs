 <script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script> 
 <?php

 	include("db.php");
 	$verificar = mysqli_query($con, "SELECT * FROM inventario where IdProd = '$IdProd'");

 	if (mysqli_num_rows($verificar) > 0) {
 		echo '
 		<script>
 			swal("Este producto ya esta registrado, intenta con otro diferente.", "error");
 			header("Location: index.php");
 		</script>
 		';
 		exit();
 	} else {
 		header("Location: index.php");
 	}
 	