<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["phone"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.example.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "amurarnsit@gmail.com";
$mail->Password = "uwuudardvxdenpgz";

$mail->setFrom($email, $name);
$mail->addAddress("abhishekmurthy2301@gmail.com", "Dave");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

header("Location: index.html");