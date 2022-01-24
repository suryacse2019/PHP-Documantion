<?php
//wap in php to show the __destruct method
class test{
	function __construct(){
		echo "this is construct calling".PHP_EOL;
	}
	function __destruct(){
		echo "this is destruct function calling";
	}
	function show(){
		echo "this show function calling".PHP_EOL;
	}
	
}
$name=new test();
$name->show();
?>