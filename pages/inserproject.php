<?php

require 'cnx.php';
session_start();

if (isset($_POST['submit'])) {
$Titre = $_POST['Title'];
$Descriptions = $_POST['Descriptions'];
$idcat = $_POST['nomcat'];
$iduser = $_POST['iduser'];

$sql= "INSERT INTO Projets(Titre,Descriptions,idcat,iduser)
VALUES('$Titre','$Descriptions',$idcat,$iduser)";

$rest = mysqli_query($cnx,$sql);
if ($rest)
    header("location:index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/header_footer.css">
    <title>PeoplePerTask</title>
</head>
<style>
    .form{
        width: 60%;
        display: flex;
    }
    form{
        padding-left:17rem;
    }
    #button{
        margin-top: 5rem;
    }
    #img{
        width: 13%;
        height: 13%;
        border-radius: 50%;
        float: inline-end;

    }
    .profile{
        width: 30%;
    }
    .form{
        margin-top: 5rem;
        margin-left: 16rem;
    }
</style>
<body>

<header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="#"><img src="../images/PeoplePerTask.png" style="width: 12rem;" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars" style="color: #6298f3;"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin: 0 auto;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="search.php">Searsh</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                </ul>
                <?php if(!isset($_SESSION['name'])){?>
                <form class="d-flex nav_btn" role="search">
                  <a href="sign.php" class="btn btn-primary">Connect</a>
                </form>
                <?php }else{?>
                    <a href="profileuser.php" class="profile"><img  id="img" src="../fillesign/path/to/secure/directory/<?= $_SESSION['img'] ?>" alt="profil"></a>
                    <a  id="logoutbtn" type="button" class="btn btn-danger" role="botton" href="../fillesign/logout.php" >logout</a>
                    <?php };
                     ?>
                <i id="dark-mode-toggle" class="fas fa-moon ps-3 "></i>
              </div>
            </div>
          </nav>
    </header>

<section class ="form">
    <div id="content w-100" >
        <form  method="POST">
        <div class="mb-4 ">
            <label for="exampleInputEmail1" class="form-label" >Title</label>
            <input type="text" class="form-control" name="Title" id="Title">
        </div>
        <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label">Descriptions</label>
            <input type="text" class="form-control"  name="Descriptions" id="Descriptions">
        </div>
        <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label">categories</label>
            <select class="py-2 w-100 bg-gray-200 text-gray-500 rounded-md" name="nomcat" id="nomcat">
                <option class="text-gray-500" disabled selected value="">Select le nom de categories</option>
                <?php
                $sql = "select * from categories;";
                $res = mysqli_query($cnx, $sql);
                if (mysqli_num_rows($res) > 0):
                    print_r($res);
                    while ($row = mysqli_fetch_assoc($res)) :
                        echo "<option value=" . $row['id'] . ">" . $row['nomcat'] . "</option>";
                    endwhile;
                endif;
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">user name</label>
            <select class="py-2 w-100 bg-gray-200 text-gray-500 rounded-md" name="iduser" id="iduser">
                <option class="text-gray-500" disabled selected value="">Select user name</option>
                <?php
                $sql = "select * from user;";
                $res = mysqli_query($cnx, $sql);
                if (mysqli_num_rows($res) > 0) :
                    print_r($res);
                    while ($row = mysqli_fetch_assoc($res)) :
                        echo "<option value=" . $row['id'] . ">" . $row['Nom'] . "</option>";
                    endwhile;
                endif;
                ?>
            </select>
            </div>
        <button id="button" name="submit" type="submit" class="btn btn-primary ">Create Project</button>
        </form>
    </div> 
</section>

    <script src="../js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e80051e55f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</html>