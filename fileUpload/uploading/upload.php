<?php 
echo date('Y-m-d');
echo $name= $_FILES['alan']['name'];
echo '<br>';
echo $size= $_FILES['alan']['size'].'<br>';
echo $type= $_FILES['alan']['type'].'<br>';

//RESTRICTING FILE
$extension=strtolower(substr($name, strpos($name, '.')+1));
echo $extension.'<br>';

$max_size=2097152;

echo $tmp_name= $_FILES['alan']['tmp_name'];
echo '<br>';


//die();

if (isset($name)) {
	if(!empty($name)){
		// if(($extension == 'jpg' || $extension == 'jpg') && $size < $max_size){
			$location='uploads/';
				if(move_uploaded_file($tmp_name, $location.$name))
						echo 'OK';
				else
					echo 'gagal';
		// }else{
		// 	echo 'file must be jpg/jpeg and must be 2mb or less';
		// }

		
	}else{
		echo 'Please Chose A File';
	}
}


 ?>

 <form action="upload.php" method="POST" enctype="multipart/form-data">
 	<input type="file" name="alan"><br><br>
 	<input type="submit" name="Submit"><br><br>
 </form>