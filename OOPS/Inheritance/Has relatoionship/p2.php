<?php
class A{
	public function ktm_bike(){
		echo "This is a KTM Bike...";
	}
}
class B{
	public function cycle(){
		echo "this is cycle";
	}
	public function ktm_bike(){
		$a=new A();
		$a->ktm_bike();
	}
}
$a=new A();
$b=new B();
$b->ktm_bike();
echo PHP_EOL;
$a->ktm_bike();
echo PHP_EOL;
$b->cycle();
?>