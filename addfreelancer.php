<?php
session_start();
if(!isset($_SESSION['valid_seesion'])){
    header("Location: loginadmin.php");
    exit();
}
?>

<?php
REQUIRE 'connection.php';
//REQUIRE 'connection.php';


if(isset($_POST['submit'])){
    $skills = $_POST['skills'];
    $id= $_POST['id'];

    $skills2 = htmlspecialchars($skills);

    $sql = "INSERT INTO `freelances`(`freelance_id`,`skills`,`user_id`)
    VALUES (NULL,'$skills2','$id')";

    $result = mysqli_query($conn , $sql);
    if($result){
        header("Location: crud.php?msg=NEW RECORD CREATED SUCCESFULY");
    }
    else{
        echo "Failed" . mysqli_connect_error();
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
                <h2>Add User</h2>
                <div class="crud_form">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div>
                            <label for="skills">skills:</label>
                            <input type="text" placeholder="skills" id="skills" name="skills">
                        </div>
                        <div>
                            <label for="id">user id</label>
                            <input type="number" placeholder="id" id="id" name="id">
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
