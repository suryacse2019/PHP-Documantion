<?php
class test{
var $a=10;
var $b=20;
}
$x=30;
$test=new test();
var_dump($test);
var_dump($test instanceof test);//instanceof operator :used to check if the given object is instance of test or not

var_dump($x instanceof test);

?>