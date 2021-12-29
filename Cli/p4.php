<?php

$fp=fopen('suraj.txt','r');
$txt=fgets($fp,1024);
echo $txt;
?>