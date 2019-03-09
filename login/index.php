<?php 

include'core.php';
include'connect.php';


if(loggedin()){
	echo 'you`re logged in'.'<a href="logout.php">logout</a><br><br>';
	?>
	welcome
	<?php  
	getuserField('name');
}else{
	include'formlogin.php';
}


 ?>
