<?php
//wap in php to show isset 
class test{
	public $name="suraj yadav";
private $address="sakhoi";
public function show($n,$a){
	$this->name=$n;
	$this->address=$a;
}
}
$test=new test();
echo isset($test->name);
?>