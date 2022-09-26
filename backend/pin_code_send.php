<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include_once('pin_code_generator.php');
include_once('forgot_password.php');

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$pin_code = generatepin_code();
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'peagahvieira2003@gmail.com';           //SMTP username
    $mail->Password   = 'gkhrdcaafggwoytf';                     //SMTP password
    $mail->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('peagahvieira2003@gmail.com', 'Student Management');
    $mail->addAddress("$email", "$username");  //Add a recipient
    $mail->addAddress("$email");              //Name is optional
    $mail->addReplyTo('no-reply@accounts.google.com');

    //Content
    $mail->isHTML(true);                                        //Set email format to HTML
    $mail->Subject = 'Student Management Forgot Password';
    $mail->Body    = "Here are a PIN CODE to reset your password <b>$pin_code</b>";

    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>