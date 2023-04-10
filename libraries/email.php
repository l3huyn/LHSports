<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



function send_mail($sent_to_email, $sent_to_fullname, $subject, $content, $option = array()){
    global $config;
    $config_email = $config['email'];
    $mail = new PHPMailer(true); // Instantiation and passing `true` enables exceptions

    try {
        //Server settings
        $mail->SMTPDebug = 0;                                               
        $mail->isSMTP();                                                    // Gửi mail SMTP
        $mail->Host = $config_email['smtp_host'];                           // Set the SMTP server to send through
        $mail->SMTPAuth = true;                                             // Enable SMTP authentication
        $mail->Username = $config_email['smtp_user'];                       // SMTP username
        $mail->Password = $config_email['smtp_pass'];                       // SMTP password
        $mail->SMTPSecure = $config_email['smtp_secure'];                   // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port = $config_email['smtp_port'];                           // TCP port to connect to
        $mail->CharSet = 'UTF-8';

        
        //Recipients
        $mail->setFrom($config_email['smtp_user'], $config_email['smtp_fullname']);
        $mail->addAddress($sent_to_email, $sent_to_fullname);                       // Add a recipient
//      $mail->addAddress('hynhlele@gmail.com');                                    // Name is optional
        $mail->addReplyTo($config_email['smtp_user'], $config_email['smtp_fullname']);
//      $mail->addCC('cc@example.com');
//      $mail->addBCC('bcc@example.com');

        
        // Attachments
//      $mail->addAttachment('yonex.jpg');                                          // Add attachments
//      $mail->addAttachment('yonex.jpg', 'huynhle.jpg');                           // Optional name

        
        // Content
        $mail->isHTML(true);                                                        // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $content;
//      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        return TRUE;
    } catch (Exception $e) {
        return "Message could not be sent. Mailer Error:". $mail->ErrorInfo;
    }
    
}