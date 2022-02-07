<?php
$name='p3.json';

$sp=file_get_contents($name);

$pq=json_decode($sp,true);
echo "<table border='1'>";
foreach($pq as list("id"=>$id,"name"=>$name,"address"=>$address)){
	echo "<tr><td>{$id}</td><td>{$name}</td><td>{$address}</td></tr>";
}
echo "</table>";

//print_r($pq);
?>