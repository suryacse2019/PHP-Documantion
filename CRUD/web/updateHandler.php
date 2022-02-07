<?php
include_once __DIR__.'/query-builder/Driver.php';
require_once __DIR__."/functions.php";
$name=post('name');
$address=post('address');
$id=post('id');
    $query=new query();
    if($query->update('suraj_yadav',[
        'id'=>$id,
        'name'=>$name,
        'address'=>$address
    ])->where('id',$id)->commit()){
        header("Location:".url('show.php?status=record-updated'));
    }else{
        exit('Cannot cannot update the record');
    }
?>