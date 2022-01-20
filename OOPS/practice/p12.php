<?php
interface a{
	public function name($name);
}
interface b{
	public function address($add);
}
class d implements a,b{
	public function name($name){
		echo $name;
	}
	public function address($add)
	{
		echo $add;
	}
}
$test=new d();
$test->name("suraj yadav");
$test->address("sakhoi");

?>