<?php
//wap in php to add number using user defined function 
	$no1=readline('Enter the number no1:');
	$no2=readline('Enter the number no2:');
	echo add($no1,$no2);
	function add($no1,$no2){
	return $no1+$no2;
	}
?>