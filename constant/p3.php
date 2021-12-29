<?php
//wap in php to case sensitive constant
define('gravity',10); //lowercase
define('GRAVITY',9.8); //uppercase
define('Gravity','free fall'); //capitalise
define('GraViTy','this is gravity');

echo gravity;
echo PHP_EOL;
echo GRAVITY;
echo PHP_EOL;
echo Gravity;
echo PHP_EOL;
echo GraViTy;
?>