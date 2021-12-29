<?php
//wap to find the sum of all the argument supplied. from command line and average
print_r($argv);

$sum=0;
$avg=0;
for($i=1; $i<$argc; $i++)
{
	$sum=$sum+(int)$argv[$i];
}
printf("The sum is =%d \n",$sum);
$avg=$sum/($argc-1);
printf("The Average is =%d \n",$avg);

?>