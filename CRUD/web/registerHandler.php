<?php
require_once __DIR__."/functions.php";
require_once __DIR__.'/query-builder/Driver.php';
?>

<?php
$name=post('name');
$address=post('address');
if($query->insert('suraj_yadav',[
	'name'=>$name,
	'address'=>$address,
]))
{
    echo "data inserted with PK =".$query->getId();
}
else
{
    echo "Inserted error";
}
//echo $name;
//echo $address;


?>