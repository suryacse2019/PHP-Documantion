<?php
header('content-type:application/json');
$conn=mysqli_connect('localhost:3308','root','123','app-2021');
$result=mysqli_query($conn,"SELECT *from suraj_yadav");

if(mysqli_num_rows($result)>0){
    
    $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($res);
}
else{
    echo json_encode(array('message'=>'No Record Found','status'=>false));
}

?>