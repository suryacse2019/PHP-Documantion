<?php
//wap in php to check a array is homogenious or hetrogenous
//wap in php to show argv is allways homogenious
function is_homo($array=[]){
	
	$key_type=getType($array[0]);
	//echo $key_type;
	for($i=0; $i<count($array); $i++){
		echo getType($array[$i]);
		echo PHP_EOL;
		if($key_type===getType($array[$i]))
		{
		}
		else
		{
			return false;
		}
	}
	return true;
}
var_dump(is_homo($argv));
var_dump(is_homo(['suraj','yadav','mahesh']));
var_dump(is_homo([10,20,45.44,'suraj','mahesh']));
var_dump(is_homo([10,20,30,30.50,38.5]));
var_dump(is_homo([10,20,30,40,50]));
?>