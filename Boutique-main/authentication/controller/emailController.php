<?php


require_once 'vendor/autoload.php';
require_once 'config/constants.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com',465,'ssl'))
  ->setUsername(EMAIL)
  ->setPassword(PASSWORD);


// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);




function sendVerificationEmail($userEmail,$token)
{
	global $mailer;

	$body='<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Verify Email</title>
</head>
<body>
	<div class="wrapper">
		<p>
			Thank you for signing up for our service. Please click on the below link to verify your account.
		</p>
			<a href="http://localhost/authentication/index.php?token='.$token.'">Verify email</a>
	</div>
	
</body>
</html>';

// Create a message
$message = (new Swift_Message('VERIFY YOUR EMAIL'))
  ->setFrom(EMAIL)
  ->setTo($userEmail)
  ->setBody($body,'text/html'); 
  ;

// Send the message
$result = $mailer->send($message);
}

