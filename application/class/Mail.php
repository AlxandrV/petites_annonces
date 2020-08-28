<?php

namespace App;

use \PHPMailer\PHPMailer\PHPMailer;

class Mail {

    public static function sendEmail(){
        //Create a new PHPMailer instance
        $mail = new PHPMailer;
        //Set who the message is to be sent from
        $mail->setFrom('g3raphacs@gmail.com', 'J M');
        //Set an alternative reply-to address
        $mail->addReplyTo('g3raph@gmail.com', 'J M');
        //Set who the message is to be sent to
        $mail->addAddress('mathieu4job@gmail.com', 'Jeremy Mathieu');
        //Set the subject line
        $mail->Subject = 'PHPMailer test';
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        // $mail->msgHTML(file_get_contents('contents.html'), __DIR__);
        $mail->Body = 'HELLO ! This is a plain-text message body';
        //Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';
        //Attach an image file
        $mail->addAttachment('images/phpmailer_mini.png');

        //send the message, check for errors
        if (!$mail->send()) {
            echo 'Mailer Error: '. $mail->ErrorInfo;
        } else {
            echo 'Message sent!';
        }

    }
}