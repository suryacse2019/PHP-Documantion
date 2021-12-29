<?php
//wap in php to show core php file

echo 'this line from core php file ';
function test(){
	echo 'this is function from core php';
	echo PHP_EOL;
}
test();
class Test{
	public function display(){
		echo ' this is display method from test class from core php file';
		echo PHP_EOL;
	}
}
$Test=new Test();
	$Test->display();
	echo '<h1> this is html tag </h1>';
?>