<?php
namespace App;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class SMail
{
    function __construct($type, $mailto, $prenom, $nom, $code)
    {
        $domain = 'http://localhost';

        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
            $mail->isSMTP(); // Send using SMTP
            $mail->Host = 'smtp.mail.com'; // Set the SMTP server to send through
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'jm-dev-test@mail.com'; // SMTP username
            $mail->Password = 'v83VevH5Q7p3QgGPjCIB'; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port = 587; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('jm-dev-test@mail.com', 'Petites Annonces'); //Set who the message is to be sent from
            $mail->addAddress($mailto, $prenom . ' ' . $nom); // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional
            $mail->addReplyTo('jm-dev-test@mail.com', 'Do not reply');

            // Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->isHTML(true); // Set email format to HTML

            if ($type === 'valid') {
                $link = $domain . '/valid-' . $code;
                $mail->Subject = 'Confirmez votre annonce';
                $mail->Body ='<p>Bonjour '.$prenom.' !</p><a href="'.$link .'">Cliquez sur ce lien pour confirmer votre annonce.</a>';
            } elseif ($type === 'delete') {
                $link = $domain . '/delete-' . $code;
                $mail->Subject = 'Votre annonce a été publiée';
                $mail->Body ='<p>Bonjour '.$prenom.' !</p><a href="'.$link .'">Cliquez sur ce lien pour supprimer votre annonce.</a>';
            } else {
                echo 'Wrong Type Parameter';
                return;
            }

            $mail->AltBody =
                'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
