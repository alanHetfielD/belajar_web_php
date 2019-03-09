<?php 
ob_start();
session_start();
$current_file=$_SERVER['SCRIPT_NAME'];
$http_referer=$_SERVER['HTTP_REFERER'];


function loggedin(){
if(empty($_SESSION['id'])){
	return false;
}else{
	return true;
}
}

function getuserField($field){
	global $koneksi;
	$id=$_SESSION['id'];
	$sql="select $field from login where id='$id'";
	$query=mysqli_query($koneksi, $sql);
	$row=mysqli_fetch_row($query);
	echo $row[0];
}
 ?>