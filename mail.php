<?php
$name = $_POST['name'];
$email= $_POST['email'];
$phone = $_POST['phone_number'];
$submessage = $_POST['msg_subject'];
$message= $_POST['message'];
$to = "laskaramaan@gmail.com";
$subject = "Mail From sparify";

$txt =" sName: ". $name . "\r\n Email: " . $email . "\r\n Phone Number: " . $phone . "\r\n Subject: " . $submessage . "\r\n Message: " . $message ;

$headers = "From: info@sparify.com" . "\r\n" ;

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>