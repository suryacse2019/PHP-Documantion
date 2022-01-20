<?php
$server="localhost";
$user="root";
$password="123";
$db="project1";

$con=mysqli_connect($server,$user,$password,$db);

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $address=$_POST['address'];

    $res=mysqli_query($con,"INSERT into form1 values ('$name','$address')");
    
}

?>