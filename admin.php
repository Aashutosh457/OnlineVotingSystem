<?php
require("./connect.php");

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $seach_qury = "SELECT * FROM admin";
    $res = $conn->query($seach_qury);

    if ($res) {
        while ($row = $res->fetch_assoc()) {
            if ($row["username"] == $username && $row["password"] == $password) {
                header("location: ./admin_dash.php");
            } else {
                echo "Error";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div class="form-box">

            <h2>Admin Login</h2>
        
            <form action="#" method="post">
                <div class="form-field">
                    <label for="username">Full Name</label>
                    <input type="text" name="username" id="username" />
                </div>
                <div class="form-field">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" />
                </div>
                <div class="form-field">
                    <button type="submit" name="submit" class="btnLogin">Login</button>
                </div>
            </form>
    </div>
</body>

</html>