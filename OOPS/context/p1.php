<?php
//wap in php to show static and non-static context
class Test{
	
	public $a=300;
	public static $b=400;
	function get_a(){
		echo "non static method :";
		echo PHP_EOL;
		echo $this->a;
		echo PHP_EOL;
		#echo Test::$a;//this is static context not use in  non static context
	}
	static function get_b(){
		echo "static method: ";
		echo PHP_EOL;
		echo Test::$b;
	}
}
$test=new Test();
$test->get_a();
$test->get_b();
?>