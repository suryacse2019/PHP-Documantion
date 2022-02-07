<?php
$hostname="localhost:3308";
$user="root";
$password="123";
$dbname="app-2021";

$conn=mysqli_connect($hostname,$user,$password,$dbname);

//print_r($conn);

$name=readline("Enter the name:");
$address=readline("Enter the address:");

$sql=mysqli_query($conn,"INSERT into suraj_yadav  (name,address)  values('$name','$address')");

if($sql){
	echo "success";
}
else{
	echo "invalid";
}

?>