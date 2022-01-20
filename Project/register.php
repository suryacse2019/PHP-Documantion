<?php
include "home.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .a{
            margin:0px auto;
        }
        input{
            height:30px;
        }
        input{
            height:40px;
        }
    </style>
</head>
<body>
        <!--Start Register Form-->
        <h4 class="text-center pt-5">Registration <b class="text-info">Form</b></h4>
        <div style="height:3px; width:180px; margin:0px auto;" class="bg-info"></div>
        
        <div class="row justify-content-center pt-3">
            <div class="col-sm-6">
 <form action="conection.php" method="post">
  <div class="form-group">
    Name:
    <input type="text" name="Name" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name*">
      </div>
  <div class="form-group">
    Mobile No:
    <input type="number" name="number" required class="form-control" id="exampleInputPassword1" placeholder="Enter Mobile No">
  </div>
  <div class="form-group">
    Address:
    <input type="text" name="address" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address*">
      </div>
      <div class="form-group">
    Email:
    <input type="email" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email*">
      </div>
      <div class="form-group">
    Password:
    <input type="password" name="password" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password*">
      </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input type="submit" name="submit"  class="btn btn-primary" />
</form>
        </div>
        </div>

        <!--End Register form-->
</body>
</html>

<?php
include "footer.php";
?>
