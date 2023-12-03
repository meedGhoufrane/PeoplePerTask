<?php
session_start();
if(!isset($_SESSION['valid_seesion'])){
    header("Location: loginadmin.php");
    exit();
}
?>

<?php
REQUIRE 'connection.php';
    $sql = "SELECT COUNT(project_id) FROM `projects`";
    $result = mysqli_query($conn, $sql);

    if(!$result){
       echo "Failed" . mysqli_connect_error(); 
    } 
    else{
        $row = mysqli_fetch_row($result);
        $numberOfProjects = $row[0];
    }

    $sql2 = "SELECT COUNT(user_id) FROM `users`";
    $result2 = mysqli_query($conn, $sql2);

    if(!$result2){
       echo "Failed" . mysqli_connect_error(); 
    } 
    else{
        $row2 = mysqli_fetch_row($result2);
        $numberOfUsers = $row2[0];
    }

    $sql3 = "SELECT COUNT(category_id) FROM `categories`";
    $result3 = mysqli_query($conn, $sql3);

    if(!$result3){
       echo "Failed" . mysqli_connect_error(); 
    } 
    else{
        $row3 = mysqli_fetch_row($result3);
        $numberOfCategories = $row3[0];
    }

    $sql4 = "SELECT COUNT(subcate_id) FROM `subcategories`";
    $result4 = mysqli_query($conn, $sql4);

    if(!$result4){
       echo "Failed" . mysqli_connect_error(); 
    } 
    else{
        $row4 = mysqli_fetch_row($result4);
        $numberOfSubCategories = $row4[0];
    }

    $sql5 = "SELECT COUNT(freelance_id) FROM `freelances`";
    $result5 = mysqli_query($conn, $sql5);

    if(!$result5){
       echo "Failed" . mysqli_connect_error(); 
    } 
    else{
        $row5 = mysqli_fetch_row($result5);
        $numberOfFreelancers = $row5[0];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/crud.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="js/bootstrap.min.js"></script>
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





            <div class="edit_admin" style="margin-top:200px;">
                <div style="height:10rem;">
                    <h2 style=" font-size:30px">number of projects is <span style="color:blue; font-size:40px"><?php echo $numberOfProjects;?></span></h2>
                </div>
                <div style="height:10rem;">
                    <h2 style=" font-size:30px">number of users is <span style="color:blue; font-size:40px"><?php echo $numberOfUsers;?></span></h2>
                </div>
                <div style="height:10rem;">
                    <h2 style=" font-size:30px">number of categories is <span style="color:blue;font-size:40px"><?php echo $numberOfCategories;?></span></h2>
                </div>
                <div style="height:10rem;">
                    <h2 style=" font-size:30px">number of subcategories is <span style="color:blue;font-size:40px"><?php echo $numberOfSubCategories;?></span></h2>
                </div>
                <div style="height:10rem;">
                    <h2 style=" font-size:30px">number of freelancers is <span style="color:blue;font-size:40px"><?php echo $numberOfFreelancers;?></span></h2>
                </div>
            </div>

        </div>
    </div>
    </div>


    <script src="js/dashboardhome.js"></script>

</body>

</html>