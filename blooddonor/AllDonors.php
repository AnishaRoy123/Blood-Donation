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
    h1 {
  font-size: 70px;
  font-weight: 100;
  background-color:blueviolet;
  color: red;
   background-clip: text;
  -webkit-background-clip: text;
}
 </style>
<body>
<h1>Update the Donor Details</h1>
    <?php
        include('MyMethods.php');

        $res = getAllDonors();

        $records = mysqli_num_rows($res);

        if($records > 0)
        {
            echo '
                <table border="2">
                    <tr>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>
            ';
            while($data = mysqli_fetch_assoc($res))
            {
                $email = $data["email"];
                echo '
                    <tr>
                        <td>'.$data["email"].'</td>
                        <td>'.$data["name"].'</td>
                        <td>'.$data["address"].'</td>
                        <td>'.$data["contact"].'</td>
                        <td>
                            <a href="Edit.php?email='.$data["email"].'">Edit</a>
                            <a onclick=deleteDonor("'.$email.'")>Delete</a>
                        </td>
                    </tr>
                ';
            }
            echo '</table>';
        }
        else{
            echo "Sorry, There are no Data...!!!";
        }
    ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        function deleteDonor(email)
        {
            if(confirm("Are u sure to delete this record?"))
            {
                $.ajax({
                    url:"Delete.php",
                    method: "get",
                    data:{"email": email},
                    success: function(response)
                    {
                        alert(response);
                        window.location.href="";
                    }
                })
            }
        }
    </script>
</body>
</html>