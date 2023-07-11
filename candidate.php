<?php
require("./connect.php");
$sql_query = "SELECT * FROM candidate";
$result = $conn->query(($sql_query));
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="stylesheet" href="./profile.css"> -->
    <title>Document</title>
    <link rel="stylesheet" href="./candidates.css">

</head>

<body>
    <div class="container">
        <div class="main">
            <div class="navbar">
                <ul>
                    <li><a href="./home.php">Home</a></li>
                    <li><a href="./candidate.php">Candidate</a></li>
                    <li><a href="./voterlist.php">Voters</a></li>
                    <li><a href="./about.php">About US</a></li>
                    <li><button class="logout" onclick="func()">Logout</button></li>
                </ul>
            </div> 
            <div class="bck">
            <div class="heading-section">
                <h3>Online voting System</h3>
                <p class="candi">CANDIDATE LIST</p>
            </div>

            <div class="rows">
                <!-- <div class="col-1">
                    <div class="img-box">
                        <img src="./images./d.jpg">
                    </div>
                    <div class="text-box">
                        <h2>Laxme pokheral</h2>
                        <h3>Executive director</h3>
                        <p>Vote for the changes you want in your education system</p>
                        <button class="btn-v">vote</button>
                    </div>
                    
                </div> -->
                <?php
                while($row = mysqli_fetch_assoc($result)){
                    echo '<div class="col-1">
                    <div class="img-box">
                        <img src="./images./d.jpg">
                    </div>
                    <div class="text-box">
                        <h2>'.$row['name'].'</h2>
                        <h3>'.$row['position'].'</h3>
                        <p>Vote for the changes you want in your education system</p>
                        <button class="btn-v">vote</button>
                    </div>
                    
                </div>';
                }
                
                ?>
                
                
        </div>
        <footer class="footer">All rights reserved 2023 &copy Aashutosh</footer>   

</body>

</html>