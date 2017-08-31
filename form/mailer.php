<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    //$mail->isSMTP();                                     // Set mailer to use SMTP mail.tareknabil.net
    $mail->Host = ' ';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '';                 // SMTP username
    $mail->Password = '';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('', 'Mailer');
    $mail->addAddress('', 'Joe User');     // Add a recipient
    $mail->addAddress('');               // Name is optional
    $mail->addReplyTo('t', 'Information');
    $mail->addCC('');
    $mail->addBCC('');

