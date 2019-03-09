<?php 
$to ='alan@gmail.com';
$subject= 'this is an email';
$body= "this is an email test \n \n I hope you got it";
$header = "From: someone@gmail.com";

mail($to, $subject, $body, $header);
 ?>