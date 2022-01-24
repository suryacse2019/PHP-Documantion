<?php
class student{
	public function show($name){
		foreach($name->friend() as $names){
			echo $names.PHP_EOL;
		}
	}
}
class teacher{
	public function friend(){
		return ["suraj yadav","mahesh","suresh"];
	}
}
$test=new student();
$tec=new teacher();
$test->show($tec);
?>