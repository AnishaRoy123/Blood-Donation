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
  <?php
  session_start();
  if(!isset($_SESSION['email']))
  {
    header('location:home.php');
  }
  ?>
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
    <div class="container">
    <h2 class="td" style="text-align: center;">welcome our Dashboard!</h2>
    <div class="container">
    </div>
    </div>
