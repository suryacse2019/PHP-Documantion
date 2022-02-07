<?php
$conn=mysqli_connect('localhost:3308','root','123','app-2021');
//print_r($conn);
$query=mysqli_query($conn,"SELECT * from suraj_yadav");

$college=mysqli_fetch_all($query,MYSQLI_ASSOC);

echo json_encode($college);

?>
