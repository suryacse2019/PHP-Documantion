<?php
include_once __DIR__.'/init.php';
try{
	if($conn=mysqli_connect(
	$settings['db:config']['host'],
	$settings['db:config']['user'],
	$settings['db:config']['password'],
	$settings['db:config']['db']
	))
	{
		print_r($conn);
	}
	else{
		throw new Exception();
	}
}catch(Exception $e){
	echo $e->Exception();
	exit('conection faild'.mysqli_connect_error($conn));
}

?>