<?php
//wap in php to show static keyword
 function show(){
	static $i=0;
	echo "before increment".PHP_EOL;
	echo $i;
	echo PHP_EOL;
	$i++;
	echo "after increment".PHP_EOL;
	echo $i;
	echo PHP_EOL;
}
show();
show();
show();
?>