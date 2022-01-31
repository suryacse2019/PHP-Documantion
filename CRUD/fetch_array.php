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
	while($row=mysqli_fetch_array($result_set,MYSQLI_BOTH)){
		$data[]=$row;
	}
}else if(mysqli_num_rows($result_set)==0){
	echo "no record found";
}
else{
	echo "error".mysqli_error($conn);
}
$i=1;
foreach($data as $row){
	$table->addRow()
		  ->addColumn($i)
		  ->addColumn($row[0])
		  ->addColumn($row[1])
		  ->addColumn($row[2]);
		  $i++;
}
$table->display();

?>