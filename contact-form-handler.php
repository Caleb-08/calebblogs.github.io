<?php
	$name = $_POST['name'];
	$visitor_email = $_POST{'email'};
	$message = $_POST['message'];


	$email_from = 'caleb.gomez08@yahoo.com';

	$email_subject = "New Request/Form";

	$email_body = "Name: $name.\n".
					"Email: $visitor_email.\n".
					"Message: $message.\n";

	$to = "caleb.gomez08@yahoo.com";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $visitors_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: contact.html");
?>