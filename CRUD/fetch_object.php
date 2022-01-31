<?php
#make connection_aborted
include __DIR__.'/dbconect.php';
require __DIR__.'/vendor/autoload.php';

$table=new lucidframe\console\consoleTable();

$table
	->addHeader('SR.No.')
	->addHeader('id')
	->addHeader('Name')
	->addHeader('Email');
	
 #prepare the query
 $sql="SELECT *from emp";
 
 #execute and fire the query
 
$result_set=mysqli_query($conn,sql);
if(mysqli_num_rows($result_set)>0){
	$data=[];
	while($row=mysqli_fetch_object($result_set,BOTH)){
		$data[]=$row;
	}
}else if(mysqli_num_rows($result_set)==0){
	echo "no record found";
}
else{
	echo "error".mysqli_query_error($conn);
}
$i=1;
foreach($data as $row){
	$table->addRow()
		  ->addColumn($i)
		  ->addColumn($row->id)
		  ->addColumn($row->name)
		  ->addColumn($row->email);
		  $i++;
}
$table->display();

?>