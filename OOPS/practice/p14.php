<?php
class a{
	public function name(){
		echo "suraj yadav";
	}
}
class b extends a{
	public function sum(){
		echo "mahesh";
	}
}
$test=new b();
$test->sum();
$test->name();

?>