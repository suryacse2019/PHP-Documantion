<?php
$a=[10,30,20];
$temp=$a[0];
$a[0]=$a[1];
$a[1]=$a[2];
$a[2]=$temp;
print_r($a);

?>
