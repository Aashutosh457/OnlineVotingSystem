<?php
require("./connect.php");

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $position = $_POST["position"];
    // $count = $_POST["count"];
    $search_query = "SELECT * FROM candidate WHERE name= '$name'";
    $res = $conn->query($search_query);
    $sql="insert into  `candidate` (name,position) values('$name','$position')";
    $result=mysqli_query($conn,$sql);
        if($result){
            echo "DATA HAS BEEN UPDATED SUCESSFULLY..";
            // header('location:candidate.php');
        }else{
            die(mysqli_error($conn));
        }
      }

    // if ($res) {
    //     while ($row = $res->fetch_assoc()) {
    //         if ($row["username"] == $username && $row["password"] == $password) {
    //             header("location: ./admin_dash.php");
    //         } else {
    //             echo "Error";
    //         }
    //     }
    // }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD CANDIDATE</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div class="form-box">

            <h2>Voting Site</h2>
        
            <form action="#" method="post">
                <div class="form-field">
                    <label for="name">Candidated Name</label>
                    <input type="text" name="name" id="name" />
                </div>
                <div class="form-field">
                    <label for="position">Candidate Position</label>
                    <input type="name" name="position" id="position" />
                </div>
                <div class="form-field">
                    <button type="submit" name="submit" class="btnLogin">Register</button>
                </div>
            </form>
    </div>
</body>

</html>