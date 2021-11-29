<?php
require "Email.php";

$mail = new Email();

$mail->name = $_POST["name"];
$mail->subject = $_POST["subject"];
$mail->email = $_POST["email"];
$mail->message = $_POST["message"];
$mail->sendMail();