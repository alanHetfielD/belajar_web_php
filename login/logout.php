<?php 
require'core.php';
session_destroy();
header('location:'.$http_referer);
 ?>