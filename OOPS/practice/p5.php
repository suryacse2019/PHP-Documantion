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
		echo "name is".$this->name1."age is:".$this->age."Name is:".$this->name."\n";
	}
}
$name=new person("suraj yadav from junpur");
$sp=new suraj("sp");
$sp->show1();
$name->show();
?>