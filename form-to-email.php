<?php
if (!isset($_POST['submit'])) 
{
	echo "error; you need to submit form!;"
	# code...
}

// this is to collect the user details
$name = $_POST['name'];
$visitor_email=$_POST['email'];
$message = $_POST['message'];

//validate first
if(empty($name)||empty($visitor_email))
{
	echo "NAme and Email are mandatory!";
	exit;
}
$email_form ='ayoonlinetech@gmail.com' // your emaiil address should be here
$emaiil_subject = "new form submission";
$email_body - "you have received a new message from the user $name.\n"."email address:$visitor_email\n"."Here is the message:\n".

$to = "ayoonlinetech@gmail.com"; //put your email here 
$headers = "from: $email_from \r\n";

//send the email

mail($to,$email_subject,$email_body,$headers); // you are done you can redirect to a thank you page 