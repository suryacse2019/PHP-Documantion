<?php
$name=array(
"mahesh"=>array("name"=>1000,"suresh"=>2000,"manish"=>3000),
"monu"=>array("shivam"=>200,"jitesh"=>30004,"jaisingh"=>5000),
"jignesh"=>array("suresh"=>3002,"bholu"=>3827,"tannu"=>7573),
);

//echo $name["mahesh"]["name"];
foreach($name as $key=>$value)
{
foreach($value as $keys=>$value1)
{
echo $key."=>".$keys."=>".$value1."\n";
}
}
?> 