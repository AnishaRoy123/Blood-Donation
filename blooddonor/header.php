



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
          
            <a  href="showrequest.php"><button class="btn btn-primary" type="submit">Search</button></a>
           
          </form>
          <?php
        if(isset($_SESSION['email']))
        {
            echo'
            <a class="nav-link" href="logout.php"><button class="btn btn-outline-success m-2" type="submit">Search</button></a>
            ';
        }
        ?>
        
       
       
      </div>
    </div>
  </nav>