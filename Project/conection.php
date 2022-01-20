<?php

$server="localhost";
$user="root";
$password="123";
$db="project1";

$con=mysqli_connect($server,$user,$password,$db);

?>

<?php
if(isset($_POST['submit']))
{
$name=$_POST['Name'];
$number=$_POST['number'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];

$res=mysqli_query($con,"INSERT into form values('$name','$number','$address','$email','$password')");

if($res)
    {
        echo "<script>alert('Successful')</script>";
        header("location:login.php");
    }
    else
    {
        echo "<script>alert('Invalid credentials..')</script>";
        header("location:register.php");
    }
}
?>