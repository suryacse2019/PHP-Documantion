<?php
//wap to find php to show without using %
$x=readline('enter the value');
$y=readline('enter the 2nd value');
$Q=$x/$y;
echo $Q;
printf("%d",$Q);
echo PHP_EOL;
printf("%f",$Q);
echo PHP_EOL;
printf("%.2f",$Q);
?>