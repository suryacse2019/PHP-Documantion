<?php

$x=[10,20,30,40];
$y=[100,200,300,400,500];

echo "The count of X".count($x);
echo PHP_EOL;
echo "The count of Y".count($y);
echo PHP_EOL;


var_dump(count($x)==count($y));//equal
print_r($x);
print_r($y);
print_r($x+$y);
print_r($y+$x);
//overide the dublicate insersert the unique