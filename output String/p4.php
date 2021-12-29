<?php
//wap in php to show difference b/w raw and processed in the combination

//escape charector sequence 
#echo ''''; //invalid
#echo """"; //invalid

echo 'the line is  \n single tabbed and "\t double" tabbed.';
echo PHP_EOL;
echo "the line is  \n single tabbed and '\t double' tabbed.";

//with variable
echo PHP_EOL;
$a=100;
echo 'the value of $a is:"$a" ';
echo PHP_EOL;
echo "the value of $a is : '$a' ";
echo PHP_EOL;
echo 'tha value of $a is : '.$a;
echo PHP_EOL;
echo 'The value of $a is :"'.$a.'"';
echo PHP_EOL;
echo 'tha value of $a is : '."'$a'";
?>