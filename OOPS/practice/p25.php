<?php
class sp{
	function show(){
		echo "this is show function";
	}
}
class raj{
	function hii(){
		echo "this is hii function";
	}
}
function hello($s){
	$s->show();
}
function how($pq){
	$pq->hii();
}

$test=new sp();
hello($test);
echo PHP_EOL;
$res=new raj();
how($res);
?>