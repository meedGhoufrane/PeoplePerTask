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
    <link rel="stylesheet" href="css/crud.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">

    <title>Users</title>
    <style>
    .crud_link {
        text-decoration: none;
        color: black;
    }
    </style>
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
            <div class="crud">
                <div class="edit_admin">
                    <div onclick="newPage()">
                        <h2>Add User</h2>
                        <img src="images/add2.png" alt="right">
                    </div>
                    <div onclick="deletePage()">
                        <h2>Delete User</h2>
                        <img src="images/delete2.png" alt="right">
                    </div>
                    <div onclick="updatePage()">
                        <h2>Update User</h2>
                        <img src="images/edit2.png" alt="right">
                    </div>
                </div>
                <div class="edit_admin">
                    <div onclick="newProject()">
                        <h2>Add Project</h2>
                        <img src="images/addp.png" alt="right">
                    </div>
                    <div onclick="deleteProject()">
                        <h2>Delete Project</h2>
                        <img src="images/deletep.png" alt="right">
                    </div>
                    <div onclick="updateProject()">
                        <h2>Update Project</h2>
                        <img src="images/updatep.png" alt="right">
                    </div>
                </div>
                <div class="edit_admin">
                    <div onclick="addCategory()">
                        <h2>Add Category</h2>
                        <img src="images/cate.png" alt="right">
                    </div>
                    <div onclick="addSubCategory()">
                        <h2>Add SubCategory</h2>
                        <img src="images/subcate.png" alt="right">
                    </div>
                </div>
                <div class="edit_admin">
                    <div onclick="displayTest()">
                        <h2>Show Testemonial</h2>
                        <img src="images/testicon.png" alt="right">
                    </div>
                    <div>
                        <a href="deletetest.php" class="crud_link">
                            <h2>Delete Testemonial</h2>
                            <img src="images/deletetest.png" alt="right">
                        </a>
                    </div>
                </div>
                <div class="edit_admin">
                    <div>
                        <a href="addfreelancer.php" class="crud_link">
                            <h2>Add Freelancer</h2>
                            <img src="images/add2.png" alt="right">
                        </a>
                    </div>
                    <div>
                        <a href="deletefreelancer.php" class="crud_link">
                            <h2>Delete Freelancer</h2>
                            <img src="images/delete2.png" alt="right">
                        </a>
                    </div>
                    <div>
                        <a href="editfreelancer.php" class="crud_link">
                            <h2>Update Freelancer</h2>
                            <img src="images/edit2.png" alt="right">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/crud.js"></script>
</body>

</html>