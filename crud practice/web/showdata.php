<?php
include_once __DIR__.'/dbname.php';
$records=mysqli_query($conn,"SELECT *from suraj_yadav");
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
    <table border="1">
        <tr>
            <th>Id</th>
            <th>NAME</th>
            <th>Adrress</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        <?php
        while($result=mysqli_fetch_array($records)){ 
        echo '<tr>';
        echo '<td>'.$result['id'].'</td>';
        echo '<td>'.$result['name'].'</td>';
        echo '<td>'.$result['address'].'</td>';
        echo "<td><a href='delete.php?rn=$result[id]'>Delete</a></td>";
        echo "<td><a href='edit.php?rn=$result[id]'>Edit</a></td>";
        echo '</tr>';
    }
    ?>
    </table>
</body>
</html>