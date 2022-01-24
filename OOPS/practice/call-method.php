<?php 
//wap in php to show call method 
class show{
	private $first_name;
	private $last_name;
	private function test($n1,$n2){
		$this->first_name=$n1;
		$this->last_name=$n2;
	}
	public function __call($method,$argv){
		if(method_exists($this,$method)){
			call_user_func_array([$this,$method],$argv);
		}
		else
		{
			echo "private can not access";
		}
	}
}
$sp=new show();
$sp->test("suraj","yadav");
?>