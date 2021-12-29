<?php
//wap in php to show global scope defined from local scope 
	$a=10;
	echo "the value of a from globale: $a";
	echo PHP_EOL;
function test1(){
	global $a;
	echo "the value of a from globaleinsiude test 1: $a";
	echo PHP_EOL;
	
}
test1();
function test2(){
	global $a;
	echo "the value of a from globale from test 2: $a";
	echo PHP_EOL;
}
test2();