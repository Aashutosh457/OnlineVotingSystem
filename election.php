<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .heading{
            text-align:center;
        }
        .container{
            width: 800px;
            height: 500px;
            border:2px solid black;
            border-radius:30px;
            margin:auto;
            display:grid;
            grid-template-columns:1fr 1fr;
            grid-template-rows:1fr 1fr;
            row-gap:20px;
            column-gap:20px;
            padding:20px;
        }
        .boy-monitor, .boy-cr, .girl-monitor, .girl-cr{
            height:100%;
            width:100%;
            background-color:skyblue;
            border-radius:20px;
            border:1px solid black;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
    </style>
</head>
<body>
    <h1 class="heading">Choose your Leader Wisely </h1>
    <div class="container">
        <div class="boy-monitor">
            <h1>For Gents Monitor</h1>
            <a href="b-mon.php">Click Here</a>
        </div>
        <div class="boy-cr">
            <h1>For gents Representatives</h1>
            <a href="b-cr.php">Click Here</a>
        </div>
        <div class="girl-monitor">
        <h1>For ladies Monitor</h1>
        <a href="g-mon.php">Click Here</a>
        </div>
        <div class="girl-cr">
        <h1>For ladies Representatives</h1>
        <a href="g-cr.php">Click Here</a>
        </div>
    </div>
</body>
</html>