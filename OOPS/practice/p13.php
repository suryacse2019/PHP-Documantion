<?php
class suraj{
public $name;
public function __construct($a,$b,$c){
	echo $this->name=$a+$b+$c;
	 function sum(){
		echo $this->name;
	}
}
}
$test=new suraj(5,6,7);
?>