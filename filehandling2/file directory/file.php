<?php 
/*
//EXPLODE TO ARRAY
$filename= "nama.txt";
$handle= fopen($filename, "r");

echo filesize($filename)."<br>";

$read= fread($handle, filesize($filename));

$namesArray= explode(" , ", $read);

echo strlen($namesArray[2]). "<br>";

foreach ($namesArray as $name){
	echo $name."<br>";
}

//echo strpos($read, "nur")."<br>".strlen($read)."<br>";

//echo $read;

//IMPLODE TO STRING TO FILE.TXT

$namesArray= array("alan", "rini", "nur", "dan alan");

$string= implode(", ", $namesArray);
$string.=".";

$handle= fopen("nama1.txt", "w");

fwrite($handle, $string);

//echo $string;


//OPEN FOLDER OR DIRECTORY WITH OPENDIR

$directory= "file";

if($handle = opendir($directory."/")){
	echo "looking inside \'".$directory."\' : "."<br>";

	//$file= readdir($handle);

	while($file= readdir($handle)){
		//MENGHILANGKAN DOT/TITIK 
		if($file!= "." && $file != ".."){
			echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br>';
		}
	}
}
*/

//IF FILE EXIST



 ?>
 