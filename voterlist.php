<html>

<head>
    <style>
        table, tr, td, th{
            border: 3px solid black;
            border-collapse: collapse;
            margin: 0 auto;
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
    </style>
    <h2>padmashree international college</h2>
    <h3>Voter List</h3>
</head>
<bo>
    <table>
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Gender</td>
            <td>password</td>
        </tr>
        <?php
        include 'connect.php';
        $query = " select * from voter";
        $data = mysqli_query($conn, $query);
        $total = mysqli_num_rows($data);
        if ($total != 0) {
            $result = mysqli_fetch_assoc($data);
            while (($result = mysqli_fetch_assoc($data))) {
                echo "
        <tr>
        <td>" . $result['id'] . "</td>
        <td>" . $result['name'] . "</td>
        <td>" . $result['email'] . "</td>
        <td>" . $result['gender'] . "</td>
        <td>" . $result['password'] . "</td>
        </tr>";
            }
        } else {
            echo "table has no records";
        }
        ?>
    </table>
    </body>

</html>