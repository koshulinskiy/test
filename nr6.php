<?php
$a = [1, 2, -1, -2, 3, -3 ]; 
$k = 0; 
for ($i=0; $i<5; $i++) 
echo $a[$i]." "; 

echo '<br>'; 
echo '<br>'; 
echo '<br>'; 

for ($i=0; $i<5; $i++) 
if($a[$i]<0) {$b[$k] = $a[$i]*(-1); $k++;} 
else {$b[$k] = $a[$i]; $k++;} 

for ($i=0; $i<$k; $i++) 
echo $b[$i]." "; 
?>