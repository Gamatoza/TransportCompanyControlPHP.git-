<?php
$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$subject = "=?utf-8?B?".base64_encode("Сообщение с сайта")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html\r\n charset=utf-8\r\n";

$success = mail("gamatext@yandex.ru",$subject, $message,$headers);
echo $success;
?>