<?php
class suraj{
	private $name="suraj yadav";
	public function __construct($p1){
		$this->name=$p1;
	}
	protected function show(){
		echo $this->name;
	}
	
}
class mahesh extends suraj{
	public function show1(){
		echo $this->name;
	}
}
$sp=new mahesh("sp singh");
$sp->name="suraj yadav";
$sp->show1();
?>