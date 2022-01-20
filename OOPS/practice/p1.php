<?php

class calculation{
public $a,$b,$c;

public function sum(){

$this->c=$this->a+$this->b;
return $this->c;
}

}
$test=new calculation();
$test->a=10;
$test->b=20;
echo $test->sum();
?>