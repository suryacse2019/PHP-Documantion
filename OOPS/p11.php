<?php

//wap in php to magic constant :__FUNCTION__ and __CLASS__and __METHOD__
class tv{
	public function display(){
		echo "called from display method from class".__CLASS__.":".__METHOD__;
		echo PHP_EOL;
		echo "called from display method from class".__CLASS__.":".__METHOD__;
		echo PHP_EOL;
		echo "the method name from class TV=".__CLASS__."::".__FUNCTION__;
		echo PHP_EOL;
		var_dump((__CLASS__.'::'.__FUNCTION__)==__METHOD__);
	}
}
function display(){
	echo "called from display function: ".__METHOD__;
	echo PHP_EOL;
	echo "called from display function: ".__function__;
}
display();
$test=new tv();
$test->display();
?>