<?php

#step1 : make connection
include __DIR__.'/dbconnect.php';

#step2 : prepare the Query

$name = readline('Enter name:');
$address = readline('Enter address:');
$email = readline('Enter Email:');

$sql = "INSERT INTO suraj_yadav(name,address,email) values('{$name}','{$address}','{$email}');";


#step3 : Execute the Query or Fire the Query
if(mysqli_query($conn,$sql)){

echo 'Record Inserted with pk = '.mysqli_insert_id($conn);

}else{

echo 'Inserted Error'.mysqli_error($conn);
}

