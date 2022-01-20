<?php
interface a{
	public function sum($a,$b);
}
interface b{
	public function sub($c,$d);
}
class d implements a,b{
	public function sum($a,$b){
		echo $a+$b;
	}
	public function sub($c,$d){
		echo $c-$d;
	}
}
$test=new d();
$test->sum(10,20);
$test->sub(30,20);
?>