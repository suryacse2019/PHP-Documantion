<?php
//wap in php to show exception handling
$x=readline("Enter the x number:");
$y=readline("Enter the y number:");
$result=0;
try{
	echo "block of try started...\n";
	if($y==0){
		throw new exception();
	}
	else{
		$result=$x/$y;
	}
	
	echo "Block of try ended \n";
}
catch(exception $e){
	echo "some exception raised ".$e->getMessage();
	echo "\n";
}finally{
	echo "The finally block will be executed ....\n";
	echo "the result =$result \n";
}