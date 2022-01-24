<?php
//wap in php to show call static method 
class test{
	private static function sp(){
		echo "hii hello surya";
	}
	public static function __callstatic($method,$argv)
	{
		if(method_exists(__class__,$method)){
			call_user_func_array([__class__,$method],$argv);
		}
		else{
			echo "not values";
		}
	}
}
test::sp();
?>