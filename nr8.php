<?php
$k=-1; $n=0; 
$a = [1, 2,3,4, 5, 6, 7, 8, 9,10]; 
for ($i=0; $i<9; $i++) 
{ 
if ($n>10) break; 
else $n=$n+$a[$i]; 
$k++; 
} 
echo "$k"; 
?>