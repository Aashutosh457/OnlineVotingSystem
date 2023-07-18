<?php
include 'connect.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width:600px;
            
        }
        thead tr{
            background-color:grey;
        }
        th{
            text-align:left;
        }
    </style>
</head>
<body>
    <h1>Table for Monitor from boys</h1>
    <table border='1' cellspacing='0'>
        <thead>
            <tr>
            <th>Name</th>
            <th>Count</th>
            </tr>
        </thead>
        <?php
        $sql = "SELECT * FROM `boy_monitor`";
        $res = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($res)){
            echo "
            <tbody>
            <tr>
                <td>".$row['name']."</td>
                <td>".$row['count']."</td>
            </tr>
        </tbody>
            ";
        }
        ?>
        
    </table>
    <h1>Table for Class Representatives from boys</h1>
    <table border='1' cellspacing='0'>
        <thead>
            <tr>
            <th>Name</th>
            <th>Count</th>
            </tr>
        </thead>
        <?php
        $sql = "SELECT * FROM `boy_cr`";
        $res = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($res)){
            echo "
            <tbody>
            <tr>
                <td>".$row['name']."</td>
                <td>".$row['count']."</td>
            </tr>
        </tbody>
            ";
        }
        ?>
    </table>
    <h1>Table for Monitor from girls</h1>
    <table border='1' cellspacing='0'>
        <thead>
            <tr>
            <th>Name</th>
            <th>Count</th>
            </tr>
        </thead>
        <?php
        $sql = "SELECT * FROM `girl_monitor`";
        $res = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($res)){
            echo "
            <tbody>
            <tr>
                <td>".$row['name']."</td>
                <td>".$row['count']."</td>
            </tr>
        </tbody>
            ";
        }
        ?>
    </table>
    <h1>Table for Class Representatives from girls</h1>
    <table border='1' cellspacing='0'>
        <thead>
            <tr>
            <th>Name</th>
            <th>Count</th>
            </tr>
        </thead>
        <?php
        $sql = "SELECT * FROM `girl_cr`";
        $res = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($res)){
            echo "
            <tbody>
            <tr>
                <td>".$row['name']."</td>
                <td>".$row['count']."</td>
            </tr>
        </tbody>
            ";
        }
        ?>
    </table>
</body>
</html>