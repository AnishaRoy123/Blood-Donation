<?php
    include("MyMethods.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-image: url('bg2.jpg');
    }
    table, th, td {
border: 2px #2b2b2b solid;
color: #2b2b2b;
}
    table{
       
        background-color: #bde9ba;
    }
    th { background-color: #ffd78c; }
   

    </style>
<body>
    <h1>All Donors</h1>

    <a href="CRUD.php">Add New Record</a>
    <br>

    <div id="result"></div>
    <br>

    <table border="2">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Blood Group</th>
            <th>Action</th>
        </tr>
        <?php
            
            $response = getAllDonors();

            $records = mysqli_num_rows($response);

            echo "No. of Records : ".$records."<br>";

            if($records > 0)
            {
                while($data = mysqli_fetch_assoc($response))
                {
                    $email = $data["email"];
                    $name = $data["name"];
                    $contact = $data["contact"];
                    $blood_group = $data["blood_group"];

                    echo '
                    <tr>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $contact . '</td>
                        <td>' . $blood_group . '</td>
                        <th>
                            <a href="Edit.php?email='.$email.'">Edit</a>
                            <a href="#" onclick="deleteDonor(\''. $email . '\')">Delete</a>
                        </th>
                    </tr>
        ';
                }
            }
            else{
                echo 'Sorry, There are no records....!!!';
            }
        ?>
        
    </table>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        function deleteDonor(email)
        {
            if(confirm("Are u sure to delete this record? "))
            {
                $.ajax({
                    url:"deleteDonor.php",
                    method:"get",
                    data:{"email": email},
                    success: function(response)
                    {
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