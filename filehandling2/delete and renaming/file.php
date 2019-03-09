<?php 
/*
//DELETE FILE
$filename='deleteFile.txt';

if( @unlink($filename) ){
	echo "FIle <strong> '$filename' </strong> has been deleted";
}else{
	echo $filename.' cannot deleted'; 
}*/

//RENAME FILE
$filename='renameFile.txt';

$rand =rand(1000, 9999);


if(rename($filename, $rand.'.txt')){
	echo 'file <strong>'.$filename.' </strong> has been renamed to <strong>'.$rand.'.txt </strong>';
}else{
	echo 'error renaming';
}

 ?>