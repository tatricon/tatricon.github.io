<?php

$i = 0;
$p = 0;
while ($i < 9000) {
	if ($p == 0){
		echo '<ol>';
	}		
	$no1 = mt_rand(10, 89);
	$temp = 99 - $no1;
	$no2 = mt_rand(10, $temp);
	$sol = $no1 + $no2;
	$order = mt_rand(0,1);
		if ($order == 0) {
		echo '<li>'.$no1.' + '.$no2.' = '.$sol.'</li>';
		}
		else {
		echo '<li>'.$no2.' + '.$no1.' = '.$sol.'</li>';
		}
	$i++;
	$p++;
	if ($p > 2) {
		echo '</ol>';
		$p = 0;
	}

}
?>
