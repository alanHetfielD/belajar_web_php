<?php 
session_start();

if(isset($_SESSION["username"]) || isset($_SESSION["age"])){
	echo "welcome ".$_SESSION["username"]."<br>";
	echo "your age = ". $_SESSION["age"];
}else{
	echo "please log in";
}

 ?>