<?php

$a=[10,20,40,50,30,20,40,60,70];
for($i=0;$i<count($a);$i++)
{
	for($j=$i+1;$j<count($a);$j++){
		if($a[$i]<$a[$j])
		{
			$temp=$a[$i];
			$a[$i]=$a[$j];
			$a[$j]=$temp;
		}
	}
}
print_r($a);