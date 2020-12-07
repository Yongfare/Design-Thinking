<?php	
	
	
	$input_1381 = $_POST['input_1381'];
	$input_2017 = $_POST['input_2017'];
	$input_1793 = $_POST['input_1793'];
	$input_102 = $_POST['input_102'];
	$input_832 = $_POST['input_832'];
	$input_936 = $_POST['input_936'];
	$input_146 = $_POST['input_146'];
	$input_402 = $_POST['input_402'];
	$input_1377 = $_POST['input_1377'];
	$input_697 = $_POST['input_697'];
	$input_2152 = $_POST['input_2152'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Input_1381: $input_1381 \nInput_2017: $input_2017 \nInput_1793: $input_1793 \nInput_102: $input_102 \nInput_832: $input_832 \nInput_936: $input_936 \nInput_146: $input_146 \nInput_402: $input_402 \nInput_1377: $input_1377 \nInput_697: $input_697 \nInput_2152: $input_2152 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>