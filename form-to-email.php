<?php
if (!isset($_POST['submit'])) {
	echo "error please submit";
}
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

if (empty($name) || empty($email)) {
	echo "Name and emails are mandatory";
	exit;
}

$email_from = 'yekeen1993@yahoo.com';
$email_subject = "New form submission";
$email_body = " You have  a new messga from the $name .\n".
		"email address: $email\n".
		"Here is the message:\n $message".

$to="yekeen1993@yahoo.com";
$heaaders = "From: $email_from"

//send email
mail($to, $email_subject, $email_body, $heaaders);
header('location: index.html');













?>