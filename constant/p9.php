<?php
//wap in php to show constant are global inside class
define('GRAVITY',10);
printf("The value of GRAVITY at global scope :%d\n",GRAVITY);
$gravity=9.8;
printf("The value of gravity at global scope :%d\n",$gravity);

class Test{
	
	private $g; //instans variavle
	private $G; //instans variavle
	
	public function __construct(){
		$this->G = GRAVITY;
		$this->g = $gravity;
		printf("the value of GRAVITY inside method :%d\n",GRAVITY);//constant 
		printf("the value of gravity inside method :%d\n",$gravity);//undefined variable g
		
		printf("the value of gravity using g for class:%d \n",$this->g);//undefined variable g
		printf("the value of gravity using G for class:%d\n",$this->G);
	}
}
$test=new Test();
?>