<?php
//wap to find perfect number .
$a=readline("Enter the value :");
$sum=0;
for($i=1; $i<$a;$i++){
	if($a%$i==0){
		$sum=$sum+$i;
	}
}
if($sum==$a){
	echo 'No is perfect';
}
else
{
	echo 'No is not perfect';
}

?>