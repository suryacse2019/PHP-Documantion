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
}
$a=new A();
$b=new B();
$a->ktm_bike();
echo PHP_EOL;
$b->cycle();
?>