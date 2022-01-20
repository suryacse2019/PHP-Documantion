<?php
//wap in php to show in interface 
interface suraj{
	public function sp($a,$b);
}
interface mahesh{
	public function pm($c,$d);
}
class program implements suraj,mahesh{
	public function sp($a,$b){
		echo $a+$b;
	}
	public function pm($c,$d){
		echo $c-$d;
	}
}
$test=new program();
$test->sp(10,20);
echo PHP_EOL;
$test->pm(30,20);
?>