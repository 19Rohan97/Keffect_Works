<?php
// Simple implementation of sending email using swiftmailer
require_once 'vendor/autoload.php';

// Create the Transport
// $transport = (new Swift_SmtpTransport('smtp.example.org', 25))
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465,'ssl'))
  ->setUsername('ttvettuparambil@gmail.com')
  ->setPassword('AjayUday@97')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);



function sendVerificationEmail($userEmail,$token)
{
    // Access mailer object
    global $mailer;
    //Sending a message using html
    $body='<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div class="wrapper">
            <p>Thank you for verifying your email.Click on the link below to verify your account</p>
            <a href="http://localhost/registration/index.php?token=' . $token . '">Verify Your Mail</a>
        </div>
        
    </body>
    </html>';

            
    // Create a message
$message = (new Swift_Message('Verify your email address'))
// ->setFrom(['john@doe.com' => 'John Doe'])
->setFrom('ttvettuparambil@gmail.com')
->setTo($userEmail)
->setBody($body,"text/html")
;

// Send the message
$result = $mailer->send($message);
}