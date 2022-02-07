<?php
header('content-type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,content-type,Access-Control-Allow-Methods,Authorization,x-requested-with');


$data=json_decode(file_get_contents("php://input"),true);

$student_id=$data['sid'];
$student_name=$data['sname'];
$student_address=$data['saddress'];


$conn=mysqli_connect('localhost:3308','root','123','app-2021');

$result=mysqli_query($conn,"UPDATE suraj_yadav set name='{$student_name}',address='{$student_address}' where id='{$student_id}')");

if($result){
    echo json_encode(array('message'=>' Record updated','status'=>true));

    
}
else{
    echo json_encode(array('message'=>'No Record update','status'=>false));
}

?>