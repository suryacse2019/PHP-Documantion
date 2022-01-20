<?php 
//wap in php to show trait
trait sp{
	public function show(){
		echo "BigBoss";
	}
	public function show2(){
		echo "Jai ho kaho";
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

$test=new A();
$test->show();
echo PHP_EOL;
$test->show1();
echo PHP_EOL;
$test->show2();
?>