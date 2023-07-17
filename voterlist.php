<html>

<head>
    <style>
        *{
    padding: 0px;
    margin: 0px;
}
body{
    background: url('./images/onlinevotingHp.jpg')no-repeat center center/cover;

}
.main{
    /* margin-top: 20px; */
    justify-content: space-between;
    background: #c4c4c4;
    /* min-height: 100vh; */
    /* height: 100%; */
}
.navbar ul{
    padding: 15px;
    display: flex;
    background: blue;
    list-style: none;  
    height: 25px;
    text-align: right;
    width: 100%;
}
.navbar li{
    display: inline-block;
}
.navbar a{
    text-decoration: none;
    color:white;
    width: 150px;
    padding: 20px 18px;
    text-transform: uppercase;
    font-weight: bold;
    font-family: arial;
    text-align: center;
}
.navbar a:hover{
    background: green;
}
button {
    color: white;
    padding: 10px;
    border-radius: 14px;
    background-color: red;
    width:74px;
    display: block;
    transition: 0.2s;
    position:relative;
    left: 1000px;
    bottom: 6px;

}
button:hover{
background-color: brown;
cursor: pointer;
padding: 14px 17px 14px 17px;
font-size: 16px;
width: 78px;
text-align: center;
}
li{
    display: inline;
}
.navbar a{
    text-decoration: none;
    display: inline;
    color:white;
    width: 150px;
    /* padding:  20px 18px; */
    text-transform: uppercase;
    font-weight: bold;
    font-family: arial;
    text-align: center;
}
.navbar a:hover{
    background: green;
}
        table, tr, td, th{
            border: 3px solid white;
            border-collapse: collapse;
            margin: 0 auto;
            background-color:#565050;
            color:white
        }
        table{
            width: 68%;
            height: 45%;
            text-align: center;
            background-color: white;
        }
    
        tr:hover{
            background-color: gray;
            color: white;
        }
        h3{
            text-align: center;
            color: black;
            font-size: 24px;
        }
        h2{
            padding-top: 20px;
            text-align: center;
            color: green;
            font-size: 30px;
            text-transform: uppercase;
        }
        .contan{
            opacity:0.7;
        }
        .footer{
    background-color: blue;
    color: white;
    font-weight: bold;
    padding: 20px;
    text-align: center;
    position:absolute;
    bottom:-1px;
    width:100%;
}
    </style>
       <div class="main">
            <div class="navbar">
                <ul>
                    <li><a href="./home.php">Home</a></li>
                    <li><a href="./candidate.php">Candidate</a></li>
                    <li><a href="./voterlist.php">Voters</a></li>
                    <li><a href="./about.php">About US</a></li>
                    <li><button onclick="func()">Logout</button></li>
                </ul>
            </div> 
</div>
    <h2>padmashree international college</h2>
    <h3>Voter List</h3>
</head>
<div class="contan">
    <table >
        <thead>
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Gender</td>
            <td>password</td>
        </tr>
</thead>
        <tbody>
        <?php
        include 'connect.php';
        $query = " select * from voter";
        $data = mysqli_query($conn, $query);
        $total = mysqli_num_rows($data);
        if ($total !== 0) {
            while ($result = mysqli_fetch_assoc($total)) {
                echo "
        <tr>
        <td>" . $result['id'] . "</td>
        <td>" . $result['name'] . "</td>
        <td>" . $result['email'] . "</td>
        <td>" . $result['gender'] . "</td>
        </tr>";
            }
        } else {
            echo "table has no records";
        }
        ?>
        </tbody>
    </table></div>
    <footer class="footer">All rights reserved 2023 &copy Aashutosh</footer>   

    </body>

</html>