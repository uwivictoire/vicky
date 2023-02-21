<?php 
$n=10;
$fact=1;
echo "The factorial of ".$n." is ";
for ($i=$n; $i >=1 ; $i--) { 
	if ($i==1) 
		echo $i;
	else
		echo $i."*";
	$fact *=$i;
}
echo "=".$fact;
?>