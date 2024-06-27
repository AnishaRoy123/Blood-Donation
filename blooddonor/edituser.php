<?php
    include('usermethod.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $email = $_GET['email'];
        $response = getuserByid($email);
        $data = mysqli_fetch_assoc($response);
    ?>
    <h1>Update the User Details</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td><input type="text" name="name" placeholder="Enter Name" value="<?php echo $data["name"]; ?>"></td>
            </tr>
            <tr>
                <td><input type="text" name="email" placeholder="Enter Email" value="<?php echo $data["email"]; ?>"readonly></td>
            </tr>
           
            <tr>
                <td><input type="text" name="password" placeholder="Enter Password" value="<?php echo $data["password"]; ?>"></td>
            </tr>
           
           
            <tr>
                <td><input type="text" name="blood" placeholder="Enter Blood " value="<?php echo $data["blood"]; ?>"></td>
            </tr>
            <tr>
                <td><input type="text" name="address" placeholder="Enter Address" value="<?php echo $data["address"]; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
            <tr>
                <td>
                    <?php
                        if(isset($_POST['update']))
                        {
                            $res = updateuser($_POST);

                            if($res == 1)
                            {
                                echo "Update Success";
                                header('location:alluser.php');
                            }
                            else{
                                echo "Update Failed";
                            }
                        }
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>