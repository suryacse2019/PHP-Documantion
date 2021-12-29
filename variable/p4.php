<?php
//wap in php to show boolean false stored in variable
$x=false;
echo $x;//nothing
echo PHP_EOL;
echo getType($x);//boolean
echo PHP_EOL;
var_dump($x);//bool(false)
echo PHP_EOL;
echo json_encode($x);//raw format

echo 'on comparing the values :-';
echo(false==False);
echo PHP_EOL;
echo (false==FALSE);
echo PHP_EOL;
var_dump (0==FALSE);
echo PHP_EOL;
var_dump(0==false);//type is optional match
echo PHP_EOL;
var_dump(0==(int)false);//implicit Type conversion // php dynamic
echo PHP_EOL;
var_dump(0===false);//content match and type match = false


echo "printing with printf and boolean values";
echo PHP_EOL;
printf("the value of string is :%s","katreena");
echo PHP_EOL;
printf("the value of int as int %d",10);
echo PHP_EOL;
printf("the value of true as bool %b",true);
echo PHP_EOL;
printf("the value of 1 as a string :%s",1);
echo PHP_EOL;
printf("the value of bool false as string:%s",json_encode(false));
echo PHP_EOL;
printf("the value of 1 as int %d",1);
echo PHP_EOL;
printf("the value of true in int %d",true);
echo PHP_EOL;
printf("the value of true as string %s",true);
echo PHP_EOL

printf("the value of bool false as bool : %b",false);

?>