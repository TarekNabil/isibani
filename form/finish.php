<?php
define('FPDF_FONTPATH','font/');
require 'fpdf.php';
require '../vendor/autoload.php';
require 'mailer_settings.php';
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

@session_start();
if ($_GET["payment"]) {
    $_SESSION["payment"]=$_GET["payment"];
    $file_name = uniqid(date('h-i-s')._).'.pdf';
    
    $one='R500 x 3 months for any number of subjects.';
    $two='R600 x 10 months for 4 or more subjects / R550 for less than 4 subjects. This is payable on/before 3rd of each month';
    $three='2 equal installments (2 x R2700) for more than 4 subjects or (2 x R2475) for less than 4 subjects. 1st installment due on/before 03 March. 2nd on/before 03 July. This option gives you a 10% discount.';
    $four='A once-off payment of R4800 for more than 4 subjects or R4400 for less for less than 4 subjects payable on/before 03 March. This option gives you a 20% discount.';

    class PDF extends FPDF
    {
    // Page header
        function Header()
        {
            // Logo
            $this->Image('../img/logo.png', 10, 6, 30);
            // Arial bold 15
            $this->SetFont('Arial', 'B', 15);
            // Move to the right
            $this->Cell(80);
            // Title
            $this->Cell(52, 10, 'New Student Details', 1, 0, 'C');
            // Line break
            $this->Ln(20);
        }

    // Page footer
        function Footer()
        {
            // Position at 1.5 cm from bottom
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial', 'I', 8);
            // Page number
            $this->Cell(0, 10, 'Page '.$this->PageNo().'/{nb}', 0, 0, 'C');
        }
    }

    // Instanciation of inherited class
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times', '', 12);
    
    $pdf->Cell(0, 10, "Personal Details : ", 0, 1);
    $pdf->Cell(0, 10, "First Name : ".$_SESSION["personal_details_first_name"], 0, 1);
    $pdf->Cell(0, 10, "Surname : ".$_SESSION["personal_details_surname"], 0, 1);
    $pdf->Cell(0, 10, "Date Of Birth : ".$_SESSION["personal_details_date_of_birth"], 0, 1);
    $pdf->Cell(0, 10, "ID Number # : ".$_SESSION["personal_details_id_number"], 0, 1);
    $pdf->Cell(0, 10, "Age : ".$_SESSION["personal_details_age"], 0, 1);
    $pdf->Cell(0, 10, "Gender : ".$_SESSION["personal_details_gender"], 0, 1);

    $pdf->Cell(0, 10, "Previous School : ", 0, 1);
    $pdf->Cell(0, 10, "Last School Attended : ".$_SESSION["Previous_School_School_Name"], 0, 1);
    $pdf->Cell(0, 10, "Year : ".$_SESSION["Previous_School_year"], 0, 1);
    $pdf->Cell(0, 10, "Grade : ".$_SESSION["Previous_School_grade"], 0, 1);
    $pdf->Cell(0, 10, "Province : ".$_SESSION["Previous_School_province"], 0, 1);
    
    $pdf->Cell(0, 10, "PARENT OR GUARDIAN DETAILS : ", 0, 1);
    $pdf->Cell(0, 10, "Surname : ".$_SESSION["parent_or_guardian_surname"], 0, 1);
    $pdf->Cell(0, 10, "First Name (s) : ".$_SESSION["parent_or_guardian_first_name"], 0, 1);
    $pdf->Cell(0, 10, "ID Number # : ".$_SESSION["parent_or_guardian_id_number"], 0, 1);
    $pdf->Cell(0, 10, "Residential Address : ".$_SESSION["parent_or_guardian_address"], 0, 1);
    $pdf->Cell(0, 10, "Area Code : ".$_SESSION["parent_or_guardian_zip"], 0, 1);
    $pdf->Cell(0, 10, "Home Telephone Number # : ".$_SESSION["parent_or_guardian_phone"], 0, 1);
    $pdf->Cell(0, 10, "Cell Number # : ".$_SESSION["parent_or_guardian_cell_phone"], 0, 1);
    $pdf->Cell(0, 10, "Occupation : ".$_SESSION["parent_or_guardian_occupation"], 0, 1);
    $pdf->Cell(0, 10, "Name Of The Company : ".$_SESSION["parent_or_guardian_company_name"], 0, 1);
    $pdf->Cell(0, 10, "Supervisor, Foreman or Manager's Name : ".$_SESSION["parent_or_guardian_supervisor"], 0, 1);
    $pdf->Cell(0, 10, "Section or Department : ".$_SESSION["parent_or_guardian_section"], 0, 1);
    $pdf->Cell(0, 10, "Work Address : ".$_SESSION["parent_or_guardian_work_address"], 0, 1);
    $pdf->Cell(0, 10, "Area Code : ".$_SESSION["parent_or_guardian_work_zip"], 0, 1);
    $pdf->Cell(0, 10, "Work Telephone Number # : ".$_SESSION["parent_or_guardian_work_phone"], 0, 1);

    $pdf->Cell(0, 10, "SUBJECT OF CHOICE : ", 0, 1);
    foreach ($_SESSION["subject"] as $key => $value) {
        $pdf->Cell(0, 10, $key+1 ." : ".$value, 0, 1);
    }

    
    $pdf->Cell(0, 10, "Payment Method : ".$$_SESSION["payment"], 0, 1);
    $pdf->Output('F',$file_name);


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
    $mail->addAddress(EMAIL_RECIPIENT, NAME_RECIPIENT);   // Add a recipient
    $mail->addAddress(EMAIL_RECIPIENT);                     // Name is optional
    $mail->addReplyTo(EMAIL_REPLYTO, NAME_REPLYTO);
    $mail->addCC(CC);
    $mail->addBCC(BCC);


    //Attachments
    $mail->addAttachment($file_name);         // Add attachments
    //$mail->addAttachment('image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New Student Form';
    $mail->Body= '<b>'.$_SESSION["personal_details_first_name"].'</b>';
    $mail->AltBody = ''.$_SESSION["personal_details_first_name"];

    $mail->send();
     if (file_exists($file_name)) {
        unlink($file_name);
    } else {
        // File not found.
    }

} else {
    echo"Cheating. Huh!";
}
