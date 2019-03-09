<?php 
$text="";
if(isset($_POST["user_input"]) && !empty($_POST["user_input"])){
	$text .= $_POST["user_input"];
	echo $text;
}

 ?>

 <hr>

 <form action="index.php" method="POST">
 	<textarea name="user_input" rows="7" cols="30"></textarea>

	<br><br>
	<input type="submit" value="submit">
 </form>