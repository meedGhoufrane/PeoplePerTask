<?php
session_start();
if(!isset($_SESSION['valid_seesion'])){
    header("Location: loginadmin.php");
    exit();
}
?>

<?php
REQUIRE 'connection.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $other = $_POST['other'];

    $sql = "UPDATE users SET `user_name`='$name' , `password`='$password', `email`='$email', `other`= '$other' WHERE `user_id`='$id' ";
    $result = mysqli_query($conn , $sql);
    if($result){
        header("Location: crud.php?msg=UPDATED SUCCEFULY");
    }
    else {
        echo "FAILED". mysqli_connect_error();   
     }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/crud.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Users</title>
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
            <div class="crud_inner">
                <h2>Update User</h2>
                <div class="crud_form">
                    <form action="" method="post" >
                        <div>
                            <label for="name">user_id:</label>
                            <input type="text" placeholder="user id" id="id" name="id">
                        </div>
                        <div>
                            <label for="name">Name:</label>
                            <input type="text" placeholder="new user name" id="name" name="name">
                        </div>
                        <div>
                            <label for="password">password:</label>
                            <input type="password" placeholder="new password" id="password" name="password">
                        </div>
                        <div>
                            <label for="email">email</label>
                            <input type="email" placeholder="new email" id="email" name="email">
                        </div>
                        <div>
                            <label for="other"">other info</label>
                        <input type=" text" placeholder="update informations" id="other" name="other">
                        </div>
                        <div class="form_submit">
                            <button type="submit" name="submit" id="submit">Submit</button>
                            <button>Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>