<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    //$mail->isSMTP();                                     // Set mailer to use SMTP mail.tareknabil.net
    $mail->Host = 'box843.bluehost.com ';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'tareknabil@tareknabil.com';                 // SMTP username
    $mail->Password = 'nofear34';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('tareknabil@tareknabil.net', 'Mailer');
    $mail->addAddress('tareknabil@tareknabil.net', 'Joe User');     // Add a recipient
    $mail->addAddress('tareknabil@tareknabil.net');               // Name is optional
    $mail->addReplyTo('tareknabil@tareknabil.net', 'Information');
    $mail->addCC('tareknabil@tareknabil.net');
    $mail->addBCC('tareknabil@tareknabil.net');

