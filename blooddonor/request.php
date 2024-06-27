<?php
ob_start();
include('requestmethod.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    
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
  
 
  
   
 
  <body onload="load()">
     <!-- Navbar -->
  <style>
    body {
      height: 100px;
      padding-top: 10px;
    }

    .logo-img {
      margin-top: -4px;
    }
  </style>
 
 <!-- Navbar Start -->
  <!-- Navbar -->
  <style>
      body{
       height: 100px;
        padding-top: 10px;
        background: url('bg.jpg');
      }
      .logo-img{
        margin-top: -4px;
      }
      </style>
 
    <!-- Navbar -->
    <?php
    include('header.php');
    if(!isset($_SESSION['email']))
    {
      $_SESSION['link']="request.php?requestTo=".$_GET['requestTo'];
      header(' location:userlogin.php');
       
    }
    ?>
    <!-- Navbar End -->


  <div class="container">
    <h2 class="td" style="text-align: center; color:azure"> Fill THE DETAILS FOR BLOOD.!</h2>
    <div class="container">
      <form action="" method="POST">
      <div class="mb-3">
    <label for="firstname" class="form-label"style="color:white">Request By</label>
    <input type="email" class="form-control"name="requestby" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="name" value="<?php echo $_SESSION['email'];?>" readonly>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"style="color:white">Request To</label>
    <input type="email" class="form-control"name="requestto" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="name" value="<?php echo $_GET['requestTo'];?>" >
    </div>
    <div class="row mb-3">
    <label class="form-label"style="color:white">Date</label>
    <div class="col">
    <input type="datetime-local" class="form-control" name="date" id="date" placeholder="Enter date" min="">
    </div>
    </div>
    <div class="mb-3">
    <label for="firstname" class="form-label"style="color:white">purpose</label>
    <input type="text" class="form-control"name="purpose" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="name">
  </div>
  <div class="row mb-3">
    <label for="floatingTextarea" style="color:white">address</label>
    <div class="form-floating">
    <div class="col">
  <textarea class="form-control" placeholder="write here..." id="floatingTextarea" name="address"></textarea>
  </div>
  </div>
</div>
  <div class="dropdown mb-3">
  <p style="color:white;">Search Blood Group</p>
  <select class="form-select"id="chose" name="bloodgrp">
  <option></option>
  <option>A+</option>
  <option>A+</option>
  <option>AB+</option>
  <option>AB-</option>
  <option>B+</option>
  <option>B+</option>
  <option>O+</option>
  <option>O+</option>
</select>
</div>

<button type="submit" class="btn btn-success" name="add">Submit</button>
  <button type="Reset" class="btn btn-danger">Reset</button>
  <div class="mb-3">
      <?php
       if(isset($_POST['add']))
       {
       
        $response = addadmin($_POST);

        if ($response == 1) {
          echo "<p style='color:white'>Data inserted successfully</p>";
        } else {
          echo "<p style='color:red'>Data  not inserted </p>";
        }
       }
       
  
     

      ?>
    </div>





      </form>
  </div>
  </div>
  <script>
    
      function load()
      {
        var today = new Date().toISOString().slice(0, 16);
        console.log("date"+today)
        document.getElementById("date").min = today;
      }
    </script>

    


     
 
  
 
 


   
      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>

</html>
<?php
ob_end_flush();
 ?>
    
      