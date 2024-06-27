<?php
    include('MyMethods.php');
    $email = $_GET['email'];
    $res = deleteDonor($email);

    if($res == 1)
    {
        echo "deletion Success";
    }
    else{
        echo "Deletion Failed";
    }
?>