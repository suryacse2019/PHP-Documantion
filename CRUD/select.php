<?php
#step:make conection
include "dbconect.php";
#step2:prepare the query
$key=readline('Enter the key:');
$set=readline('update the add:');

$sql="update suraj_yadav set address='{$set}' where id='{$key}';";

#step3:Execute the query or fiure the querys
if(mysqli_query($conn,$sql)){
	while()
}
else{
	echo 'Record is not set'.mysqli_error($conn);
}
?>