<?php
    include("MyMethods.php");
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
    <!-- navbar -->
    <!-- Navbar -->

  <!-- Navbar -->
    <!-- Navbar -->
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
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
  <!--navbar-->
    <!-- navbar -->
    <div class="row mt-5">
      <div class="col-lg-6 col-md-12 col-sm-12 mb-5">
          <form class="login" action="" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" style="color:red;">Donor Login</label>
                
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" style="color: #cccccc;">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" style="color: #cccccc;">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" style="color: #cccccc;">
                <label class="form-check-label" for="exampleCheck1" style="color: #cccccc;">Check me out</label>
              </div>
              <button type="submit" name="login" class="btn btn-primary">Submit</button>

              <div class="mb-3">
               <p style="color: #cccccc;">  New Registration? <a href="donor_registration.php">Click Here</a></p>
              </div>

              <div class="mb-3">
                <?php
                    if(isset($_POST['login']))
                    {
                        $resp = loginDonor($_POST);

                        $records = mysqli_num_rows($resp);
                        
                        if($records > 0)
                        {
                            header('location:dashboard.php');
                        }
                        else{
                            echo "<p style='color:red'>Sorry invalid email or password</p>";
                        }
                    }
                ?>
              </div>

            </form>
      </div>


    
    
        <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="img4.png" alt="" width="80%" clas="m">
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