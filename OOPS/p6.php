<?php
//wap in php to show variable and  method in php

class test{
var $a=10;
var $b=20;

function sp(){
$test=new test;

echo "this is add function".PHP_EOL;
echo (new test)->a+(new test)->b;
echo PHP_EOL;
echo $this->a+$this->b;
echo PHP_EOL;
echo $test->a+$test->b;
}

}

$test=new test;
$test->sp();
?>