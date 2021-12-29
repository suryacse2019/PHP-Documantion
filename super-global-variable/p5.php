<?php
$a=5;
$b=10;
function demo(){
	$GLOBALS['z']=$GLOBALS['a']+$GLOBALS['b'];
}
demo();
echo $z;
?>