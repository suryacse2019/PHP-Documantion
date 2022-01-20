<?php
//wap in php to sshow trait in class

trait A{
	public function show(){
		echo "suraj yadav";
	}
}
class B{
	use A;
}
class C{
	use A;
}
$test=new B();
$test1=new C();
$test->show();
$test1->show();
?>