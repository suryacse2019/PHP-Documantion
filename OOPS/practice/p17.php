<?php
//wap in php to show static member
class Test{
	public static $name="suraj yadav";
	public static function show(){
		echo self::$name;
	}
	function __construct($s){
		echo self::$name=$s."\n";
	}
}
$test=new Test("mahesh");
$test->show();

?>