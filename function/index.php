<?php 

function aku(){
	return "alan";
}

echo "nama saya adalah " . aku() . "<br>";

$user_ip= $_SERVER['REMOTE_ADDR'];

function myip(){
	global $user_ip;
	$string= "your ip address is ". $user_ip;

	echo $string; 
}

myip();

 ?>

