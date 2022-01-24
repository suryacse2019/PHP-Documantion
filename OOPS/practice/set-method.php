<?php
//wap in php to show set-method in php

class Test{
	private	$name;
	public function show(){
		echo $this->name;
	}
	public function __get($property){
		echo "private property does not exit";
	}
	public function __set($property,$value){
		if(property_exists($this,$property)){
			$this->$property=$value;
		}
		else
		{
			echo "property does not exit";
		}
	}
	
}
$test=new Test();
$test->name="suraj yadav";
$test->show();
?>