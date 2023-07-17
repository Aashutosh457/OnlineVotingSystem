<?php
include 'connect.php';
$sql = "SELECT * FROM `girl_monitor`";
$res = mysqli_query($conn,$sql);
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
            echo "<div class='box'>
            <img src='images/".$row['image']."'>
            <h1>".$row['name']."</h1>
            <button type='submit'>Vote</button>
            </div>";
        }
        
        ?>
        
    </div>
</body>
</html>