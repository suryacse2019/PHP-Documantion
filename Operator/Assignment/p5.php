<?php
//wap in php to show Assignment Operator
$sum=5;

$sum=$sum-1;
echo "the value of result without assignment : $sum \n";

$sum=5;
$sum-=1;
echo "the value of result with assignment : $sum \n";

$sum=5;
$sum--;
echo "the value of result postincrement : $sum \n";

$sum=5;
--$sum;
echo "the value of result pre increment : $sum \n";

?>