<?php
    include('MyMethods.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Hello, world!</title>

    <style>
        .login{
            width: 60%;
            margin-left: 20%;
            margin-top: 5%;
            padding: 10px;
            box-shadow: 2px 5px 5px grey;
        }
    </style>

  </head>
  <body>
   
     
   

  <!-- Navbar -->
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
    <img src="download.png" width="30" height="24" class="d-inline-block logo-img">
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

      
        
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <!-- Navbar -->
     
    <!-- navbar -->
    <div class="row mt-5">
      <div class="col-lg-6 col-md-12 col-sm-12 mb-5">
          <form class="login" action="" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Donor Registration</label>
                
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail12" class="form-label">Enter Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail12" aria-describedby="emailHelp">
                
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail123" class="form-label">Enter Address</label>
                <input type="text" name="address" class="form-control" id="exampleInputEmail123" aria-describedby="emailHelp">
                
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail12" class="form-label">Enter Contact</label>
                <input type="number" name="contact" class="form-control" id="exampleInputEmail12" aria-describedby="emailHelp">
                
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail124" class="form-label">Enter Blood Group</label>
                <input type="text" name="blood_group" class="form-control" id="exampleInputEmail124" aria-describedby="emailHelp">
                
              </div>

              <button type="submit" name="register" class="btn btn-primary">Submit</button>

              <div class="mb-3">
                Already Registrered? <a href="donorlogin.php">Login</a>
              </div>


              <div class="mb-3">
                <?php
                    if(isset($_POST['register']))
                    {
                        $response = registerDonor($_POST);

                        if($response == 1)
                        {
                            echo "Registration Success";
                        }
                        else{
                            echo "Registration Failed";
                        }
                    }
                ?>
              </div>
            </form>
      </div>


    
    
        <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="img3.jpg" alt="" width="70%" clas="m">
        </div>
      </div>


      
    
    <!-- Login Form -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>