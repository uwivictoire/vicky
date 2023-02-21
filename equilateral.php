<?php
$num=10;
for($i=1;$i<$num;$i++){
	echo "<div style='margin-top:-10px;'>";
	for ($j=$i; $j <$num ; $j++) { 
		echo "&nbsp";
	}
	for ($a=0; $a <$i ; $a++) { 
		echo "*";
	}
	echo "<div>";
}

?>