<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./signUp.css" />
    <title>Register into Movie Server</title>
</head>

<body>
    <?php
    require("./config.php");
    if (isset($_REQUEST['username'])) {
        $username = $_REQUEST['username'];
        $mail = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $insert = "INSERT INTO `login`(`UserName`, `E-mail`, `Password`) VALUES ('$username','$mail','$password')";
        $query = mysqli_query($mysqli, $insert);

        if ($query) {
    ?>
            <div>
                <p style="text-align: center; color:greenyellow">Successfully Registered</p>
            </div>
        <?php
        } else {
        ?>
            <div>
                <p style="text-align: center; color:red">Registation Failed</p>
            </div>
        <?php

        }
        
        }
        else {
        ?>
        <form class="form" action="" method="post">
            <p class="title">Register </p>
            <p class="message">Signup now and get full access to our site. </p>
            <label>
                <input class="input" name="username" type="text" placeholder="" required="">
                <span>UserName</span>
            </label>

            <label>
                <input class="input" name="email" type="email" placeholder="" required="">
                <span>Email</span>
            </label>

            <label>
                <input class="input" name="password" type="password" placeholder="" required="">
                <span>Password</span>
            </label>
            <label>
                <input class="input" name="cpassword" type="password" placeholder="" required="">
                <span>Confirm password</span>
            </label>
            <button class="submit">Submit</button>
            <p class="signin">Already have an acount ? <a href="./signIn.php">Signin</a> </p>
        </form>
    <?php
    }
    ?>
</body>

</html>