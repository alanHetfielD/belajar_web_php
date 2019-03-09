<?php 
/*
//NOT UNIQUE
function hit_count(){
	$filename ='counter.txt';
	$handle = fopen($filename, 'r');
	$current = fread($handle , filesize($filename));
	fclose($handle);

	echo $current;
	$current_inc= $current +1;

	$handle = fopen($filename, 'w');
	fwrite($handle, $current_inc);
	fclose($handle);



}*/

//UNIQUE 


function hit_count(){
	echo $ip_address= $_SERVER['REMOTE_ADDR'];
	$ip_file= file('ip.txt');

	foreach ($ip_file as $ip) {
		$ip_single=trim($ip);
		if($ip_address == $ip_single){
			$found=true;
			break;
		}else{
			$found=false;
			break;
		}
	}
	if($found==false){
		$filename='counter.txt';
		$handle= fopen($filename, 'r');
		$current=fread($handle, filesize($filename));
		fclose($handle);
		$current_inc=$current + 1;

		$handle= fopen($filename, 'w');
		fwrite($handle, $current_inc);
		fclose($handle);

		$handle= fopen('ip.txt', 'w');
		fwrite($handle, "\n".$ip_address);
	}else{
		echo 'ip sudah ada';
	}
}


 ?>