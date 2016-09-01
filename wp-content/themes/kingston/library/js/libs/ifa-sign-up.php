<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$company = $_POST['company'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$address = $_POST['address'];
$town = $_POST['town'];
$postcode = $_POST['postcode'];
$fcanumber = $_POST['fcanumber'];

//Validate first
if(empty($name)||empty($company)||empty($telephone)||empty($email)||empty($address)||empty($town)||empty($postcode)||empty($fcanumber)) 
{
    echo "All fields are mandatory!";
    exit;
}

if(IsInjected($email))
{
    echo "Bad email value!";
    exit;
}

$email_from = $name;//<== update the email address
$email_subject = "New IFA Request";
$email_body = "You have received a new message from '$name' requesting to become a KU IFA member.\r\nName: $name\r\nCompany: $company\r\nTelephone: $telephone\r\nEmail: $email\r\nAddress: $address\r\nTown: $town\r\nPostcode: $postcode\r\nFCA number: $fcanumber\r\n";
$to = "quotes@kingstonunity.co.uk, support@ai-london.com, john@twin-rock.com";

//Send the email!
if ($town != "NY") {
  mail($to,$email_subject,$email_body);
}
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
