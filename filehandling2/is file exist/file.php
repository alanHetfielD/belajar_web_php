<?php 

$filename='file.txt';
if(file_exists($filename)){
	echo 'file already exist'; 
}else{
	$handle= fopen('file.txt', 'w');
	fwrite($handle, 'nothing ');
	fclose($handle);
}

 ?>