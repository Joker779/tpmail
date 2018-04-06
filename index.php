<?php
require 'PHPMailerAutoload.php';

// namespace MyProject;
//use PHPMailer\PHPMailer\PHPMailer;
// require 'vendor/autoload.php';
 $mail = new PHPMailer;


try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.qq.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'biteabc@qq.com';                 // SMTP username
    $mail->Password = 'vqnmuwmclcngbafa';                           // SMTP password
    $mail->SMTPSecure = 'ssl';  // Enable TLS encryption, `ssl` also accepted
//    $mail->SMTPSecure = 'tls';

    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('biteabc@qq.com', 'biteabc');

    // Add a recipient 收件人
    $mail->addAddress('337994425@qq.com', 'Joe User');
//    $mail->addAddress('﻿ae86789@gmail.com', 'Joe User');
//    $mail->addAddress('﻿ae86789@gmail.com');

//    $mail->addAddress('ellen@example.com');               // Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

    //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}