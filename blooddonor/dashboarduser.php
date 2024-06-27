<?php
include("usermethod.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
       <!-- Bootstrap CSS -->
   
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Document</title>
</head>
<style>
    body {
        background-image: url('bg2.jpg');
        height: 100px;
        padding-top: 10px;
    }

    table,
    th,
    td {
        border: 2px #2b2b2b solid;
        color: #2b2b2b;
    }

    table {

        background-color: #bde9ba;
    }

    th {
        background-color: #ffd78c;
    }
    .logo-img{
        margin-top: -4px;
      }
    
</style>
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


<body>
    <h1>All Users</h1>

    <a href="CRUD.php">Add New Record</a>
    <br>

    <div id="result"></div>
    <br>

    <table border="5">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>address</th>
            <th>Blood</th>



            <th>Action</th>
        </tr>
        <?php

        $response = getAllusers();

        $records = mysqli_num_rows($response);

        echo "No. of Records : " . $records . "<br>";

        if ($records > 0) {
            while ($data = mysqli_fetch_assoc($response)) {

                $name = $data['name'];
                $email = $data['email'];

                $blood = $data['blood'];
                $address = $data['address'];
                echo '
                    <tr>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $address . '</td>
                        <td>' . $blood . '</td>
                        <th>
                            <a href="edituser.php?email=' . $email . '">Edit</a>
                           
                        </th>
                    </tr>
        ';
            }
        } else {
            echo 'Sorry, There are no records....!!!';
        }
        ?>
    </table>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        function deleteDonor(email) {
            if (confirm("Are u sure to delete this record? ")) {
                $.ajax({
                    url: "deleteDonor.php",
                    method: "get",
                    data: {
                        "email": email
                    },
                    success: function(response) {
                        document.getElementById("result").innerHTML = response;
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    }
                })
            }
        }
    </script>




</body>

</html>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>