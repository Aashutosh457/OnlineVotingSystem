
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Admin Phone</title>
    <link rel="stylesheet" href="./list.css">
</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="title">Voting System</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="bookmarks-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li>
                    <a href="./voterlist.php">
                        <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                        <span class="title"> Voters List</span>
                    </a>
                </li>
                <li>
                    <a href="./candidate.php">
                        <span class="icon"><ion-icon name="flag-outline"></ion-icon></span>
                        <span class="title">Candidates</span>
                    </a>
                </li>
                <li>
                    <a href="about.php">
                        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <span class="title"> About Us</span>
                    </a>
                </li>
            </ul>

        </div>
        <div class="main">
            <div class="topbar">
                <div class="search">
                    <label>
                        <input type="text" placeholder="search here">
                    </label>
                </div>
                <div class="search bar">
                    <ion-icon name="search-outline"></ion-icon>
                </div>
                <div class="logo">
                    <img src="./public/images/vote.jpg">
                </div>
            </div>
        </div>
        <div class="voteBox">
            <div class="card">
                <div>
                    <div class="numbers"> 1,500</div>
                    <div class="cardName">Total Voters</div>
                </div>
                <div class="iconBox">
                    <ion-icon name="man-outline"></ion-icon>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers"> 4</div>
                    <div class="cardName">Candidates</div>
                </div>
                <div class="iconBox">
                    <ion-icon name="flag-outline"></ion-icon>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers">600 </div>
                    <div class="cardName"> Total Vote Counted</div>
                </div>
                <div class="iconBox">
                    <ion-icon name="finger-print-outline"></ion-icon>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers">40</div>
                    <div class="cardName"></div>
                </div>
                <div class="iconBox">
                    <ion-icon name="eye-outline"></ion-icon>
                </div>
            </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script>
            function toggleMenu() {
                let toggle = document.querySelector('.toggle');
                let navigation = document.querySelector('.navigation');
                let main = document.querySelector('.main');
                toggle.classList.toggle('active');
                navigation.classList.toggle('active');
            }
        </script>
</body>

</html>