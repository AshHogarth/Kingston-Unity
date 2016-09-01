<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$username = $_POST['username'];

//Validate first
if(empty($username)) 
{
    echo "You need to enter a username";
    exit;
}

$email_from = $username;//<== update the email address
$email_subject = "Password Change Request";
$email_body = "You have received a password change request from $username";
$to = "kate.wright@kingstonunity.co.uk, quotes@kingstonunity.co.uk, support@ai-london.com, john@twin-rock.com";

//Send the email!
mail($to,$email_subject,$email_body);
//done. redirect to thank-you page.
header('Location: thankyou.htm');
?> 
