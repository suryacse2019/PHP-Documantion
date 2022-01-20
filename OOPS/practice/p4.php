<?php
class employee{
	public $name;
	public $age;
	public $salary;
public function __construct($n,$a,$s){
	$this->name=$n;
	$this->age=$a;
	$this->salary=$s;
}
public function show(){
	
	echo 'Employee Data'."\n";
	echo "Name is :".$this->name ."\n";
	echo "Name is :".$this->age ."\n";
	echo "Name is :".$this->salary ."\n";
	
}
}
class manager extends employee{
	public $ta="1000";
	public $phone="2000";
	public $otalsalary;

public function show1(){
	$this->totalsalary=$this->ta+$this->phone+$this->salary;
	echo "Manager profile"."\n";
	echo "Name is :".$this->name ."\n";
	echo "Name is :".$this->age ."\n";
	echo "Name is :".$this->totalsalary ."\n";
	
}
}
$n=new employee("suraj yadav",20,20000);
$n1=new manager("mahesh",23,10000);
$n->show();
$n1->show1();
?>