<?php 
//wap to show relational operator
//type equality
$a=10;
$b=20;
var_dump($a==$b);
var_dump($a===$b);

$a='20';
$b=20;

var_dump($a==$b);
var_dump(getType($a));
var_dump($a===$b);
var_dump(getType($b));