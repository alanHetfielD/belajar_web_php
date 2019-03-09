<?php 

include 'connect.php';
$user_ip=$_SERVER['REMOTE_ADDR'];

function ip_exist($ip){
	global $koneksi;
	global $user_ip;
	$sql="select ip from hits_ip where ip='$user_ip' ";
	$query=mysqli_query($koneksi, $sql);
	if($query){
		echo 'berhasil';
	}else{
		echo 'gagal';
	}

	if(mysqli_num_rows($query)==0){
		return false;
	}else if(mysqli_num_rows($query)>=1){
		return true;
	}
}
function ip_add($ip){
	global $koneksi;
	$sql="insert into hits_ip values('$ip')";
	$query=mysqli_query($koneksi, $sql);
	if($query){
		echo 'berhasil';
	}else{
		echo 'gagal';
	}

}
function update_count(){
	global $koneksi;
	$sql="SELECT * FROM `counts`";
	//$query=mysqli_query( $GLOBALS['koneksi'], $sql);
	$query=mysqli_query($koneksi, $sql);
	if($query){
		echo 'berhasil';
	}else{
		echo 'gagal';
	}
	$count=mysqli_fetch_row($query);
	echo $count[0];
	$count_inc= $count[0]+1;

	$sql_inc="update counts set count= '$count_inc' where count = '$count[0]' ";
	$query=mysqli_query( $GLOBALS['koneksi'], $sql_inc);
	if($query){
		echo 'berhasil';
	}else{
		echo 'gagal';
	}
}

if(ip_exist($user_ip)){
		echo 'ada';
	}else{
		echo 'tidak ada';
		ip_add($user_ip);
		update_count();
	}

 ?>