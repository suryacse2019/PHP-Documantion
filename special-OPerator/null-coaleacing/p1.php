<?php
//suppresh operator @:error operator
//neveruse @ operator because , debugging is inportnent

$x=20;
echo "the value of x: $x";//20
echo PHP_EOL;
echo "The value of y:".@$y;//undefined variable y

$z=20;
$z=isset($z)??null;
echo PHP_EOL;
echo "the value of z:".$z;//undefined variable $z
?>