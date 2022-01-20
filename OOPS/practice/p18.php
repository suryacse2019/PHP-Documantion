<?php
//wap in php to show let static binding

class A{
	public static  $name="suraj";
	public function show(){
		echo  static::$name;	
		echo self::$name;
	}
}
class B extends A{
		public static $name="yadav";
}
$test=new B();
$test->show();
?>