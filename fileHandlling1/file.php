<?php 
include "index.html";


$nama= $_POST["nama"];

if(isset($nama)){
	if(!empty($nama)){

		$file= fopen("nama.txt", "a");
		fwrite($file, $nama."\n");

		fclose($file);

		echo "nama nama dalam file " ."<br>";

		$readin= file("nama.txt");
		$readin_count= count($readin);
		echo $readin_count."<br>";
		$count=0;
		foreach ($readin as $fname) {
			$count++;
			echo trim($fname);
			if($count < $readin_count-1)
				echo ",  ";
			if($count == $readin_count-1)
				echo "  dan  ";
				
		}
	}else{
	echo "tolong tuliskan nama";
}
}

 ?>