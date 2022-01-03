<?php
$name=array(
"mahesh"=>array("name"=>1000,"suresh"=>2000,"manish"=>3000),
"rahul"=>array("jai"=>300,"jaiho"=>500,"divya"=>456),
"deepak"=>array("mathsice"=>4956,"hfie"=>8574,"kdjsk"=>8449)
);

foreach($name as $key=>$value)
{

foreach($value as $keys=>$data)
{
echo $key."\n";
}
}
?>