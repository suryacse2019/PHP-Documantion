<?php
function show(array $a){
	foreach($a as $b){
		echo $b.PHP_EOL;
	}
}
$name=["suraj","mahesh","suresh","jaisingh"];
show($name);
?>