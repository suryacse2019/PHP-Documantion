<?php
//wap in php to cycleclick 
class oldpapa{
	public function bike(){
		echo "bike function is oldpapa \n";
	}
	public function rot(){
		(new beta())->roti();#is-relationship
	}
}
class beta extends oldpapa{
	public function cycle(){
		echo "cycle function is oldpapa \n";
	}
	public function roti(){
		echo "1-roti method from beta \n";
	}
}
$oldpapa=new oldpapa();
$oldpapa->bike();
$oldpapa->rot();
$beta=new beta();
$beta->cycle();
$beta->roti();
?>
