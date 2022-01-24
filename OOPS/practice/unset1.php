<?php
//wap in php to show unset in php
class test{
	public $name="suraj yadav";
	private $add="sakhoi";
	public function __unset($property){
		unset($this->$property);
	}
	
}
$test=new test();
//unset($test->name);
//echo $test->name;
unset($test->add);
print_r($test);
?>