<?php

//wap in php to magic constant :__FILE__ and __DIR__
echo "File system path :".__FILE__.PHP_EOL;
echo "\n";
echo "File system path :".__DIR__.PHP_EOL;
echo "\n";
echo "File system path :".dirname(__DIR__).PHP_EOL;
echo "\n";
echo "File system path :".dirname(dirname(__DIR__)).PHP_EOL;
$laragon_path=dirname(dirname(__DIR__)).PHP_EOL;
echo $laragon_path;
echo "different folder path=".$laragon_path.'\\'.'Projects\\';
?>