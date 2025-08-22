<?php
$d1=strtotime("oct 17");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until $d1.";
?>
