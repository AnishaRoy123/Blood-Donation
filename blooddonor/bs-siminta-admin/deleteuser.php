<?php
    include('mymethod.php');
    $email = $_GET['email'];
    $res = deleteuser($email);

    if($res == 1)
    {
        echo "deletion Success";
    }
    else{
        echo "Deletion Failed";
    }
?>