<?php
class persion{
public $name;
public function __construct($t1){
$this->name=$t1;
}
public function show(){

echo "Name is ".$this->name;

}

}
$p1=new persion("suraj yadav");
echo $p1->show();

?>