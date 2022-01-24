<?php 
//wap in php to connect mysql database
define('HOST','localhost:3308');
define('USER','root');
define('PASSWORD','123');
define('DBNAME','app-2021');

$conn=mysqli_connect(HOST,USER,PASSWORD,DBNAME);
print_r($conn);