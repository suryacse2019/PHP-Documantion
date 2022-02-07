<?php
require_once __DIR__.'/query-builder/Driver.php';
require_once __DIR__.'/functions.php';

$request_type = handle_request(); 

$request_type = $_SERVER['REQUEST_METHOD'];
$params = explode('/',$_SERVER['REQUEST_URI']);
$resource = @$params[count(@$params)-2];
$id = @$params[count(@$params)-1];

switch($request_type):
case 'GET':
     process_get($id);
     break;
case 'POST':
     process_post();
     break;
case 'PUT':
     process_put($id);
     break;
case 'PATCH':
     process_patch();
     break;
case 'DELETE':
     process_delete($id);
     break;
default:
     die('Invalid Request');
     break;
endswitch;

function process_get($id=''){

     global $resource;
     $query = new Query();

     if($id==''){
          $records = $query->select('*')->table($resource)->allRecords();
     }
     
     if($id){
          $records = $query->select('*')->table($resource)->where('id',$id)->first();
     }

if($records==false){

     $response = array(
          'code'=>201,
          'status'=>false,
          'message'=>'Record Not Found for '.$resource,
          'data'=>[],
     );
}else{
     
     $response = array(
          'code'=>200,
          'status'=>true,
          'message'=>'Record Found',
          'data'=>$records,
     );
}

header("Content-Type:application/json");
http_response_code(200);
echo json_encode($response,JSON_PRETTY_PRINT);
exit();

}


function process_post(){
global $resource;

$formdata=$_REQUEST;
if(isset($formdata)){
     $query=new query();
     try{
          if($query->insert($resource,$formdata)){
               $id=$query->getId();
               $responce=array(
                    'code'=>200,
                    'status'=>true,
                    'massege'=>'inserted success',
                    'error'=>false,
                    'data'=>$id
               );
          }else{
               throw new Exception();
          }
     }
     catch(Exception $e){
          $responce=array(
               'code'=>201,
               'status'=>false,
               'massege'=>'cannot Insert Record.',
               'error'=>$e->getMessage(),
               'data'=>[]
          );
     }
     header("content-type:application/json");
     http_response_code(200);
     echo json_encode($responce,JSON_PRETTY_PRINT);
     exit();

}

}


function process_put($id){
     global $resource;

     $formdata=$_REQUEST;
          $query=new query();
          try{
               if($query->update($resource,$formdata)->where('id',$id)->commit()){
                    $id=$query->getId();
                    $responce=array(
                         'code'=>200,
                         'status'=>true,
                         'massege'=>'update success',
                         'error'=>false,
                         'data'=>[
                              'id'=>$id,
                              'name'=>$formdata['name'],
                              'address'=>$formdata['address'],
                         ],
                    );
               }else{
                    throw new Exception();
               }
          }
          catch(Exception $e){
               $responce=array(
                    'code'=>201,
                    'status'=>false,
                    'massege'=>'cannot updated Record.',
                    'error'=>$e->getMessage(),
                    'data'=>[]
               );
          }
          header("content-type:application/json");
          http_response_code(200);
          echo json_encode($responce,JSON_PRETTY_PRINT);
          exit();
     
}

function process_patch(){

echo 'patch request';
}

function process_delete($id){

     global $resource;

     $formdata=$_REQUEST;
          $query=new query();
          try{
               if($query->delete($resource)->where('id',$id)->commit()){
                    $id=$query->getId();
                    $responce=array(
                         'code'=>200,
                         'status'=>true,
                         'massege'=>'delete success',
                         'error'=>false,
                         'data'=>[],
                    );
               }else{
                    throw new Exception();
               }
          }
          catch(Exception $e){
               $responce=array(
                    'code'=>201,
                    'status'=>false,
                    'massege'=>'cannot delete Record.',
                    'error'=>$e->getMessage(),
                    'data'=>[]
               );
          }
          header("content-type:application/json");
          http_response_code(200);
          echo json_encode($responce,JSON_PRETTY_PRINT);
          exit();
     
}