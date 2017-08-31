<?php
require('fpdf.php');
@session_start();
if ($_GET["payment"]) {
    $_SESSION["payment"]=$_GET["payment"];

	class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('../img/logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Details',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
foreach ($_SESSION as $key => $value) {
	$pdf->Cell(0,10,$key." : ".$value,0,1);
}

include('mailer.php');
$pdf->Output('S');


    //Attachments
    $mail->addAttachment($doc, 'doc.pdf', 'base64', 'application/pdf');         // Add attachments
    //$mail->addAttachment('image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();


} else {
    echo"Cheating. Huh!";
}