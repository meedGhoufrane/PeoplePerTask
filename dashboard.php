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
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
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
                        <p class="menu-paragraph">Treding Offers</p>
                    </a>
                </div>
                <div class="menu-section">
                    <a href="crud.php"><img src="images/admin.png" alt="Edit">
                        <p class="menu-paragraph">Edit</p>
                    </a>
                </div>
                <div class="menu-section">
                    <a href="dashboardusers.php"><img src="images/group2 1.png" alt="Users">
                        <p class="menu-paragraph">Users</p>
                    </a>
                </div>
                <div class="menu-section">
                    <a href="stats.php"><img src="images/graph2 1.png" alt="Stats">
                        <p class="menu-paragraph">Stats</p>
                    </a>
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
                        <h1>Welcome back,<?= $_SESSION['user_name'] ?></h1>
                        <img src="images/profil.png" alt="profil-logo">
                        <?php
echo"<form class='d-flex nav_btn' role='search'>
<a href='logout.php'  class='btn btn-primary'>log out</a>
</form>";
?>
                    </div>
                </div>
            </div>
            <div id="content">
                <div class="cards">
                    <!-- <div class="time">
<h2>Last 7 Days</h2>
<img src="images/Polygon 4.svg" alt="down-arrow">
</div> -->
                    <div class="cards-content">
                        <div class="card">
                            <h3>total clients</h3>
                            <div class="card-bottom">
                                <h5>480</h5>
                                <img src="images/ic1.png" alt="icon1">
                            </div>
                        </div>
                        <div class="card">
                            <h3>Successfuly delivered</h3>
                            <div class="card-bottom">
                                <h5>300</h5>
                                <img src="images/ic3.svg" alt="icone2">
                            </div>
                        </div>
                        <div class="card">
                            <h3>Pending</h3>
                            <div class="card-bottom">
                                <h5>102</h5>
                                <img src="images/ic4.svg" alt="ic3">
                            </div>
                        </div>
                        <div class="card">
                            <h3>Failed</h3>
                            <div class="card-bottom">
                                <h5>10</h5>
                                <img src="images/ic5.svg" alt="ic4">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="mid-content">
                    <div class="col-6" id="clients-stats">
                        <div id="header">
                            <h3>Clients stats</h3>
                            <div
                                style="background-color: white;padding-left: 10px;padding-right: 10px;padding-top: 3px;padding-bottom: 5px;border-radius: 10px;">
                                <!-- <div class="time">
<h2>Last 7 Days</h2>
<img src="images/Polygon 4.svg" alt="down-arrow">
</div> -->
                            </div>
                        </div>
                        <div id="chart"></div>

                    </div>
                    <div class="col-6" id="trend-projects">
                        <div id="header2">
                            <h3>Trending projects</h3>
                        </div>
                        <div id="trend-header">
                            <h3>category</h3>
                            <h3>succes rate %</h3>
                        </div>
                        <div id="trend-content">
                            <div class="trend-stats">
                                <h3>AI artists</h3>
                                <h3>99%</h3>
                            </div>
                            <div class="trend-line"></div>
                            <div class="trend-stats">
                                <h3>Logo Design</h3>
                                <h3>95%</h3>
                            </div>
                            <div class="trend-line"></div>
                            <div class="trend-stats">
                                <h3>WordPress</h3>
                                <h3>94%</h3>
                            </div>
                            <div class="trend-line"></div>
                            <div class="trend-stats">
                                <h3>Voice Over</h3>
                                <h3>92%</h3>
                            </div>
                            <div class="trend-line"></div>
                            <div class="trend-stats">
                                <h3>SEO</h3>
                                <h3>90%</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="bottom-content">
                    <h3>Top Freelancers</h3>
                    <div id="table">
                        <div>
                            <h2>freelancer</h2>
                            <h3>omar</h3>
                            <h3>nour</h3>
                            <h3>fahed</h3>
                        </div>
                        <div>
                            <h2>join date</h2>
                            <h3>05/03/2023</h3>
                            <h3>22/02/2023</h3>
                            <h3>02/05/2023</h3>
                        </div>
                        <div id="catego">
                            <h2>Category</h2>
                            <h3>front-end</h3>
                            <h3>back-end</h3>
                            <h3>mobile games</h3>
                        </div>
                        <div id="total">
                            <h2>total clients</h2>
                            <h3>102</h3>
                            <h3>105</h3>
                            <h3>90</h3>
                        </div>
                        <div id="earn">
                            <h2>total earning</h2>
                            <h3>3000$</h3>
                            <h3>3100$</h3>
                            <h3>2900$</h3>
                        </div>
                        <div id="sati">
                            <h2>satisfaction rate</h2>
                            <h3>98%</h3>
                            <h3>95%</h3>
                            <h3>94%</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.min.js"></script>
    <script src="js/dashboardhome.js"></script>
    <script src="https://kit.fontawesome.com/e80051e55f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

</html>