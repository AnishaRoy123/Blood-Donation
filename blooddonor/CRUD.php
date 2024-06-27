<?php
    include('MyMethods.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td><input type="text" name="email" placeholder="Enter Email"></td>
            </tr>
            <tr>
                <td><input type="text" name="name" placeholder="Enter Name"></td>
            </tr>
            <tr>
                <td><input type="text" name="address" placeholder="Enter Address"></td>
            </tr>
            <tr>
                <td><input type="text" name="password" placeholder="Enter Password"></td>
            </tr>
            <tr>
                <td><input type="text" name="contact" placeholder="Enter Contact"></td>
            </tr>
            <tr>
                <td><input type="text" name="blood_group" placeholder="Enter Blood Group"></td>
            </tr>
            <tr>
                <td><input type="submit" name="register" value="Register"></td>
            </tr>
            <tr>
                <td>
                    <?php
                        if(isset($_POST['register']))
                        {
                            $res = registerDonor($_POST);

                            if($res == 1)
                            {
                                echo "Registration Success";
                            }
                            else{
                                echo "Registration Failed";
                            }
                        }
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>