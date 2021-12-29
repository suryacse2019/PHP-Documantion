<?php
//wap in php to show  here doc string syntax
$a=100;
echo <<<BLOCK
this a here doc string , $a \n 
 "this is again new line of string "$a" " 'this line string is inside $a single quotes \t tabbed'=$a 
BLOCK; 

$a=100;
echo <<<"BLOCK"
this a here doc string , $a \n 
 "this is again new line of string "$a" " 
 'this line string is inside $a single quotes \t tabbed'=$a 
BLOCK; 

?>