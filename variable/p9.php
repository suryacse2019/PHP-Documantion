<?php
//wap in php to show the difference  between null and undefined 
$x='a';
echo $x;
echo PHP_EOL;
var_dump($x);
var_dump(isset($x));
printf("the memory x=%d",memory_get_usage($x));
unset($x);
printf(" the memory x=%d",memory_get_usage($x));


?>