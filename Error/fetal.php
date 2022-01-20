<?php
//wap in php to show fetal error
//since we cannot re-declare the signature (or definitaion)of function 
function test(){
	echo "hello from test function".PHP_EOL;
}
test();
//re-declaration of test function
function test(){
	echo "hello from test function".PHP_EOL;
}
?>