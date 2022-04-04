<?php

use Stripe\Token;

require '../conexion.php';


if(isset($_GET['token'])){

    $query = 'SELECT tokenPassword FROM cliente where tokenPassword = "'.$_GET['token'].'"';
    $consulta = mysqli_query($data,$query);
    $token = mysqli_fetch_array($consulta);
    // echo $token;

}else{
    $Error='token';
}



if (isset($_POST['password']) && isset($_POST['password']) ){
// echo $_GET['token'];
// echo '<br>';
    if($_POST['password']!='' && $_POST['password1']!='' ){
        echo 'adentro';
        echo '<br>';
        if($_POST['password'] == $_POST['password1']){
            $query ='UPDATE cliente SET pass = "'.$_POST['password'].'" WHERE tokenPassword="'. $_GET['token']. '"';
            mysqli_query($data,$query);
            $query ='UPDATE cliente SET tokenPassword = null WHERE tokenPassword="'. $_GET['token']. '"';
            mysqli_query($data,$query);
            header('location:http://localhost/tiendaweb/login-register.php ');
            // echo $query;
            // echo '<br>';
            // echo 'Password update';
        }else{$Error = 'math';}
        
    }
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website with a contact Form 01</title>
    <link rel="stylesheet" href="main.css">
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    
    <div class="content">

        <h1 class="logo">Contact <span>Us</span></h1>

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Reset password <?php echo $_GET['email']?></h3>
                

            <?PHP if($token != null) { ?>
                <form  method="POST">
                    <p>
                        <label>type password</label>
                        <input type="password" name="password">
                    </p>
                    <p>
                        <label>please type password agian</label>
                        <input type="password" name="password1">
                    </p>
                    <p>
                    <p class="block">
                        <button type="submit" >Send</button>
                    </p>
                </form>
             <?PHP }else{ ?>
             <?PHP echo $Error; ?>

                <h1 class="text-warning font-italic">token does not exist</h1>

             <?PHP } ?> 
            </div>
            <div class="contact-info">
                <h4>More Info</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> descartes 466-a, villa universidad</li>
                    <li><i class="fas fa-phone"></i> (111) 111 111 111</li>
                    <li><i class="fas fa-envelope-open-text"></i> ingenieria@ozonoterapiamexico.com</li>
                </ul>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero provident ipsam necessitatibus repellendus?</p>
                <p>Company.com</p>
            </div>
        </div>

    </div>
</body>
</html>
