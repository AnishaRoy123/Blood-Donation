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

    function registerDonor($data)
    {

        $conn = dbConnect();

        $email = $data["email"];
        $name = $data["name"];
        $address = $data["address"];
        $password = $data["password"];
        $contact = $data["contact"];
        $blood_group = $data["blood_group"];


        if($conn)
        {
            //echo "Database Connected Successfully";
            $sql = "insert into donor(email, name, address, password, contact, blood_group) values('$email', '$name', '$address', '$password', '$contact', '$blood_group')";

            $response = mysqli_query($conn, $sql);

            return $response;
        }
        else{
            echo "Database Not Connected";
        }
    }

    function updateDonor($data)
    {
        $conn = dbConnect();

        $email = $data["email"];
        $name = $data["name"];
        $address = $data["address"];
        $password = $data["password"];
        $contact = $data["contact"];
        $blood_group = $data["blood_group"];


        if($conn)
        {
            //echo "Database Connected Successfully";
            $sql = "update donor set name='$name', address='$address', password='$password', contact='$contact', blood_group='$blood_group' where email='$email'";

            $response = mysqli_query($conn, $sql);

            return $response;
        }
        else{
            echo "Database Not Connected";
        }
    }

    function deleteDonor($email)
    {
        $conn = dbConnect();   


        if($conn)
        {
            //echo "Database Connected Successfully";
            $sql = "delete from donor where email='$email'";

            $response = mysqli_query($conn, $sql);

            return $response;
        }
        else{
            echo "Database Not Connected";
        }
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
    function getAllDonorsByGroup($bg)
    {
        $conn = dbconnect();

        $sql = "select * from donor where blood_group='$bg'";

        $responce=mysqli_query($conn,$sql);

        return $responce;
    }
    function getAllDonorsByGrou($cat)
    {
        $conn = dbconnect();

        $sql = "select * from produ where cat='$cat'";

        $responce=mysqli_query($conn,$sql);

        return $responce;
    }


    function getDonorByEmail($email)
    {
        $conn = dbConnect();   

        if($conn)
        {
            //echo "Database Connected Successfully";
            $sql = "select *from donor where email='$email'";

            $response = mysqli_query($conn, $sql);

            return $response;
        }
        else{
            echo "Database Not Connected";
        }
    }

    function loginDonor($data)
    {
        $email = $data["email"];
        $password = $data["password"];

        $conn = dbConnect();   

        if($conn)
        {
            //echo "Database Connected Successfully";
            $sql = "select *from donor where email='$email' and password='$password'";

            $response = mysqli_query($conn, $sql);

            return $response;
        }
        else{
            echo "Database Not Connected";
        }
    }
    
    // $data = array(
    //     'email'=>'anisha@gmail.com',
    //     'name'=>'Anisha',
    //     'address'=> 'Dumdum', 
    //     'password'=>'12345',
    //     'contact'=>'8523697410',
    //     'blood_group'=>'O+'
    // );
    
    //Insert
    // $response = registerDonor($data);
    // if($response == 1)
    // {
    //     echo "Registration Successfully";
    // }
    // else{
    //     echo "Registration Failed";
    // }

    //Update
    // $response = updateDonor($data);
    // if($response == 1)
    // {
    //     echo "Updation Successfully";
    // }
    // else{
    //     echo "Update Failed";
    // }

    // $email = 'akanup67@gmail.com';
    // $response = deleteDonor($email);
    // if($response == 1)
    // {
    //     echo "deletion Successfully";
    // }
    // else{
    //     echo "delete Failed";
    // }

    //Get All Data
    // $response = getAllDonors();

    // $records = mysqli_num_rows($response);

    // echo "No. of Records : ".$records."<br>";

    // if($records > 0)
    // {
    //     while($data = mysqli_fetch_assoc($response))
    //     {
    //         echo $data['email']."<br>";
    //     }
    // }
    // else{
    //     echo 'Sorry, There are no records....!!!';
    // }

    //Get Data By Id
    // $email = 'anisha@gmail.com';
    // $response = getDonorByEmail($email);

    // $records = mysqli_num_rows($response);

    // echo "No. of Records : ".$records."<br>";

    // if($records > 0)
    // {
    //     while($data = mysqli_fetch_assoc($response))
    //     {
    //         echo $data['email']."<br>";
    //     }
    // }
    // else{
    //     echo 'Sorry, There are no records....!!!';
    // }

    //Login Donor
    // $email = 'anisha@gmail.com';
    // $password = '12345';
    // $response = loginDonor($email, $password);

    // $records = mysqli_num_rows($response);

    // echo "No. of Records : ".$records."<br>";

    // if($records > 0)
    // {
    //     while($data = mysqli_fetch_assoc($response))
    //     {
    //         echo $data['email']."<br>";
    //     }
    // }
    // else{
    //     echo 'Sorry, Your Email or Password are Invalid....!!!';
    // }

?>