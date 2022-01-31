<?php
//wap in php to cionvert array of object to associative Array
$json=file_get_contents(__DIR__.'/student.json');
$student_Array=json_decode($json,true);
$students=$student_Array['data'];
?>