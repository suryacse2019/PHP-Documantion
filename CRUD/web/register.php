<!DOCTYPE html>
<?php
require_once __DIR__."/functions.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo url("registerHandler.php")?>" method="post">
        Name: <br>
        <input type="text" name="name"><br>
        address: <br>
        <input type="text" name="address"><br>
        <input type="submit" name="submit">
    </form>
    
</body>
</html>