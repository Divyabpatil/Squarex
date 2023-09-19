<?php


$name = $_POST['name'];

$mobileno = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email = $_POST['email'];


$to = "squarexteam20@gmail.com";
$subject = "Message from squarexteam20";

$txt = "Name = " . $name . "\r\n Email = "
  . $email . "\r\n Mobile No =" . $mobileno . "\r\n Message = "
  . $message;

$headers = "From: noreply@GE.com";

if ($email != NULL) {
  mail($to, $subject, $txt, $headers);
}

echo "OK";
?>