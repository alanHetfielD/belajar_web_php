<?php 
require("index.php");
if(isset($_GET["username"]) && !empty($_GET["username"])){
	$nama= $_GET["username"];
	$nama= strtolower($nama);

	if($nama=="alan"){
		echo "you're the best, ". $_GET["username"];
	}
}

	
 ?>