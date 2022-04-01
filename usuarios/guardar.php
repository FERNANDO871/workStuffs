<?php
include ("includes/header.php");
include ("db.php");
if (isset($_POST['save'])){
   $num = $_POST['num'];
   $name = $_POST['name'];
   $lastname = $_POST['lastname'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $confirm = $_POST['confirm'];
   $estatus = $_POST['estatus'];


      if(!empty($num) || is_numeric($num) || preg_match("/[0-9]/", $num)) {
      $num_valid = true;
   }else{
      $num_valid = false;
      $errors['num'] = "El numero no es valido";
   }
   //Validar campo apellido
   if(!empty($lastname) || !is_numeric($lastname) || !preg_match("/[0-9]/", $lastname)) {
      $lastname_valid = true;
   }else{
   
      $lastname_valid = false;
      $errors['lastname'] = "Los apellidos no son validos";
   }
   //Validar campo correo
   if (!empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_valid = true;
   } else {
      $email_valid = false;
      $errors['email'] = "El correo no es valido";
   }
   //Validar campo recuperacion
   if(!empty($password)) {
      $password_valid = true;
   } else {
      $password_valid = false;
      $errors['password'] = "La contraseña no es valida";
   }
   //Validar campo contraseña
   if(!empty($confirm)) {
      $confirm_valid = true;
   }else{
      $confirm_valid = false;
      $errors['confirm'] = 'Contraseña no Valida ';
   }

   // echo $title;
   // echo"</br>";
   // echo $descripcion;
   $query = "INSERT INTO cliente (num, name, lastname, email, password, confirm, estatus) VALUES ('$num', '$name', '$lastname', '$email', '$password', '$confirm', '$estatus')"; // esta linea para insertar datos
   $result = mysqli_query($conn, $query); //proceso para mandar los datos a la base de dato
   if (!$result) {
   	   die("No se guardo correctamente");
   }
   
   $_SESSION['message'] = 'Usuario Guardado Correctamente'; //alerta de bootstrap
   $_SESSION['message_type'] = 'success'; //success es el color (verde)   
   header("Location: index.php"); //redirecciona a la pagina principal
}
mysqli_free_result($result);
mysqli_close($conn);
?>