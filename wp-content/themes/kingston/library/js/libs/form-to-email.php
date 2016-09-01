<?php
if(!isset($_POST['submit']))
{
//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$telephone = $_POST['telno'];
$subject = $_POST['subject'];
$enquiry = $_POST['enquiry'];

//Validate first
if(empty($name)||empty($visitor_email)) 
{
	echo "Name and email are mandatory!";
	exit;
}

if(IsInjected($visitor_email))
{
	echo "Bad email value!";
	exit;
}

$email_from = $name;
$email_subject = "ENQUIRY: $subject - $visitor_email";
$email_body = "Enquiry:\r\n$enquiry\r\n";
$to = "enquiries@kingstonunity.co.uk, kate.wright@kingstonunity.co.uk, support@ai-london.com, john@twin-rock.com";

$headers = "\r\nFrom: $email_from - Reply-To: $visitor_email | Telephone: $telephone\r\n";
$body=$headers.$email_body; 
//Send the email!
mail($to,$email_subject,$body);
//done. redirect to thank-you page.
header('Location: thankyou.htm');


// Function to validate against any email injection attempts
function IsInjected($str)
{
	$injections = array('(\n+)',
		'(\r+)',
		'(\t+)',
		'(%0A+)',
		'(%0D+)',
		'(%08+)',
		'(%09+)'
		);
	$inject = join('|', $injections);
	$inject = "/$inject/i";
	if(preg_match($inject,$str))
	{
		return true;
	}
	else
	{
		return false;
	}
}

?> 
