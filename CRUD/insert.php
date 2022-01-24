<?php
#step:make conection
include "dbconect.php";
#step2:prepare the query
$name=readline('Enter the name:');
$address=readline('Enter the address:');

$sql="INSERT INTO suraj_yadav(name,address) values('{$name}','{$address}')";

#step3:Execute the query or fiure the querys
if(mysqli_query($conn,$sql)){
	echo 'Record Inserted with Pk='.mysqli_insert_id($conn);
}
else{
	echo 'Inserted Error'.mysqli_error($conn);
}
?>