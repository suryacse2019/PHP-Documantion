<?php
//wap in php to show to string in php
class test{
	public function __toString(){
		return "suraj yadav";
	}
} 
$test=new test();
echo $test;
?>