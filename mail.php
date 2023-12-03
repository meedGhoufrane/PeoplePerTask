<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer();

    $mail->isSMTP();                                         
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'tdevintw@gmail.com';                    
    $mail->Password   = 'aixc ruqj uvbo inla';                               
    $mail->SMTPSecure = 'ssl';            
    $mail->Port       = 465;     

    $mail->isHTML(true);     
?>





