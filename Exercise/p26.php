<?php
$name=array(
"suraj"=>array("mahesh"=>400,"suresh"=>500),
"shivam"=>array("jaiho"=>300,"monu"=>567),
);
for($i=0; $i<count($name); $i++)
{
for($j=0; $j<count($name[$i]); $j++)
{
echo $name[$i][$j];

}
}
?>