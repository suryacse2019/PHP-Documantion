<?php 
//wap in php to show constructer in php
class Test{
	public $a;
	public function __construct(){
		$this->a=10;
		echo 'called constriucter autometaclly';
		echo PHP_EOL;
	}
	public function wish(){
		echo 'hii suraj good morning..'.PHP_EOL;
	}

	public function __destruct(){
		echo 'called destructer automatically'.PHP_EOL;
		unset($this->a);
		$this->show_a();
	}
	public function show_a(){
		echo "the value of a after destructer called :".$this->a;
	}
}
$test=new Test();
echo $test->a;
$test->wish();
echo $test->a;
?>