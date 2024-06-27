<?php

function dbConnect()
{
    $hostName = "localhost";
    $userName = "root";
    $userPassword = "";
    $dbName = "student";

    $conn = mysqli_connect($hostName, $userName, $userPassword, $dbName);

    return $conn;
}

function addadmin($data)
{

    $conn = dbConnect();

    $requestby = $data["requestby"];
    $requestto = $data["requestto"];
    $date = $data["date"];
    $purpose = $data["purpose"];
    $address = $data["address"];
    $bloodgrp = $data["bloodgrp"];


    if($conn)
    {
        //echo "Database Connected Successfully";
        $sql = "insert into requestsr(requestby, requestto, date, purpose,address, bloodgrp) values( '$requestby', '$requestto', '$date', '$purpose', '$address', '$bloodgrp')";

        $response = mysqli_query($conn, $sql);

        return $response;
    }
    else{
        echo "Database Not Connected";
    }
}

?>