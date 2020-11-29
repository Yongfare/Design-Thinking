<?php	
	if (empty($_POST['name_15942']) && strlen($_POST['name_15942']) == 0 || empty($_POST['email_15942']) && strlen($_POST['email_15942']) == 0 || empty($_POST['message_15942']) && strlen($_POST['message_15942']) == 0)
	{
		return false;
	}
	
	$name_15942 = $_POST['name_15942'];
	$email_15942 = $_POST['email_15942'];
	$message_15942 = $_POST['message_15942'];
	$optin_15942 = $_POST['optin_15942'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_15942: $name_15942 \nEmail_15942: $email_15942 \nMessage_15942: $message_15942 \nOptin_15942: $optin_15942 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_15942";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>