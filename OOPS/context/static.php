<?php
//wap in php to show non-static keyword
 function show(){
	$i=0;
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