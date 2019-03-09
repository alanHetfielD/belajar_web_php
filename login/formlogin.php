<?php 

if(isset($_POST['nama']) && isset($_POST['pass'])){
$user=$_POST['nama'];
$password=$_POST['pass'];
$pass_hash=md5($password);

if(!empty($user) && !empty($password)){
	$sql="select id from login where username='$user' and password='$pass_hash' ";
	$query=mysqli_query($koneksi, $sql);
	$nums=mysqli_num_rows($query);
	if($nums==0){
		echo 'invalid username or password';
	}else if($nums>=1){
		$row=mysqli_fetch_array($query);
		$_SESSION['id']=$row['id'];

		header('location:index.php');
		
		echo 'ok';

	}
}

}
 ?>
 <form action="" method="POST">
name:<input type="text" name="nama"><br><br>
pass: <input type="text" name="pass"><br><br>
<input type="submit" name="kirim" value="kirim">
 </form>