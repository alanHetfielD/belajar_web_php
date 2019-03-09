<?php 
/*
$time= time();
//$actuak_time= date("H:i:s", $time);

$actuak_time= date("D M Y , H:i:s", $time);

echo $time. "<br>";

echo "the current time is : ".$actuak_time;
*/
$time= time();
// $time_now= date("d M Y H:i:s", $time);
$time_now= date("d/m/Y ", $time);
$hari = 1;
// $actual_modified= date("d M Y , H:i:s", strtotime("+ $hari month"));
$actual_modified= date("d M Y ", strtotime("+ $hari month"));

echo $time.'<br>';
echo $time_now. "<br>";
echo $actual_modified ;
echo '<br>';
$time_now= strtotime($time_now);
$actual_modified= strtotime($actual_modified);

$d1 = floor($time_now/60/60/24);
$d2 = floor($actual_modified/60/60/24);
$selisih = $d2 - $d1;

echo $selisih;

echo '<br>';
echo "<br>";
$str = '24/1/2018';
// echo $str;
$str = str_replace('/', '-', $str);
// echo $str;
$a = strtotime($str);
// echo $a;
echo date('Y-m-d', $a);

 ?>
