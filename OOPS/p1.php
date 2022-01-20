<?php
//wap in php to show class and object in php 
class tv{

var $model='xl tv';
var $type='led';
var $price=50000;
var $color='black';
var $varient='curved';
public function showInformation(){

echo "the model for ".__class__."{$this->model}\n";
echo "the type for ".__class__."{$this->type}\n";
echo "the price for ".__class__."{$this->price}\n";
echo "the color for ".__class__."{$this->color}\n";
echo "the varient for ".__class__."{$this->varient}\n";

}
public function volume()
{
echo "volume up"; 
}
}
$tv=new tv();
$tv->showInformation();
echo "Tv valume will be";
echo "{$tv->volume()}";
?>