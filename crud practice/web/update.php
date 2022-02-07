<?php
include_once __DIR__.'/dbname.php';
include_once __DIR__.'/showdata.php';
include_once __DIR__.'/insert.php';
?>
<?php
$id=$_GET['rn'];
$name=$_POST['name'];
$address=$_POST['address'];
$query=mysqli_query($conn,"UPDATE suraj_yadav set name='$name' , address='$address' where id='$id'");
if($query){
    echo header("location:showdata.php");
}
?>