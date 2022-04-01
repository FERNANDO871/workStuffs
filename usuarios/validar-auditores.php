 <?php

 	$verificar = mysqli_query($con, "SELECT * FROM cliente where email = '$email'");

 	if (mysqli_num_rows($verificar) > 0) {
 		echo '
 		<script>
 			alert("Este usuario ya esta registrado, intenta con otro diferente");
 			windoe.location = "login-register.html";
 		</script>
 		';
 		exit();
 	} else {
 		# code...
 	}
 	