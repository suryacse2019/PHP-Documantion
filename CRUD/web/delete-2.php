<?php
include_once __DIR__.'/query-builder/Driver.php';
require_once __DIR__."/functions.php";
$id=get('id');
if(!empty($id)){
    $query=new query();
    if($query->delete('suraj_yadav')->where('id',$id)->commit()){
        header("Location:".url('show.php?status=record-deleted'));
    }else{
        exit('Cannot Deleted the record');
    }
}
?>