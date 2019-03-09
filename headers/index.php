<?php ob_start(); ?>

<h1>my page</h1>
this is my page;
<?php 
$redirect_page= "../word/";
$redirect= true;

if($redirect==true ){
	header("Location:". $redirect_page); 
}

ob_end_flush();
 ?>



