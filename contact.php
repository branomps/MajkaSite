<?php

	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$message = $_POST["message"];
    $content = $message;
    $toEmail = "branomps@azet.sk";
    $subject = "Info " . $name;
	$mailHeaders = "From: " . $name . " <". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
require_once "contact.php";
?>
