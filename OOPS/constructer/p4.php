<?php 
//wap in php to show constructer and destructer in php
class Test{
	public function __construct($name){
		echo $name;
	}
}
$test=new Test('suraj yadav');
?>