<?php
class test{
	public function show(){
		echo "this is show function \n";
		return $this;
	}
	public function show1(){
		echo "this is show1 function \n";
		return $this;
	}
	public function show2(){
		echo "this is show2 function \n";
		return $this;
	}
	public function show3(){
		echo "this is show3 function \n";
		return $this;
	}
	public function show4(){
		echo "this is show4 function \n";
	}
}
$Test=new test();
$Test->show()->show1()->show2()->show3()->show4();
?>