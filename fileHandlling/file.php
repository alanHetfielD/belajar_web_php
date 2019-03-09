<?php 

$handle= fopen("names.txt", "w");

fwrite($handle, "hai alan");

fwrite($handle, " broooo");

fclose($handle);

echo "telah d tulis";

 ?> 