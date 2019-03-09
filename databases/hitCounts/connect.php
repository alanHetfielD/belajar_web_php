<?php 
$my_host='localhost';
$user= 'root';
$pass='';
$data='a_database';

$koneksi= mysqli_connect($my_host, $user, $pass, $data) or die('error to connect');

//$GLOBALS['koneksi'] =  $koneksi;

 ?>