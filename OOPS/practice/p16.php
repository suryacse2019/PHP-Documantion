<?php 
//wap in php to show static member in php

class suraj{
	public static $name="suraj yadav";
	public static function show(){
		echo self::$name;
	}
}
//$test=new suraj("sp");
//$test->show();
//suraj::$name;
suraj::show();
?>