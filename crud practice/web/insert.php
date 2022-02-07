<?php
include_once __DIR__.'/dbname.php';
?>

<?php
$name=$_POST['name'];
$address=$_POST['address'];

$res=mysqli_query($conn,"INSERT into suraj_yadav (name,address) values('$name','$address')");

if($res)
    {
        echo "data inserted with PK = ".mysqli_insert_id($conn);
    }
    else
    {
        echo "data is not insert".mysqli_error();
    }
?>