<?php
require("./connect.php");
if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = array();
    if($email == ''){
        $error['email'] = "Email Required";
    }
    if($password == ''){
        $error['password'] = "Password Required";
    }

    if(empty($error)){
        $email_search = "select * from voter where email='$email'";
        $res = mysqli_query($conn, $email_search);
        $row = mysqli_fetch_assoc($res);
        $id = $row['id'];
        $prev_email = $row['email'];
        $prev_password = $row['password'];
        if($email==$prev_email && $password==$prev_password){
            session_start();
            $_SESSION['id'] = $id;
            echo "logged in with user id '$id'";
            header('location:home.php');
        }
    }
        
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <h1>Padmashree International College</h1>
                <h2>Login</h2>
                <form action="" id="myform" method="post">
                    <div class="inputbox">
                        <input type="name" id="email" autocomplete="off" name="email">
                        <span class="error">
                        <?php
                            if(isset($error['email'])){
                                echo 
                                "<p>".$error['email']."</p>"
                                ;
                            }
                            ?>
                        </span>
                        <label for="email">Email</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="password" autocomplete="off" name="password">
                        <span class="error">
                        <?php
                            if(isset($error['password'])){
                                echo 
                                "<p>".$error['password']."</p>"
                                ;
                            }
                            ?>
                        </span>
                        <label for="password">Password</label>
                    </div>

                    <div class="forget">
                        <label for="remember-checkbox">
                            <input type="checkbox" id="remember-checkbox">
                            Remember me
                            <a href="#">Forgot Password</a>
                        </label>
                    </div>

                    <button type="submit" name="submit">Login</button>
                    <div class="register">
                        <p>Don't have an account? <a href="./voter_register.php">Register now</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- <script src="./script.js"></script> -->
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" type="module"></script>
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js" nomodule></script>
</body>

</html>