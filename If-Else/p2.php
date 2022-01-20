<?php
//wap in php to find the qudrant according to given , quardinate question
$x=readline("Enter the x value");
$y=readline("Enter the Y value");
if($x>0 and $y>0)
echo "1st is Qudrant";
if($x>0 and $y<0)
echo "4th is Qudrant";
if($x<0 and $y<0)
echo "2nd is Qudrant";
else
echo "3rd is Qudrant";
?>