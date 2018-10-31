<?php
$x = 55;
$i = 1;
$j = 0;
do {
	if ($x%$i == 0) {
		$arr[$j] = $i; 
		$j++;
	}
	$i++;
} while ($i <= $x);
print_r($arr);
?>