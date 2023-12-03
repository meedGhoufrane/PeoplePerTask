<?php
session_start();
if(!isset($_SESSION['valid_seesion'])){
    header("Location: loginadmin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboardtrend.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>PeoplePerTask</title>
</head>
<body>
<div class="row">
    <div class="col-1" id="column1">
        <a href="#"><img id="logo" src="images/PeoplePerTask.png" alt="logo">
        </a>
        <div id="menu">
        <div id="home-container">
        <a href="dashboard.php"><img src="images/material-symbols_home-rounded.svg" alt="Home">
        </a>
        </div>
        <div class="menu-section">
        <a href="dashboardtrend.php"><img src="images/fire3 1.png" alt="tredning">
        <p class="menu-paragraph">Treding Offers</p></a>
        </div>
        <div class="menu-section">
        <a href="crud.php"><img src="images/admin.png" alt="Edit">
        <p class="menu-paragraph">Edit</p></a>
        </div>
        <div class="menu-section">
        <a href="dashboardusers.php"><img src="images/group2 1.png" alt="Users">
        <p class="menu-paragraph">Users</p></a>
        </div>
        <div class="menu-section">
        <a href="stats.php"><img src="images/graph2 1.png" alt="Stats">
        <p class="menu-paragraph">Stats</p></a>
        </div>
        <div class="line">
        </div>
        <div class="menu-section">
        <a href="#"><img src="images/Vector.svg" alt="help"></a>
        </div>
        <div class="menu-section">
        <a href="#"><img src="images/Vector2.svg" alt="settings"></a>
        </div>
        </div>
        </div>
<div class="col-11" id="column2">
    <div id="nav-bar">
        <img id="menu-logo" style="height: 40px;" src="images/more.png" alt="menu">
        <div id="nav-bar-section2">
        <img id="notification" src="images/carbon_notification-new.svg" alt="notification-icon">
        <div id="profil">
        <h1>Welcome back,Yasser</h1>
        <img src="images/profil.png" alt="profil-logo">
        </div>
        </div>
        </div>
<div class="content">
<h1>Treanding Offers</h1>
<div class="filter">
<h2>Filter By :</h2>
<button class="btn" id="all">All</button>
<button class="btn" id="price">price</button>
<button class="btn" id="value">Value</button>
<button class="btn" id="satisfaction">Top Rated</button>
</div>
<div class="cardss">
<div id="price2">
<div class="card">
<img src="images/pr1.webp" alt="pr1">
<div class="freelancer-profil">
<div class="part1">
<img src="images/pro8.png" alt="">
<h5>Diana</h5>   
</div>
<h5>Lvl 50</h5>
</div>
<div class="freelancer-profil">
    <div class="part1">
    <img style="height: 25px;" src="images/star.png" alt="star">
    <h5>4.8(1k)</h5>   
    </div>
    <h5>20$</h5>
</div>
</div>
<div class="card">
<img src="images/pr2.jpg" alt="">
<div class="freelancer-profil">
    <div class="part1">
    <img src="images/pro9.png" alt="">
    <h5>Mars</h5>   
    </div>
    <h5>Lvl 50</h5>
    </div>
    <div class="freelancer-profil">
        <div class="part1">
        <img style="height: 25px;" src="images/star.png" alt="star">
        <h5>4.5(50)</h5>   
        </div>
        <h5>35$</h5>
    </div>
</div>
<div class="card">
<img src="images/pr3.webp" alt="">
<div class="freelancer-profil">
    <div class="part1">
    <img src="images/pro2.png" alt="">
    <h5>Katarina</h5>   
    </div>
    <h5>Lvl 50</h5>
    </div>
    <div class="freelancer-profil">
        <div class="part1">
        <img style="height: 25px;" src="images/star.png" alt="star">
        <h5>4.6(60)</h5>   
        </div>
        <h5>40$</h5>
    </div>
</div> 
</div>
<div id="value2">
    <div class="card">
    <img src="images/vl1.webp" alt="">
    <div class="freelancer-profil">
        <div class="part1">
        <img src="images/pro3.png" alt="">
        <h5>fidel</h5>   
        </div>
        <h5>Lvl 50</h5>
        </div>
        <div class="freelancer-profil">
            <div class="part1">
            <img style="height: 25px;" src="images/star.png" alt="star">
            <h5>4.6(320)</h5>   
            </div>
            <h5>100$</h5>
        </div>
    </div>
    <div class="card">
    <img src="images/vl2.webp" alt="">
    <div class="freelancer-profil">
        <div class="part1">
        <img src="images/pro4.png" alt="">
        <h5>elon</h5>   
        </div>
        <h5>Lvl 50</h5>
        </div>
        <div class="freelancer-profil">
            <div class="part1">
            <img style="height: 25px;" src="images/star.png" alt="star">
            <h5>4.8(130)</h5>   
            </div>
            <h5>350$</h5>
        </div>
    </div> 
    <div class="card">
    <img src="images/vl3.webp" alt="">
    <div class="freelancer-profil">
        <div class="part1">
        <img src="images/pro5.png" alt="">
        <h5>eren</h5>   
        </div>
        <h5>Lvl 50</h5>
        </div>
        <div class="freelancer-profil">
            <div class="part1">
            <img style="height: 25px;" src="images/star.png" alt="star">
            <h5>4.7(1k)</h5>   
            </div>
            <h5>120$</h5>
        </div>
    </div> 
</div>
<div id="satisfaction2">
    <div class="card">
    <img src="images/sati1.jpg" alt="">
    <div class="freelancer-profil">
<div class="part1">
<img src="images/pro7.png" alt="">
<h5>noor</h5>   
</div>
<h5>Lvl 50</h5>
</div>
<div class="freelancer-profil">
    <div class="part1">
    <img style="height: 25px;" src="images/star.png" alt="star">
    <h5>5.0(125)</h5>   
    </div>
    <h5>80$</h5>
</div>
    </div>
    <div class="card">
    <img src="images/sati2.jpg" alt="">
    <div class="freelancer-profil">
<div class="part1">
<img src="images/pro6.png" alt="">
<h5>michelle</h5>   
</div>
<h5>Lvl 50</h5>
</div>
<div class="freelancer-profil">
    <div class="part1">
    <img style="height: 25px;" src="images/star.png" alt="star">
    <h5>5.0(400)</h5>   
    </div>
    <h5>90$</h5>
</div>
    </div> 
    <div class="card">
    <img src="images/sati3.jpg" alt="">
    <div class="freelancer-profil">
<div class="part1">
<img src="images/pro8.png" alt="">
<h5>fedrique</h5>   
</div>
<h5>Lvl 50</h5>
</div>
<div class="freelancer-profil">
    <div class="part1">
    <img style="height: 25px;" src="images/star.png" alt="star">
    <h5>5.0(800)</h5>   
    </div>
    <h5>140$</h5>
</div>
    </div> 
</div>
</div>
</div>
</div>
</div>   
</div>
   

    <script src="js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e80051e55f.js" crossorigin="anonymous"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/dashboardhome.js"></script>
</body>
</html>