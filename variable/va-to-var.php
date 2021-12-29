<?php
//wap in php to show var to var reference
$x=10;//normal variable
echo $x;//normal variable

echo PHP_EOL;
$z='suraj';
echo $z;
echo PHP_EOL;
$suraj=500;
echo $suraj;

echo PHP_EOL;

$z='yaduvanshi';
$$z=5000;
printf("The value os z is:%s",$yaduvanshi);
echo PHP_EOL;

$w='_100';
$$w='suraj yadav';
printf("Name of the w is :%s",$_100);


echo PHP_EOL;

$student['name']='suraj';
$student['college']='gpa';
foreach($student as $key => $value){
	
	$$key=$value;
	printf("%s : %s \n",$key,$value);
}

echo PHP_EOL;

$car['name']='Maruti';
$car['class']='A class';

printf("The name of car :%s \n",$car['name']);
printf("The class of car :%s \n",$car['class']);

extract($car);
printf("tahe name of car :%s \n",$name);
printf("tahe class of car :%s \n",$class);
?>