<?php
include 'connect.php';
$sql = "SELECT * FROM `boy_cr`";
$res = mysqli_query($conn,$sql);
if(isset($_POST['submit'])){
    $id = $_POST['candidate_id'];
    $updateSql = "UPDATE `boy_cr` SET `count` = `count` + 1 WHERE `id` = '$id'";
    mysqli_query($conn, $updateSql);
    header('location:b_cr.php'); // Redirect after updating the count
    exit();

}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width:100%;
            height:100%;
            display:grid;
            grid-template-columns:1fr 1fr;
            grid-template-rows:1fr 1fr;
            width:1200px;
            margin: auto;
            text-align:center;
            row-gap:30px;
            column-gap:30px;
        }
        .box{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            background-color:skyblue;
            border:1px solid black;
            border-radius:30px;
        }
        img{
            height:100px

        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        while($row = mysqli_fetch_assoc($res)){
            
            echo "
            <div class='box'>
            <form action='' method='post'>
            <input type='hidden' name='candidate_id' value='" . $row['id'] . "'>
            <img src='images/".$row['image']."'>
            <h1>".$row['name']."</h1>
            <button name='submit' type='submit'>Vote</button>
            </form>
            </div>";

        }
        
        ?>
        
    </div>
</body>
</html>