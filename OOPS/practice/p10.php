<?php
abstract class a{
	public $name;
	public function __construct($s1){
		$this->name=$s1;
	}
	abstract function show();
} 
// class b extends a{
	// public function show(){
		// echo $this->name;
	// }
// }
$sp=new b("suraj");
echo $sp->show();
?>