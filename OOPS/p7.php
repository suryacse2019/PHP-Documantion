<?php

//wap in php to show  setter and getter
class test{

public $a=10;
public $b=20;
var $c=30;
public function setValue($a,$b,$c){

$this->a=$b;
$this->b=$c;
$this->c=$c;
}
public function getValue(){

echo "The value of a from getter ={$this->a} \n";
echo "The value of b from getter ={$this->b} \n";
echo "The value of c from getter ={$this->c} \n";

}

}
$test=new test();
echo "The value of member a before setter={$test->a}\n";
echo "The value of member b before setter={$test->b}\n";
echo "The value of member c before setter={$test->c}\n";
$test->setValue(100,200,300);//setter
echo "the value of member a after setter={$test->a}\n";
echo "the value of member b after setter={$test->b}\n";
echo "the value of member c after setter={$test->c}\n";
$test->getValue();//getter
?>