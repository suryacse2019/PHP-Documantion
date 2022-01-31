<?php
#step:make conection
include "dbconect.php";
#step2:prepare the query
$id=readline('Enter the id:');
$name=readline('Enter the name:');
$address=readline('Enter the address:');

$sql="update suraj_yadav set name='{$name}',address='{$address}' where id='{$id}';";

#step3:Execute the query or fiure the querys
if(mysqli_query($conn,$sql)){
	if(mysqli_affected_rows($conn)>0){
		echo 'Recorded updated successfully';
	}else{
		echo 'record is not updated';
	}
}
else{
	echo 'Record not updated error'.mysqli_error($conn);
}
?>