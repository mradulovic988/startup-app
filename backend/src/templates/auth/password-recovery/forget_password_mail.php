<?php
use PHPMailer\PHPMailer\PHPMailer;;
require_once 'C:/xampp/htdocs/App/backend/config/PHPMailer/PHPMailer.php';
require_once 'C:/xampp/htdocs/App/backend/config/PHPMailer/SMTP.php';
require_once 'C:/xampp/htdocs/App/backend/config/PHPMailer/Exception.php';

// include 'C:/xampp/htdocs/App/backend/config/Db.php';

$mail = new PHPMailer();

// SMTP Setting
//$mail->isSMTP();
$mail->Host = "smpt.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "mradulovic988@gmail.com";
$mail->Password = "komr@!988";
$mail->Port = 465;
$mail->SMTPSecure = "ssl";

// Email Settings
$mail->isHTML(true);
$mail->setFrom('donotreply@mydomain.com', 'Admin');
$mail->addAddress("upss070288@gmail.com");
$mail->Subject = "Test Subject";
$mail->Body = "Test Body";

if ($mail->send())
    $response = 'Mail is send.';
else
    $response = 'Something is wrong.';
exit (json_encode(array("response" => $response)));