<?php
//wap in php to show sleep method in php
class test{
	public $name="suraj yadav";
	private $firstname;
	private $lastname;
	public function setname($fname,$lname){
		$this->firstname=$fname;
		$this->lastname=$lname;
	}
	public function __sleep(){
		return array('firstname','lastname');
	}
}
$test=new test();
$test->setname("mahesh","mishra");
$srl=serialize($test);
echo $srl;
?>