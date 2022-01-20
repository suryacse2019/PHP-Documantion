<?php 
//wap in php to show trait
trait sp{
	public function show(){
		echo "BigBoss";
	}
}
trait sp1{
	public function show1(){
		echo "Jai Hind";
	}
}
class A{
	use sp,sp1;
}
class B{
	use sp;
}
$test=new A();
$test1=new B();
$test->show();
echo PHP_EOL;
$test1->show();
$test->show1();
?>