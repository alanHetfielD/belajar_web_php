<?php 

$string= 'this is a string ';

if(preg_match('/is/', $string)){
	echo 'match found'."<br>";
}else
	echo 'match not found'.'<br>';


function has_space($string){
	if(preg_match('/ /', $string))
		return true;
	else
		return false;
}

$str= "nama saya adalah alan";

if(has_space($str))
	echo "setidaknya ada satu spasinya"."<br>";
else
	echo "tidak ada spasinya". '<br>';


 ?>

