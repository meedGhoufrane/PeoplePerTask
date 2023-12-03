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
    $tittle = $_POST['tittle'];
    $descreption = $_POST['descreption'];
    $cate_id = $_POST['cate_id'];
    $subcate_id = $_POST['subcate_id'];

    $sql = "UPDATE projects SET `project_tittle`='$tittle' , `descreption`='$descreption', `category_id`='$cate_id', `subcate_id`= '$subcate_id' WHERE `project_id`='$id' ";
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
                <h2>Update Project</h2>
                <div class="crud_form">
                    <form action="" method="post">
                        <div>
                            <label for="id">project id:</label>
                            <input type="number" placeholder="id" id="id" name="id">
                        </div>
                        <div>
                            <label for="name">new tittle:</label>
                            <input type="text" placeholder="new tittle" id="tittle" name="tittle">
                        </div>
                        <div>
                            <label for="descreptionl">new descreption</label>
                            <input type="text" placeholder="new descreption" id="descreption" name="descreption">
                        </div>
                        <div>
                            <label for="cate_id"">new category_id</label>
                        <input type=" number" placeholder="new cate_id" id="cate_id" name="cate_id">
                        </div>
                        <div>
                            <label for="subcate_id"">new subcate_id</label>
                        <input type=" number" placeholder="new subcate_id" id="subcate_id" name="subcate_id">
                        </div>
                        <div class="form_submit">
                            <button type="submit" name="submit" id="submit">Submit</button>
                            <button onclick="cancelSubmit">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>