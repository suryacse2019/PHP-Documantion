<?php
//wap in php to show foreach array
$data=[
[
'id'=>'1',
'name'=>'suraj yadav',
'class'=>'5th'
],
[
'id'=>'1',
'name'=>'suraj yadav',
'class'=>'5th'
],
[
'id'=>'1',
'name'=>'suraj yadav',
'class'=>'5th'
]
];
foreach($data as $user){
	echo "user ID is is:{$user['id']}\n";
	echo "user NAme is is:{$user['name']}\n";
	echo "user Class is is:{$user['class']}\n";
}
?>