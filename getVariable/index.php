<?php 
/*
1.does it exists ? or hasbeen submitted
2. is it empty or value== NULL;
3. display back to user;
*/

if(isset($_GET["day"]) && isset($_GET["date"]) && isset($_GET["year"]))
	if(!empty($_GET["day"]) && !empty($_GET["date"]) && !empty($_GET["year"])){
		$day= htmlentities($_GET["day"]);
		$date=htmlentities($_GET["date"]) ;
		$year= htmlentities($_GET["year"]);
		echo $day."  ".$date."  ".$year;
	}
 ?>

 <form action="index.php" method="GET">
 	Day <br>
 	<input type="text" name="day" ><br>
 	date <br>
 	<input type="text" name="date" ><br>
 	year <br>
 	<input type="text" name="year" ><br><br>
 	<input type="submit" name="submit" value="submit"> 
 </form>



