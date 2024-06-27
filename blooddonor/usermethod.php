<?php
    function dbConnect()
    {
        $hostName = "localhost";
        $userName = "root";
        $userPassword = "";
        $dbName = "user";

        $conn = mysqli_connect($hostName, $userName, $userPassword, $dbName);

        return $conn;
    }

    function registeruser($data)
   {

        $conn = dbConnect();
       
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];
        $blood = $data['blood'];
        $address = $data['address'];


        if($conn)
        {
           // echo "Database Connected Successfully";
            $sql="insert into user(name,email,password,blood,address)values('$name','$email','$password','$blood','$address')";

            $response=mysqli_query($conn,$sql);
    
            return $response;
        }
        else{
            echo "Database Not Connected";
        }
        
    }


function updateuser($data)
{
    $conn = dbConnect();
    
    $name = $data['name'];
    $email = $data['email'];
    $password = $data['password'];
    $blood = $data['blood'];
    $address = $data['address'];
   

    if ($conn) {
        //echo "Database Connected Successfully";
        $sql = "update user set name='$name', password='$password',  blood='$blood',address='$address' where email='$email'";

        $response = mysqli_query($conn, $sql);

        return $response;
    } else {
        echo "Database Not Connected";
    }
}

function deleteuser($email)
{
    $conn = dbConnect();


    if ($conn) {
        //echo "Database Connected Successfully";
        $sql = "delete from user where email='$email'";

        $response = mysqli_query($conn, $sql);

        return $response;
    } else {
        echo "Database Not Connected";
    }
}

function getAllusers()
{
    $conn = dbConnect();

    if ($conn) {
        //echo "Database Connected Successfully";
        $sql = "select *from user";

        $response = mysqli_query($conn, $sql);

        return $response;
    } else {
        echo "Database Not Connected";
    }
}

function getuserByid($email)
{
    $conn = dbConnect();

    if ($conn) {
        //echo "Database Connected Successfully";
        $sql = "select *from user where email='$email'";

        $response = mysqli_query($conn, $sql);

        return $response;
    } else {
        echo "Database Not Connected";
    }
}

function loginuser($data)
{
    $email = $data["email"];
    $password = $data["password"];

    $conn = dbConnect();

    if ($conn) {
        //echo "Database Connected Successfully";
        $sql = "select *from user where email='$email' and password='$password'";

        $response = mysqli_query($conn, $sql);

        return $response;
    } else {
        echo "Database Not Connected";
    }
}

?>
