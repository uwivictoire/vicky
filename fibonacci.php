<?php
$num = 0; 
$n1 = 0;
$n2 = 1;
$num1=20;
echo "<h3>Fibonacci series for first ".$num1." numbers: </h3>"; 
echo "\n"; echo $n1. ' '. $n2. ' '; 
while ($num <$num1 ) { 
	$n3 = $n2 + $n1;
	echo $n3." ";
	 $n1 = $n2;  
    $n2 = $n3; 
    $num = $num + 1;   
}
?>