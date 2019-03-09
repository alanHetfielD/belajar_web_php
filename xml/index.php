<?php 
	$xml=simplexml_load_file('example.xml');

	foreach($xml->produser as $produser){
		echo $produser->name."<br>";
		echo $produser->age.'<br>';
		echo "&nbsp&nbsp&nbsp".$produser->show->showname.'<br>';
		echo "&nbsp&nbsp&nbsp".$produser->show->showdate.'<br><br>';
	}

 ?>