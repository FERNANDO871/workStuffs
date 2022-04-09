<?php

//Import PHPMailer classes into the global namespace
// //These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
require '../conexion.php';

$error = '';




if(isset($_POST['email'])){
        
        $email = $_POST['email'];
      

        $query1 = 'SELECT email FROM cliente where email="'.$email .'" limit 1';
        $consulta = mysqli_query($data,$query1);
        $emailDB = mysqli_fetch_array($consulta);


        //este usuario esta en la base de datos?--------------------------------------
        if (isset($emailDB[0])){
            // echo 'si hay un usuario con ese email'; 
            $tokenId = uniqid();    

            $mail = new PHPMailer(true);

            try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'ozoniumtest@gmail.com';                     //SMTP username
                    $mail->Password   = 'Sabad0Libre';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                    
                    //Recipients
                    $mail->setFrom('ozoniumtest@gmail.com', 'test');
                    $mail->addAddress($email, '');     //Add a recipient
                    // $mail->addAddress('vegafernando871@gmail.com');               //Name is optional
                    // $mail->addReplyTo('info@example.com', 'Information');
                    // $mail->addCC('cc@example.com');
                    // $mail->addBCC('bcc@example.com');
                    
                    //Attachments
                    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
                    
                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Reset  your password';
                    
                    $mail->Body    = '<html>';
                    $mail->Body    = '<p>please click on de link for get a new password';
                    $mail->Body    .= '<a href="http://localhost/tiendaweb/procesos/emailPHP/resetPassword.php';
                    $mail->Body    .= '?token='. $tokenId;
                    $mail->Body    .= '&email='.$email;
                    $mail->Body    .= '">Reset your password</a>';
                    $mail->Body    .= 'if you do not requeted this email fill free to ignore it';
                    $mail->Body    .= '</html>';
                    
                    
                    
                    
                    $mail->AltBody = 'if you do not see the click pleas contact us by celphone';
                    
                    $mail->send();
                    $query = 'UPDATE cliente SET tokenPassword="'.$tokenId.'" where email="'. $email. '"';
                    mysqli_query($data, $query);
                    echo $error = 'messege send successful';
                } catch (Exception $e) {
                    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
        }else{
            $error = 'a user with this email does not exist';
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css.map">
    <link rel="stylesheet" href="../../css/styles.css">
    <title>Document</title>
</head>
    <body>
    <div class="content">

<h1 class="logo">Reset the <span>Password</span></h1>

<div class="contact-wrapper animated bounceInUp">
    <div class="contact-form colorLetra">
        <h3 class="colorLetra">Type your email</h3>
        <form action="enviarEmail.php" method="POST">
            <p>
                <label class="colorLetra">Email Adress</label>
                <input type="email" name="email" placeholder="email">
            </p>
            <p class="block">
                <button type="submit">Send</button>
            </p>
            <p class="alert"><?PHP echo $error; ?></p>
        </form>
    </div>
    <div class="contact-info">
        <h4 class="colorLetra">More Info</h4>
        <ul>
            <li><i class="fas fa-map-marker-alt colorLetra">Ozonium &#174;</i> </li>
            <li><i class="fas fa-phone colorLetra">(111) 111 111 111</i> </li>
            <li><i class="fas fa-envelope-open-text colorLetra">contact@website.com</i> </li>
        </ul>
        <p class="colorLetra">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero provident ipsam necessitatibus repellendus?</p>
        <p class="colorLetra">Ozonim.com</p>
    </div>
</div>

</div>
    </body>
</html>
