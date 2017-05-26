<?php
$pos = $_POST;
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$from = $_POST['email'];
$type = $_POST['form-type'];
$to = 'synhero@gmail.com ';
$subject = 'Website Contact';

$body = "From: $name\n E-Mail: $email\n Phone: $phone \n Message:\n $message\n $pos";

mail ($to, $subject, $body, $from)

?>