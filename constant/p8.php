<?php
//wap to show constants are global
define('GRAVITY',10);
printf("the value of GRAVITY at Global scopes: %d \n",GRAVITY);
$gravity=9.8;
printf("the value of gravity at global scope :%d\n",$gravity);


function test(){
	
	printf("the valu of GRAVITY at local scope: %d\n",GRAVITY);
	printf("the value of gravity at local scope:%d\n",$gravity);
}
test();
?>