<?php
//wap in php to user defined str_repeat function which repeate 
//the string n number of time

function string_multiply($str='',$n=0){
if($n==0){
return $str;
}
$x='';
for($i=0; $i<=$n; $i++){
$x=$x.$str;
}
return $x;
}
$a=readline('Enter a string:');
$n=readline('How many times to be reapeated :');
echo string_multiply($a,$n);
?>