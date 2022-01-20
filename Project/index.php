<?php
include "home.php";

?>

<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/font-awesome.css" rel="stylesheet"/>
<style>
.top1{
min-height:35px;

}
.top1 .fa{
height:25px;
border:1px solid white;
width:25px;
padding-top:.75%;
background:white;
color:#ffc107;
}
.top1 .fa:hover
{
transform:rotate(360deg);
transition:all ease 1s;
color:white;
background:#ffc107;
border:1px solid white;
}
.a{
    height:300px;
}
</style>
</head>
<body>
<script src="js/bootstrap.js"></script>

<div class="row slider">
<!--Start Slider -->
<div id="carouselExampleCaptions" data-bs-interval="2000" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/a1.jpg" class="d-block w-100 " style="max-height:500px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Heading 1</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/a3.jpg" class="d-block w-100" style="max-height:500px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Heading 2</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/b.jpg" class="d-block w-100" style="max-height:500px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Heading 3</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- End Slider -->
</div>
</div>
<div class="row latestproduct justify-content-evenly py-2">
<h4 class="text-center">Our <b class="text-warning">Latest Product</b></h4>
<div class="col-sm-3 py-2">
<!-- Bootstrap card-->
<div class="card">
<img src="images/d.jpg" class="top-img-card"/>
<div class="card-body">
<h5 class="card-title">Product 1</h5>
<p class="card-text">
could you tell me where in yii2 advanced template php.ini file? thanks. – 
 file ..normally is in the dir wher<br/>
 <span class="btn btn-warning">
<b class="fa fa-inr"></b><s>1599/-</s>999/-</span>
</p>
<a href="#" class="btn btn-outline-warning">Card<i class="fa fa-card"></i></a>
<a href="#" class="btn btn-outline-warning">Bye Now<i class="fa fa-card"></i></a>
</p>
</div>
</div>
<!-- end card-->

</div>
<div class="col-sm-3 py-2">
<!-- Bootstrap card-->
<div class="card">
<img src="images/d.jpg" class="top-img-card"/>
<div class="card-body">
<h5 class="card-title">Product 1</h5>
<p class="card-text">
could you tell me where in yii2 advanced template php.ini file? thanks. – 
 file ..normally is in the dir wher<br/>
 <span class="btn btn-warning">
<b class="fa fa-inr"></b><s>1599/-</s>999/-</span>
</p>
<a href="#" class="btn btn-outline-warning">Card<i class="fa fa-card"></i></a>
<a href="#" class="btn btn-outline-warning">Bye Now<i class="fa fa-card"></i></a>
</p>
</div>
</div>
<!-- end card-->

</div>
<div class="col-sm-3 py-2">
<!-- Bootstrap card-->
<div class="card">
<img src="images/d.jpg" class="top-img-card"/>
<div class="card-body">
<h5 class="card-title">Product 1</h5>
<p class="card-text">
could you tell me where in yii2 advanced template php.ini file? thanks. – 
 file ..normally is in the dir wher<br/>
 <span class="btn btn-warning">
<b class="fa fa-inr"></b><s>1599/-</s>999/-</span>
</p>
<a href="#" class="btn btn-outline-warning">Card<i class="fa fa-card"></i></a>
<a href="#" class="btn btn-outline-warning">Bye Now<i class="fa fa-card"></i></a>
</p>
</div>
</div>
<!-- end card-->

</div>
</div>


<div class="row intro bg-primary  justify-content-evenly py-3 bg-opacity-50">

<h4 class="text-center"> About <b class="text-warning">US</b></h4>
<div class="col-sm-9">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
 the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
 of type and scrambled it to make a type specimen book. It has survived not only five centuries,
 but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in
 the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop 
 publishing software like Aldus PageMaker including versions of Lorem Ipsum.
 sum.

Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page wh
en looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distributi
on of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
 desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search 
 for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the
 years, sometimes by accident, sometimes on purpose (injected humour and the like).


Where does it come from?
</div>
</div>
<div class="row contact justify-content-evenly">
<h4 class="text-center"> About <b class="text-warning">US</b></h4>
<div class="col-sm-4 p-4  frm bg-warning bg-opacity-50 ">
<!-- Input Group -->
Name
<div class="input-group">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
Name
<div class="input-group">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
Name
<div class="input-group">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
MEssege
<div class="input-group">
    <span class="input-group-text">With textarea</span>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>
<!-- End Input Group -->
</div>
<div class="col-sm-6 gmap">
<!-- Start Map -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.8941156072706!2d82.79575031501919!3d25.67480448367624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39903157e77c85d5%3A0x8da3a99f351b58b0!2ssuraj%20yadav!5e0!3m2!1sen!2sin!4v1641640413493!5m2!1sen!2sin" class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<!-- End Start Map -->
</div>
</div>
<div class="container-fluid pt-3">
    <div class="row">
        <div class="col-sm-4 a bg-primary"></div>
        <div class="col-sm-4 a bg-info"></div>
        <div class="col-sm-4 a bg-primary"></div>
    </div>
</div>
<div class="row register"></div>
<div class="row ufooter"></div>
<div class="row bfooter"></div>
</div>
</body>

</html>