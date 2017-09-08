<?php


  

require '../vendor/autoload.php';
require 'mailer_settings.php';
//Import PHPMailer classes into the  global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer(true);
    //Server settings
    $mail->SMTPDebug = 2;                                   // Enable verbose debug output
    //$mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = HOST;                                     // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                                  // Enable SMTP authentication
    $mail->Username = USERNAME;                             // SMTP username
    $mail->Password = PASSWORD;                             // SMTP password
    $mail->SMTPSecure = SMTPSECURE;                         // Enable TLS encryption, `ssl` also accepted
    $mail->Port = PORT;                                     // TCP port to connect to

    //Recipients
    $mail->setFrom(EMAIL_SENDER, NAME_SENDER);
    $mail->addAddress(EMAIL_RECIPIENT_CONTACTFORM, NAME_RECIPIENT_CONTACTFORM);   // Add a recipient
    $mail->addAddress(EMAIL_RECIPIENT_CONTACTFORM);                     // Name is optional
//    $mail->addReplyTo(EMAIL_REPLYTO, NAME_REPLYTO);
//    $mail->addCC(CC);  
//    $mail->addBCC(BCC);


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New Contact Form';
    $mail->Body= 	'Name : '.$_GET['name'].'</br>'.
    				'Email : '.$_GET['email'].'</br>'.
    				'Subject : '.$_GET['subject'].'</br>'.
    				'Message : '.$_GET['message'].'</br>';
    $mail->AltBody = 'Name : '.$_GET['name'].'---'.
    				'Email : '.$_GET['email'].'---'.
    				'Subject : '.$_GET['subject'].'---'.
    				'Message : '.$_GET['message'].'---';

    $mail->send();
    echo 'Message has been sent';


?>