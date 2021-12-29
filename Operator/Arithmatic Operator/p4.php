<?php
//wap to find php to show without using %
$x=readline('enter the value');
$y=readline('enter the 2nd value');
$Q=$x/$y;
echo $Q;
$A=Sprintf("%d",$Q);
echo PHP_EOL;
$B=sprintf("%f",$Q);
echo PHP_EOL;
$C=sprintf("%.2f",$Q);

echo $A;
echo PHP_EOL;
echo $B;
echo PHP_EOL;
echo $C;

echo PHP_EOL;
$rem=$Q-($A*$Y);
echo $rem;
?>