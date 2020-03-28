<?php
use PHPMailer\PHPMailer\PHPMailer;;
require_once 'C:/xampp/htdocs/App/backend/config/PHPMailer/PHPMailer.php';
require_once 'C:/xampp/htdocs/App/backend/config/PHPMailer/SMTP.php';
require_once 'C:/xampp/htdocs/App/backend/config/PHPMailer/Exception.php';

// include 'C:/xampp/htdocs/App/backend/config/Db.php';

$mail = new PHPMailer();

// SMTP Setting
$mail->isSMTP();
// $mail->Host = "smpt.gmail.com";
// $mail->SMTPAuth = true;
// $mail->Username = "mradulovic988@gmail.com";
// $mail->Password = "komr@!988";
// $mail->Port = 465;
// $mail->SMTPSecure = "ssl";

// Email Settings
$mail->isHTML(true);
$mail->setFrom($email, $username);

$mail->addAddress("upss070288@gmail.com");
$mail->Subject = "Startup App - Password Reset";
$mail->Body = "<p>This is your temporary password <strong>: $recovery </strong></p><p>Log in to your account and change it.</p><p>Your,</p><p>StartUp App</p>";

if ($mail->send()) {
    $response = 'Mail is send.';
} else {
    $response = 'Something is wrong.';
    $function->redirect('https://mlab-app.000webhostapp.com/backend/pages/login.php');
}