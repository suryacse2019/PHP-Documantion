<?php 
//wap in php to show null assignment in parameterise constructer
class Test{
	public $a;
	public $b;
	public $c;
}
$test=new Test();
var_dump ($test->a);
var_dump ($test->b);
var_dump ($test->c);

$a;//Notice: Undefined variable
var_dump($a);