
<?php
//wap in php to show sort and rsort

$a=['10'=>'a','20'=>'b','30'=>'c','40'=>'d'];
asort($a);
print_r($a);
arsort($a);
print_r($a);

?>