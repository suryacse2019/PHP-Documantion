<?php
include_once __DIR__.'/dbname.php';
?>
<?php
$id=$_GET['rn'];
$query=mysqli_query($conn,"SELECT *from suraj_yadav where id='$id'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <?php while($res=mysqli_fetch_array($query)){ ?>
            name: <input type="text" name="name" value="<?php echo $res['name'] ?>"> <br><br>
        address: <input type="text" name="address" value="<?php echo $res['address'] ?>"> <br><br>
        <input type="submit" name="" id="">
        <?php } ?>
    </form>
</body>
</html>