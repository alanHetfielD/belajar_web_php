<?php 
$text="";
$find; $replace;

function replace_it($text, $search, $replace){


}

if(isset($_POST["user_input"]) && !empty($_POST["user_input"])){
	$text .= $_POST["user_input"];
	if(isset($_POST["search"]) && isset($_POST["replace"]) ){
		if(!empty($_POST["search"]) && !empty($_POST["replace"])){
			$find= $_POST["search"];
			$replace=$_POST["replace"];

			$text= str_ireplace($find, $replace, $text);
		}
	}
}

 ?>

 <hr>

 <form action="index.php" method="POST">
 	<textarea name="user_input" rows="7" cols="30"><?php echo $text ?></textarea>
	<br><br>
	<p>search  :</p> <input type="text" name="search">
	<br>
	<p>replace :</p> <input type="text"  name="replace">
	<br><br>
	<input type="submit" value="find and replace">
 </form>