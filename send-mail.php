<?php
    
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    require './config.php';

    function sendMail($message) {

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = MAILHOST;
        $mail->Username = USERNAME;
        $mail->Password = PASSWORD;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->setFrom(SEND_FROM, SEND_FROM_NAME);
        $mail->addAddress("phpmailertester23@gmail.com");
        $mail->addReplyTo(REPLY_TO, REPLY_TO_NAME);
        $mail->isHTML(true);
        $mail->Subject = "=?UTF-8?B?0J3QvtCy0LDRjyDQt9Cw0Y/QstC60LA=?=";
        $mail->Body = $message;
        $mail->AltBody = $message;

        if(!$mail->send()) {
            return "error";
        } else {
            return "success";
        }
    }
?>