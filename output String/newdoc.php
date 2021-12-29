<?php
//wap in php to show new doc string syntax
$a=100;
echo <<<'BLOCK'

this a new doc string , $a \n
 "this is again new line of string "$a""
 'this string is inside $asingle qoutes \t tabbed' = $a

BLOCK;

$a=100;
$code=<<<'BLOCK'

this a new doc string , $a \n
 "this is again new line of string "$a""
 'this string is inside $asingle qoutes \t tabbed' = $a

BLOCK;
echo $code;
?>