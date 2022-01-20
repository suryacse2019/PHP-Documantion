<?php 
//wap in php to show constructer and destructer in php
class Test{
	public function __construct(){
		echo 'Constructer running....'.PHP_EOL;
	}
}
$test=new Test;
$test=new Test();
$test->__construct();
?>