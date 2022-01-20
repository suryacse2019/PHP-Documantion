<?php
include "conection.php";

$id=$_GET['rn'];

$query="DELETE from form where Name='$id'";

$data=mysqli_query($con,$query);
if($data)
{
    echo "<script>alert('Deleted successful..')</script>";
    header('location:admin.php');
}

?>