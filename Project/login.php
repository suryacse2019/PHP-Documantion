<?php
include "home.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/font-awesome.css" rel="stylesheet"/>
    <title>Document</title>
    <style>
        input{
            height:40px;
        }
    </style>
</head>
<body>
<script src="js/bootstrap.js"></script>
<div class="row justify-content-center pt-5">
<div class="col-sm-5  w-50">
<form action="" method="post">
    
<h4 class="text-center">Login <b class="text-info">Form</b></h4>
<div style="height:3px; width:140px; margin:0px auto;" class="bg-info"></div>
  <div class="form-group pt-5">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="login" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
    
</body>
</html>

<?php
include "conection.php";

if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  $suraj="SELECT *from form where email='$email' && password='$password'";

  $mysqli=mysqli_query($con,$suraj);
  $total=mysqli_num_rows($mysqli);
  //echo $total;
  if($total==1)
  {
    echo "<script>alert('Login successful..')</script>";
    echo "<script>window.open('studentpanal.php')</script>";
  }
  else
  {
    echo "<script>alert('Invalid id and password')</script>";
  }

}
?>

<?php
include "footer.php";
?>