<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

       <!-- Bootstrap CSS -->
   
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    
    <title>Hello, world!</title>
  </head>
   <body>
        
    <!-- Navbar -->
    <style>
      body{
       height: 100px;
        padding-top: 10px;
      }
      .logo-img{
        margin-top: -4px;
      }
      </style>
   
    <nav class="navbar navbar-expand-lg navbar-dark  bg-danger">
  <div class="container">
    <a class="navbar-brand" href="#">
    <img src="download.jpg" width="30" height="24" class="d-inline-block logo-img">
      eDONOR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userlogin.php">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="donorlogin.php">Donor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">logout</a>
        </li>

      
        
      <form class="d-flex">
        
        <a href="showrequest.php" class="btn btn-primary">Search</a>
      </form>
    </div>
  </div>
</nav>
    <!-- Navbar -->
     
	<!--Carousel-->
  <style>
  .c-img {
      width: 100%;
      height: 700px;
    }
    </style>


 
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img1.jpg" class="d-block c-img" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img3.jpg" class="d-block c-img" alt="...">
    </div>
    <div class="carousel-item">
    <img src="blood-donation-vector-logo-badges-collection-world-blood-donor-day-june-heart-blood-drop-illustration-blood-donate-set-47885544.jpg"d-block c-img" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  	<!--Carousel-->

     <!-- Login Form -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
    <style>  
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');  
section {  
    padding: 60px 0;  
}  
section .section-title {  
    text-align: center;  
    color: #007b5e;  
    margin-bottom: 50px;  
    text-transform: uppercase;  
}  
#footer {  
    background: #bd2130;  
}  
#footer h5 {  
   padding-left: 10px;  
    border-left: 3px solid #eeeeee;  
    padding-bottom: 6px;  
    margin-bottom: 20px;  
    color:#ffffff;  
}  
#footer a {  
    color: #ffffff;  
    text-decoration: none !important;  
    background-color: transparent;  
}  
#footer ul.social li {  
    padding: 3px 0;  
}  
#footer ul.social li a i {  
    margin-right: 5px;  
    font-size:25px;  
    -webkit-transition: .5s all ease;  
    -moz-transition: .5s all ease;  
    transition: .5s all ease;  
}  
#footer ul.social li:hover a i {  
    font-size:30px;  
    margin-top:-10px;  
}  
#footer ul.social li a  
{  
    color:#ffffff;  
}  
#footer ul.social li a:hover {  
    color:#eeeeee;  
}  
#footer ul.quick-links li a {  
    color:#ffffff;  
}  
#footer ul.quick-links li {  
    padding: 3px 0;  
    -webkit-transition: .5s all ease;  
    -moz-transition: .5s all ease;  
    transition: .5s all ease;  
}  
#footer ul.quick-links li:hover {  
    padding: 3px 0;  
    margin-left:5px;  
    font-weight:700;  
}  
#footer ul.quick-links li a i {  
    margin-right: 5px;  
}  
#footer ul.quick-links li:hover a i {  
    font-weight: 700;  
}  
@media (max-width:767px) {  
#footer h5 {  
      padding-left: 0;  
    border-left: transparent;  
    padding-bottom: 0px;  
    margin-bottom: 10px;  
}  
}  
h2 {  
padding: 25px 0;  
text-align: center;  
color: #fff;  
background: #7c8490;  
}  
</style>  
<body>  
  
<section id="footer">  
<div class="container">  
<div class="row text-center text-xs-center text-sm-left text-md-left">  
<div class="col-xs-12 col-sm-4 col-md-4">  
<h5> Quick links </h5>  
  <ul class="list-unstyled quick-links">  
    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> Home </a> </li>  
    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> About </a> </li>  
    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> FAQ </a> </li>  
    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> Get Started </a> </li>  
              <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> Videos </a> </li>  
</ul>  
</div>  
          <div class="col-xs-12 col-sm-4 col-md-4">  
    <h5> Quick links </h5>  
    <ul class="list-unstyled quick-links">  
    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> Home </a> </li>  
    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> About </a> </li>  
    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> FAQ </a> </li>  
    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> Our Services </a> </li>  
    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> Expert Team </a> </li>  
    </ul>  
    </div>  
    <div class="col-xs-12 col-sm-4 col-md-4">  
    <h5> Quick links </h5>  
             <ul class="list-unstyled quick-links">  
     <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> Home </a> </li>  
    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> About </a></li>  
    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> FAQ </a> </li>  
    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> Get Started </a> </li>  
    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> Contact </a> </li>  
    </ul>  
    </div>  
    </div>  
    <div class="row">  
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">  
    <ul class="list-unstyled list-inline social text-center">  
    <li class="list-inline-item"> <a href="#"> <i class="fa fa-facebook"> </i> </a> </li>  
             <li class="list-inline-item"> <a href="#"> <i class="fa fa-twitter"> </i> </a> </li>  
    <li class="list-inline-item"> <a href="#"> <i class="fa fa-instagram"> </i> </a> </li>  
    <li class="list-inline-item"> <a href="#"> <i class="fa fa-google-plus"> </i > </a> </li>  
    <li class="list-inline-item"> <a href="#"> <i class="fa fa-envelope"> </i> </a> </li>  
    </ul>  
    </div>  
    <hr>  
    </div>      
    <div class="row">  
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">  
   <p class="h6"> 2021 ? All right Reversed. <a class="text-green ml-2" href="#" target="_blank">             Anisha Roy </a> </p>  
    </div>  
    <hr>  
    </div>      
    </div>  
    </section>  
</body>  
</html>   

 
    
    