<?php
//wap in php to special operator
$x=10;
$y=20;
var_dump($x.$y);//concatanation

$result='the sum is= ';
echo $result.($x+$y);

//note:Php allows mathematicall
//evaluation only after using bracket
//other wise non-numeric encounterd
//error will be thrown


?>