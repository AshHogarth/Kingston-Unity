<?php
ob_start();
if(isset($_POST['submit'])){//to run PHP script on submit
	if(!empty($_POST['product'])){
// Loop to store and display values of individual checked checkbox.
		foreach($_POST['product'] as $selected){
			echo $selected."</br>";
		}
	}
}
$name = $_POST['name'];
$address = $_POST['address'];
$city = $_POST['city'];
$postcode = $_POST['postcode'];
$telephone = $_POST['telno'];
$visitor_email = $_POST['email'];
$products = $_POST['product'];


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

//email variables
$email_from = $name;
$email_subject = "INFORMATION PACK REQUEST: $email_from - $visitor_email";
$pack = implode("\n", $products);
$email_body = "Please send the following product information pack(s):\r\n$pack\n\nto:\r\n$name\r\n$address\r\n$city\r\n$postcode";
$to = "enquiries@kingstonunity.co.uk, john@twin-rock.com";

$headers = "\r\nFrom: $email_from -Email: $visitor_email | Telephone: $telephone\r\n";
$body=$headers.$email_body; 
//Send the email!
mail($to,$email_subject,$body);
//done. redirect to thank-you page.
header('Location: info-thanks.htm');

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
