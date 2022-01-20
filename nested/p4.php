<?php
$no=readline('Enter the no');
$count=strlen($no);
$sum=0;
for($no=$no;$no!=0;$count--)
{

$res=$no%10;
$q=$no/10;
$ef=$res*(pow(10,$count-1));
$sum=$sum+$ef;
$no=$q;
}
echo $sum;

?>