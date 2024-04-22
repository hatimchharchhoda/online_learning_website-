<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

    $mail = new PHPMailer(true);

    $email = 'hatimchharchhoda@gmail.com';
    $message = $_POST["message"];

    try {

        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'lorem.ipsum.sample.email@gmail.com';
        $mail->Password = 'tetmxtzkfgkwgpsc';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('lorem.ipsum.sample.email@gmail.com', 'Online Learning Website');
        $mail->addAddress($email);
        $mail->addReplyTo('lorem.ipsum.sample.email@gmail.com', 'BVM');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Thank You for Reaching Out!';

        $mail->Body = $message;

        $mail->send();
        echo "
            <script>
            alert('Message was sent successfully. Thank your for reaching us!');
            document.location.href = 'contact.html';
            </script>
        ";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

?>
