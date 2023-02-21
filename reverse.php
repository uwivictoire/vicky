<?php
$name="RWANDA";
$len=strlen($name);
echo "Name: ".$name."<br>";
echo "Reverse Name: ";
for ($i=$len-1; $i >=0 ; $i--) { 
	echo $name[$i];
}
?>