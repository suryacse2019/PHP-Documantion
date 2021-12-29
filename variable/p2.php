<?php
//wap in php to show,floating point number 
$x=011; //convert octal number system
echo $x;
echo PHP_EOL;
#$a=08;//invalid Nuerical literal(conversion to octal range not possible)
#echo $a;
$b=10.5;
echo $b;
echo PHP_EOL;
echo getType($b);
echo PHP_EOL;
var_dump($b);

echo PHP_EOL;
$c=10.0;
echo $c;

echo PHP_EOL;
$d=10.0000;
echo getType($c);
echo PHP_EOL;
var_dump($b);

echo PHP_EOL;
$d=(int)$c;
echo $d;
echo PHP_EOL;
echo getType($d);

echo PHP_EOL;
$z=0.5;
echo $z;
echo PHP_EOL;
echo getType($z);
echo PHP_EOL;
var_dump($z);

echo PHP_EOL;
$p='s';
$p.=$z;
echo $p;
echo PHP_EOL;
echo getType($p);

echo PHP_EOL;
$marks=9.9999999999999999999999999;
echo $marks;
echo PHP_EOL;
echo getType($marks);
echo PHP_EOL;
var_dump($marks);

echo PHP_EOL;
printf("%s",$marks);

?>