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
    function getAllDonors()
    {
        $conn = dbConnect();   

        if($conn)
        {
            //echo "Database Connected Successfully";
            $sql = "select *from donor";

            $response = mysqli_query($conn, $sql);

            return $response;
        }
        else{
            echo "Database Not Connected";
        }
    }

    function countAllDonors()
    {
        $conn = dbConnect();   

        if($conn)
        {
            //echo "Database Connected Successfully";
            $sql = "select *from donor";

            $response = mysqli_query($conn, $sql);
            $records = mysqli_num_rows($response);

            return $records;
        }
        else{
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
function countAllusers()
{
    $conn = dbConnect();   

    if($conn)
    {
        //echo "Database Connected Successfully";
        $sql = "select *from user";

        $response = mysqli_query($conn, $sql);
        $records = mysqli_num_rows($response);

        return $records;
    }
    else{
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
?>
