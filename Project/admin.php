<?php
include "conection.php";
$sp=mysqli_query($con,"SELECT *from form");
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/font-awesome.css" rel="stylesheet"/>
<style>
table, th, td {
  border: 1px solid black;
  border:0px auto;
}
.top1{
min-height:35px;

}
.top1 .fa{
height:25px;
border:1px solid white;
width:25px;
padding-top:.75%;
background:white;
color:#0dcaf0;
}
.top1 .fa:hover
{
transform:rotate(360deg);
transition:all ease 1s;
color:white;
background:#ffc107;
border:1px solid white;
}

</style>
</head>
<body>
<script src="js/bootstrap.js"></script>
<div class="container-fluid">
<div class="row top1 bg-info fw-bold py-1 text-light text-center">
<div class="col-sm-4">
<i class="fa fa-phone"></i>+91-7518141123
<i class="fa fa-envelope"></i>2019@gmail.com
</div>
<div class="col-sm-4">
An ISO 9001:2015
</div>
<div class="col-sm-4">
<i class="fa fa-facebook"></i>
<i class="fa fa-twitter"></i>
<i class="fa fa-youtube"></i>
<i class="fa fa-whatsapp"></i>
</div>
</div>
<div class="row header bg-light">
<div class="col-sm-3 logo text-center fs-3">
<span>E-Learning <b class="text-info">Hub</b> <i class="fa fa-graduation-cap"></i></span>
</div>

<div class="col-sm-9 menu">
<!-- Start Menu -->
<nav class="navbar navbar-expand-lg navbar-light my-0 py-0" id="menu">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-home"></i> Home</a>
        </li>
		<li class="nav-item">
          <a class="nav-link " aria-current="page" href="#"><i class="fa fa-envelope"></i> Register</a>
        </li>
		<li class="nav-item">
          <a class="nav-link " aria-current="page" href="#"><i class="fa fa-phone"></i> Contact us</a>
        </li>
		
		<li class="nav-item">
          <a class="nav-link " aria-current="page" href="#"><i class="fa fa-login"></i> Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#"><i class="fa fa-login"></i> Logout</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
</div>
<!-- End Menu -->
<h4 class="text-center p-5">Admin <b class="text-info">Panal</b></h4>
<div class="container">
<div class="row justify-content-evenly">
    <div class="col-sm-4">
    <table border="1">
    <?php
    echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>Address</th>';
    echo '<th>Mobile No</th>';
    echo '<th>Email</th>';
    echo '<th>Password</th>';
    echo '<th>Delete</th>';
    echo '</tr>';
    while($result=mysqli_fetch_array($sp))
    {
        echo '<tr>';
        echo '<td>'.$result['Name'].'</td>';
        echo '<td>'.$result['address'].'</td>';
        echo '<td>'.$result['number'].'</td>';
        echo '<td>'.$result['email'].'</td>';
        echo '<td>'.$result['password'].'</td>';
        echo "<td><a href='delete.php?rn=$result[Name]'>Delete</a></td>";
        echo '</tr>';
    }
    ?>
    </table>
    </div>
</div>
</div>
</body>
</html>
