<?php 
$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message']
$formcontent = "From: $name \n Message: $message";
$recipient = "j68nguye@uwaterloo.ca";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>