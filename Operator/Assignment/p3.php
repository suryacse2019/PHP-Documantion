<?php
//wap in php to show Assignment Operator
$sum='good';
$x='Morning';

$sum=$sum.$x;
echo "the value of result without assignment : $sum \n";

$sum='good';
$x='Morning';
$sum.=$x;
echo "the value of result with assignment : $sum \n";
?>