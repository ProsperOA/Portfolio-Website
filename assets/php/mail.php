<?php
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$to = 'prosperosagieamayo@gmail.com';
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@portfolio.com\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);

// auto reply
$to_reply = $email_address;
$email_subject_reply = "Thank You For Your Interest";
$email_body_reply = "Hello $name, thank you for contacting me.\n\n".
					"I'm glad that you took the time to reach out to me, I will contact you as soon as possible.\n\n".
					"LinkedIn: https://www.linkedin.com/in/obosa-osagie-amayo-47279ab6\n\n".
					"GitHub: https://github.com/ProsperOA";
$headers_reply = "From: noreply@portfolio.com\n";
mail($to_reply,$email_subject_reply,$email_body_reply,$headers_reply);

return true;
?>
