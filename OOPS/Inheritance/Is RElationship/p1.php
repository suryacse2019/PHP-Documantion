<?php
//wap in php to show multi-level class
class A{
	public function __construct(){
		$this->show();
	}
	public function show(){
		echo "hii everyone";
		echo PHP_EOL;
	}
}
class B{
	public function __construct(){
		$this->show1();
	}
	public function show1(){
		echo "hello everyone";
		echo PHP_EOL;
	}
}
class C{
	public function __construct(){
		$this->show2();
	}
	public function show2(){
		echo "jai ho everyone";
		echo PHP_EOL;
	}
}
$test=new A();
$test=new B();
$test=new C();
?>