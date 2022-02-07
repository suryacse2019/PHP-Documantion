<?php
include_once __DIR__.'/query-builder/Driver.php';
require_once __DIR__."/functions.php";
$records=$query->select("*")->table('suraj_yadav')->allRecords();
//print_r($records);
?>

<html>

<head>
    <title>Show Records</title>
</head>

<body>
    <table style="width:100%" rules="all" border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>Address</th>
            <th>edit1</th>
            <th>edit2</th>
            <th>delete1</th>
            <th>delete2</th>
        </tr>
        <?php foreach($records as $row){ ?>
        <tr>
            <td><?php echo $row->id; ?></td>
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->address; ?></td>
            
            <td><a href="<?php echo url("edit-1.php?id={$row->id}"); ?>">edit1</a></td>
            <td><a href="<?php echo url("edit-2.php?id={$row->id}"); ?>">edit2</a></td>
            <td><a href="<?php echo url("delete-1.php?id={$row->id}"); ?>">delete1</a></td>
            <td><a href="javascript:confirmDelete('<?php echo $row->id ?>')">delete2</a></td>
            
        </tr>
        <?php } ?>
    </table>
    <script>
        function confirmDelete(id){
            if(window.confirm("Are you sure want ot delete?")){
                window.location.href="<?php echo url('delete-2.php?id=') ?>"+id;
            }
        }
    </script>
</body>

</html>