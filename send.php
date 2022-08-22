<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['emailaddress'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$to = "pranavemirats@gmail.com";
$subject = "Enquiry request from Contact-form";
$txt =
"Name   :". $name . "\r\n  
Email   : " . $email . "\r\n  
subject : ". $subject . "\r\n
Message : " . $message;


$headers = "From: Pranaveabp23@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>




