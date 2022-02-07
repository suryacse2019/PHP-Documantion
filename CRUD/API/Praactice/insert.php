<?php
header('content-type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,content-type,Access-Control-Allow-Methods,Authorization,x-requested-with');


$data=json_decode(file_get_contents("php://input"),true);

$student_name=$data['sname'];
$student_address=$data['saddress'];


$conn=mysqli_connect('localhost:3308','root','123','app-2021');

$result=mysqli_query($conn,"INSERT into suraj_yadav (name,address) values('{$student_name}','{$student_address}')");

if($result){
    echo json_encode(array('message'=>' Record Found','status'=>true));

    
}
else{
    echo json_encode(array('message'=>'No Record Found','status'=>false));
}

?>