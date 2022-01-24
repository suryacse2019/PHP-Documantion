<?php
#step:make conection
include "dbconect.php";
#step2:prepare the query
$key=readline('Enter the key:');

$sql="delete from suraj_yadav where id='{$key}';";

#step3:Execute the query or fiure the querys
if(mysqli_query($conn,$sql)){
	if(mysqli_affected_rows($conn)>0){
		echo 'REcord Deleted Suyccessfully';
	}else{
		echo 'Cannot deleted either record does not exist or Is is'.($key);
	}
	}
else{
	echo 'Deleted Error'.mysqli_error($conn);
}
?>