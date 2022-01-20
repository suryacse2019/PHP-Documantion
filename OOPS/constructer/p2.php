<?php 
//wap in php to show constructer in php
class Test{
	public function __construct(){
		echo 'called contructer automatically';
		echo PHP_EOL;
	}
	public function __destruct(){
		echo 'called destructer automatically'.PHP_EOL;
	}
	public function wish(){
		echo 'hii suraj good morning..'.PHP_EOL;
	}
	
}
$test=new Test();
$test->wish();
?>