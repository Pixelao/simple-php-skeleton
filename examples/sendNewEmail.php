<?php

require_once('../app.php');

# Mailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->Host = $_ENV['MAIL_HOST'];
$mail->SMTPAuth = true;
$mail->Username = $_ENV['MAIL_USERNAME'];
$mail->Password = $_ENV['MAIL_PASSWORD'];
$mail->SMTPSecure = $_ENV['MAIL_ENCRYPTION'];
$mail->Port = $_ENV['MAIL_PORT'];

$mail->setFrom('sender@testmail.com', 'Sender');
$mail->addReplyTo('sender@testmail.com', 'Sender');
$mail->addAddress('recipient@testmail.com', 'Recipient');
$mail->addCC('copy@testmail.com', 'Copy');
$mail->addBCC('hiddencopy@testmail.com', 'Hidden Copy');
$mail->Subject = 'Test Email';
$mail->isHTML(true);
$mail->Body = "<h1>Test Email Title</h1><p>This is a test email.</p>";


if ($mail->send()) {
    echo 'Message has been sent';
} else {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
