<?php
//wap in php to boolean data type stored in varibale 
$x=true;
echo $x;
echo PHP_EOL;
echo getType($x);//boolean
echo PHP_EOL;
var_dump($x);//bool(true)

$y=TRUE;
echo $y;
echo PHP_EOL;
echo getType($y);//boolean
echo PHP_EOL;
var_dump($y);//bool(true)


$z=tRuE;
echo $z;
echo PHP_EOL;
echo getType($z);//boolean
echo PHP_EOL;
var_dump($z);//bool(true)

echo PHP_EOL;
echo 'on comparing all the true three values';
echo PHP_EOL;
echo (true==TRUE);
echo PHP_EOL;
echo (true==TRUE);
echo PHP_EOL;
echo (1==true);
echo PHP_EOL;
var_dump(1===true);
?>