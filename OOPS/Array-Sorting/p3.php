
<?php
//wap in php to show sort and rsort

$a=['10'=>'a','5'=>'b','30'=>'c','40'=>'d'];
ksort($a);
print_r($a);
krsort($a);
print_r($a);

?>