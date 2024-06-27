<?php
include('MyMethods.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- Template Stylesheet -->
      <link href="css/style.css" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <title>show page</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .container{
	        max-width: 1170px;
	        margin:auto;
       }
       .row{
	        display: flex;
	        flex-wrap: wrap;
        }
        ul{
	        list-style: none;
        }
        h1{
           color: #fff;
           text-align: center;
           height: 5rem;
           line-height: 5rem;
       }
       body{
            background: linear-gradient(rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)),url(back.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .padding{
            padding: 50px;
            padding-top: 0;
          }
        #logo{
            height:60px;
            width:60px;
            border-radius:50%;
            border:1px solid red;
        }
  #ser{
    color:white;
    margin-left:20%;
    display:inline-block;
  }
  #choose{
    width:20%;
    display:inline-block;
    margin-left:20px;
  }
  #sc{
    margin-top:20px;
      height:35px;
    }
  #serch{
    margin-left:20px;
  }
  #edon{
    display:inline-block;margin-top:40px;margin-left:-15px;
  }
  @media screen and (max-width: 800px){
    #edon{
  margin-left:-180px;
    }
  }
    </style>
  </head>
  <body>
 
 <!-- Navbar Start -->
 <style>
       body{
       height: 100px;
        background: url('bg2.jpg');
        padding-top: 10px;
      }
      .logo-img{
        margin-top: -4px
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

      
        
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <a href="showrequest.php"><button class="btn btn-primary" type="submit">Search</button></a>
      </form>
    </div>
  </div>
</nav>
  
    <!-- Navbar End -->
    <br><form action="" method="post">
      <div class="dropdown">
        <h4 id="ser">Search Blood Group</h4>
        <select class="form-select row" id="choose" name="blood_group">
        <option selected>Select Blood Group</option>
        <option>A+</option>
        <option>A-</option>
        <option>AB+</option>
        <option>AB-</option>
        <option>B+</option>
        <option>B-</option>
        <option>O+</option>
        <option>O-</option>
      </select>
      <input class="btn btn-success m-5" type="submit" value="Search" name="search">
        
      </div><br><br>
    </form>
<!-- <table></table> -->
<h1>SHOW REQUEST..</h1>
<br>
<table class="table table-dark table-striped">
  
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Blood Group</th>
        <th scope="col">Request Donor</th>
    
    </tr>
    <?php
       if(isset($_POST['search']))
       {
        
        $blood_group = $_POST['blood_group'];
        // echo "Group: ".$blood_group;

        $responce =getAllDonorsByGroup($blood_group);
        //echo "Records ".mysqli_num_rows($responce);
          if(mysqli_num_rows($responce)>0)
          {
              while($data = mysqli_fetch_assoc($responce))
              {
                  echo '
                  <tr>             
                  <td  class="table-light " style=" background-color: aquamarine; border: 1px solid black;
                  border-collapse: collapse;">'.$data['name'].'</td>   
                  <td class="table-light " style=" background-color: aquamarine; border: 1px solid black;
                  border-collapse: collapse;">'.$data['email'].'</td> 
                  <td  class="table-light" style=" background-color: aquamarine; border: 1px solid black;
                  border-collapse: collapse;">'.$data['address'].'</td> 
                  <td class="table-light" style=" background-color: aquamarine; border: 1px solid black;
                  border-collapse: collapse;">'.$data['blood_group'].'</td> 
                  <td class="table-light" style=" background-color: aquamarine; border: 1px solid black;
                  border-collapse: collapse;"> 

                  <a href="request.php?requestTo='.$data['email'].'" class="btn btn-info">Request</a>
                  </td>
                  
                 </tr> ';
                  
                  
               

                  
                 
              }
          }
          else
          {
              echo "<h1 style='color:black; text-align:center'>no record found</h1>";
          }
       }
    ?>

</table>

<!-- <table></table> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>

   
    
       <!-- Footer Start -->
       
    <!-- Footer End -->


                   <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>