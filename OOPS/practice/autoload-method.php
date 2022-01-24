<?php
//wap in php to show autoload method in php
//require "autoload-classess/first.php";
//require "autoload-classess/second.php";

function __autoload($names){
	require "autoload-classess/" .$names. ".php";
}

$test=new first();
echo PHP_EOL;
$test1=new second();
?>