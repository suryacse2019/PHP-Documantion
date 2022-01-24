<?php
//wap ro connect mysql database
define('HOST','localhost:3308');
define('USER','root');
define('PASSWORD','123');
define('DBNAME','app-2021');

try{
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if($conn=mysqli_connect(HOST,USER,PASSWORD,DBNAME)){
	print_r($conn);
}else{
	throw new Exception();
	
}

}catch(Exception $e){
	var_dump($e->getMessage());
	exit('conecting Error'.mysqli_connect_error($conn));
}
?>