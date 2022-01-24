<?php
//wap inphp to show get method in php
class show{
	private $name="suraj yadav";
public function __get($property){
	echo "not access to private property($property)";
}
}
$test=new show();
$test->name;
?>