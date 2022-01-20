<?php
class persion{

public $name,$sp;

public function man(){

echo "Name is :".$this->name;

}

}
$test=new persion();

$test->name="suraj";

echo $test->man();
?>