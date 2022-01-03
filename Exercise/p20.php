<?php
$name=array("suraj"=>500,"mahesh"=>1000,"suresh"=>2000,"jaisingh"=>3000);
$key=array_keys($name);
$i=0;
while($i<count($name))
{
echo $key[$i]."=>".$name[$key[$i]]."\n";
$i++;
}

?>  