<?php
//wap to show in php example of if-else
$a=readline("Enter the value :");
if($a>2){$x='suraj yadav';}else{$x='hello surya';}
echo "the value of x using if else $x \n";


$x=($a>2)?'suraj yadav':'yadav ji';//R-L
echo "the value of x using ternary $x \n";

($a>2)?$x='hii':$x='hello';//L-R
echo "the value of x using ternary left to right $x";
