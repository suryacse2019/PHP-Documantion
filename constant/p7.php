<?php
error_reporting(E_NOTICE);
//wap in php to show to show difference b/w predefine error level and user define error level
printf("the value of true %d\n",true);
printf("the value of TRUE %d\n",TRUE);
printf("true is the Incase-sensitive constant :%d\n",(TRUE==1));
define('true',10,1);
printf("the value of true after redeclaration:%d\n",true);


?>