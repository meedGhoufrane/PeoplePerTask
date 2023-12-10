
<?php
include '../fillesign/login.php';
require '../pages/cnx.php';

session_write_close();
session_start();
?>


<div class="row ">
    <div class="col-1" id="column1">
        <a href="#"><img id="logo" src="../images/PeoplePerTask.png" alt="logo">
        </a>
        <div id="menu">
        <div id="home-container">
        <a href="dashboard.php"><img src="../images/material-symbols_home-rounded.svg" alt="Home">
        <p class="menu-paragraph">categories</p>
        </a>
        </div>
        <div class="menu-section">
        <a href="dashboardtrend.php"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M0 96C0 60.7 28.7 32 64 32H196.1c19.1 0 37.4 7.6 50.9 21.1L289.9 96H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V160c0-8.8-7.2-16-16-16H286.6c-10.6 0-20.8-4.2-28.3-11.7L213.1 87c-4.5-4.5-10.6-7-17-7H64z"/></svg>
        <p class="menu-paragraph">Project</p></a>
        </div>
        <div class="menu-section">
        <a href="temoignages.php"><img src="../images/jam_messages-alt.svg" alt="feedbacks">
        <p class="menu-paragraph">temoignages</p></a>
        </div>
        <div class="menu-section">
        <a href="dashboardusers.php"><img src="../images/group2 1.png" alt="Users">
        <p class="menu-paragraph">Users</p></a>
        </div>
        <div class="menu-section">
        <a href="./stats.php"><img src="../images/graph2 1.png" alt="Stats">
        <p class="menu-paragraph">Stats</p></a>
        </div>
        <div class="line">
        </div>
        <div class="menu-section">
        <a href="#"><img src="../images/Vector.svg" alt="help"></a>
        </div>
        <div class="menu-section">
        <a href="#"><img src="../images/Vector2.svg" alt="settings"></a>
        </div>
        </div>
        </div>
<div class="col-11" id="column2" >
    <div id="nav-bar">
        <img id="menu-logo" style="height: 40px; " src="../images/more.png" alt="menu">
        <div id="nav-bar-section2">
        <img id="notification"  src="../images/carbon_notification-new.svg" alt="notification-icon">
        <div id="profil" style ="margin-right: 2rem;">
            <h1><samp class="text-red-500" style= "font-family : poppins"><?php echo'Welcome back, ' . $_SESSION['name'] ; ?></samp></h1>
            <a href="../profiles/profile.php"><img  id="img" src="../pages/path/to/secure/directory/<?= $_SESSION['img'] ?>" 
            alt="profil" style=" border-radius : 50%"></a>
            <a  id="logoutbtn" type="button" class="btn btn-danger" role="botton" href="../fillesign/logout.php" >logout</a>
        </div>
        </div>
        </div>
       
                