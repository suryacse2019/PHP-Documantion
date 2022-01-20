<?php
class person{
	public $name;
	public function __construct ($p1){
		$this->name=$p1;
	}
	public function show(){
		echo $this->name."\n";
	}
}
class suraj extends person{
	public $name1="suraj";
	public $age=20;
	public function show1(){
		echo "name is suryavanshi"."\n";
		$this->show();
	}
}
$name=new suraj("suraj yadav");

$name->show1();
//$name->show();
?>