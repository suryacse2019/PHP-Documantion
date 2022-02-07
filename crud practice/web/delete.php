<?php
include_once __DIR__.'/dbname.php';
include_once __DIR__.'/showdata.php';
?>
<?php
$id=$_GET['rn'];
$query=mysqli_query($conn,"DELETE from suraj_yadav where id='$id'");
if($query){
    echo header("location:showdata.php");
}
?>