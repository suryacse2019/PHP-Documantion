<?php
$a=readline("Enter the value :");
//wap to find mod( of a given numnber without using if else
$x=($a>0)?"|".($a)."|":"|".-($a)."|";
echo "value of $x \n";

$y=($a>0)?$a:-($a);
echo "the |$a| is=$y \n";

//wap to find odd/even of a given numnber without using if else
$x=($a%2)?'Odd':'Even';
echo "$x \n";

//wap to find positive negative of a given numnber without using if else
$res=($a>0)?'positie':'Negative';
echo "value of $res \n";

//wap to find perfect number .
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

