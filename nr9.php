<?php
$data = "1234567890"; 
$arr = str_split($data, 2);
print_r($arr);
$sum = $arr[0] + $arr[1] + $arr[2] + $arr[3] + $arr[4]; 
echo '<br>'; 
echo "$sum"; 

?>