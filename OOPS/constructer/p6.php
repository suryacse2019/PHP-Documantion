<?php
//wap in php to show 
class Test{
	public function __construct(){
		echo 'Constructure is called';
		echo PHP_EOL;
		return 10;
	}
}
//object creation
$test=new Test();
$test=new test();
//echo $test; //Implicity called and can not be return.
$x=$test->__construct();//explicity called as method can be returned
echo $x;
?>
