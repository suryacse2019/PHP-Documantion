
<?php
require_once __DIR__."/functions.php";
include_once __DIR__.'/query-builder/Driver.php';
$id=get('id');
if(!empty($id)){
  $query=new Query();
    $records=$query->select('*')->table('suraj_yadav')->where('id',$id)->first();
}

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
    <form action="<?php echo url("updateHandler.php")?>" method="post">
        Name: <br>
        <input type="text" name="name" value="<?php echo $records->name; ?>"><br>
        <input type="hidden" name="id" value="<?php echo $records->id; ?>"> 
        address: <br>
        <input type="text" name="address" value="<?php echo $records->address; ?>"><br>
        <input type="submit" value="update" name="submit">
    </form>
    
</body>
</html>

