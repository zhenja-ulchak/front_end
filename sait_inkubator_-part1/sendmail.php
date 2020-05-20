<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$mass = $_POST['mass'];



$subject = "=?utf-8?B?".base64_encode("сообщение с сайта")."?=";
$headers = "from: $name \r\nnumber: $phone\r\nContent-type: text/html; charset=utf8\r\n";

$success = mail( "tandem.grup666@gmail.com", $mass, $headers, $phone ,$name);
echo $success;



?>