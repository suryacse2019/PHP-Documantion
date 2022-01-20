<?php
class a{
	public $name="suraj yadav";
	public function show($s1,$s2){
		return $s1*$s2;
	}
}
class b extends a{
	public $name="mahesh yadav";
	public function show($s1,$s2){
		return $s1+$s2;
	}
}
$test=new a();
echo $test->show(5,10);

?>