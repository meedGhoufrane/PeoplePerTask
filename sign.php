<?php
require 'connection.php';
//LOG OUT

if(isset($_POST['submit'])){
    $fname = $_POST['name'];
    $upassword = $_POST['password'];
    $uemail= $_POST['email'];
    $password = $_POST['password2'];
    $password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
if($upassword == $password){   
$duplicate_email = "SELECT * FROM `users` WHERE `email`='$uemail'";
$duplicate_query = mysqli_query($conn, $duplicate_email);

$duplicate_name = "SELECT * FROM `users` WHERE `user_name`='$fname'";
$duplicate_name_query = mysqli_query($conn, $duplicate_name);
if(mysqli_num_rows($duplicate_query)>0 || mysqli_num_rows($duplicate_name_query)>0 ){
    echo "<script>alert('Error: email or name already exists , try different one or login')</script>";
}else{
$sql = "INSERT INTO `users`(`user_id`,`user_name`,`password`,`email`)
VALUES (NULL,'$fname','$password_hash','$uemail')";
$result = mysqli_query($conn, $sql);
if(!$result){
    echo "failed". mysqli_query_error();
}
else{
    echo "<script>alert('account created succesfult you can now log in');</script>";
}
}
}
else{
    echo "<script>alert('passwords dont match');</script>";
}
}
//LOG IN
session_start();
if(isset($_POST['submit2'])){
    $email_login = $_POST['email2'];
    $password_login = $_POST['password2'];


    $login_sql = "SELECT * FROM `users` WHERE `email`= '$email_login'";

    $login_result = mysqli_query($conn, $login_sql);

    if(!$login_result){
        echo "failed". mysqli_query_error();
    }else if(empty($email_login) ||empty($password_login)){
        echo "email or password empty fill them!!";
    }

    if(mysqli_num_rows($login_result)!=0){
       
        $fetch = mysqli_fetch_assoc($login_result);
        if(password_verify($password_login,$fetch['password'])){
            $username = $fetch['user_name'];
            echo $email;
            setcookie('user_name',$username,time()+10);
            $_SESSION['user_name']=$username;
            header("Location: index.php?msg=nice");
        }
        else{
            echo "<script>alert('user unfound ');</script>";  
        }
    }else{
        echo "<script>alert('user unfound ');</script>"; 
    }

    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sign.css">
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>PeoplePerTask</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="images/PeoplePerTask.png" style="width: 12rem;"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link active" aria-current="page" href="search.php">Search</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex nav_btn" role="search">
                        <a href="#" class="btn btn-primary">Connect</a>
                    </form>
                    <i id="dark-mode-toggle" class="fas fa-moon ps-3 "></i>
                </div>
            </div>
        </nav>
    </header>
    <!-- <section class="container-sign" id="main">
                <div class="sign-up">
                    <h2>Create Account</h2>
                    <div class="icons">
                    <img src="/images/fb.svg">
                    <img src="/images/chrome.svg">
                    <img src="/images/in.svg"> 
                    </div>
                    <span>or use your email for registration</span>
                  <div> 
                        <form class="w-50">
                            <div class="mb-3">
                                <label for="Name" style="font-size: 12px;" class="form-label" >Name</label>
                                <input type="text"  style="width: 100%;" class="form-control border-bottom border-0 border " id="Name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label" style="font-size: 12px;">Email </label>
                                <input type="email"  style="width: 100%;"   class="form-control border-bottom border-0 border " id="exampleInputEmail1" aria-describedby="emailHelp">
                
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label" style="font-size: 12px;">Password</label>
                                <input type="password"  style="width: 100%;" class="form-control border-bottom border-0 border " id="exampleInputPassword1">
                            </ div>
                            <button type="submit" class="btn text-white rounded-pill btn-outline-primary " style="background-color: #3498DB;width:164px; height:39px " >Submit</button> 
                    </form>
                </div>
                </div>
                <div class="sign-in">
                    <h2>Sign in</h2>
                    <div class="icons">
                    <img src="/images/fb.svg">
                    <img src="/images/chrome.svg">
                    <img src="/images/in.svg"> 
                    </div>
                    <span>or use your account</span>
                    <div> 
                            <form class="w-50">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label" style="font-size: 12px;">Email </label>
                                    <input type="email"  style="width: 100%;"   class="form-control border-bottom border-0 border " id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label" style="font-size: 12px;">Password</label>
                                    <input type="password"  style="width: 100%;" class="form-control border-bottom border-0 border " id="exampleInputPassword1">
                                </div>
                                <span style="display: block;">Forgot your password?</span>
                                <button type="submit" class="btn text-white rounded-pill btn-outline-primary btn-outline-primary:hover" style="background-color: #3498DB;width:164px; height:39px " >Submit</button> 
                        </form>
                    </div>
                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-left">
                            <h2>Welcome Back!</h2>
                            <p>To keep connected with us please login  with  your personnal info</p>
                            <button type="button" class="btn text-white rounded-pill btn-outline-primary "  id="signIn">Sign in</button>
                        </div>
                        <div class="overlay-right">
                            <h2>Hello,Friend!</h2>
                            <p>Enter your personal details and  start journey with us</p>
                            <button type="button" class="btn text-white rounded-pill btn-outline-primary " style="width:164px; height:39px "  id="signUp" >Sign in</button>
                        </div>

                    </div>
                </div>
          </section>
     
    -->
    <section class="container-sign" id="main">
        <div class="sign-up">
            <h2>Create Account</h2>
            <span>or use your email for registration</span>
            <form class="w-50" method="post">
                <div class="mb-3">
                    <label for="name" style="font-size: 12px;" class="form-label">Username</label>
                    <input name="name" id="name" placeholder="username">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label" style="font-size: 12px;">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label" style="font-size: 12px;">Password</label>
                    <input type="password" name="password" id="password" placeholder="PassWord">
                </div>
                <div class="mb-3">
                    <label for="password2" class="form-label" style="font-size: 12px;">confirm Password</label>
                    <input type="password" name="password2" id="password2" placeholder="confirm password">
                </div>
                <span class="mobile"><a href="signInMobile.php">sign in</a></span>
                <button name="submit" type="submit" class="btn text-white rounded-pill btn-outline-primary"
                    style="background-color: #3498DB; width:164px; height:39px" id="submit">Submit</button>
            </form>
        </div>
        <div class="sign-in">
            <h2>Log In</h2>
            <form class="w-50" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label" style="font-size: 12px;">Email</label>
                    <input name="email2" type="email" style="width: 80%;" class="form-control border-bottom border-0 border"
                        id="exampleInputEmail2" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword2" class="form-label" style="font-size: 12px;">Password</label>
                    <input name="password2" type="password" style="width: 80%;" class="form-control border-bottom border-0 border"
                        id="exampleInputPassword2">
                </div>
                <span class="mobile"><a href="signmobile.php">sign up</a></span>
                <button name="submit2" type="submit" class="btn text-white rounded-pill btn-outline-primary"
                    style="background-color: #3498DB; width:164px; height:39px">Submit</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-left">
                    <h2>Welcome Back!</h2>
                    <p>To keep connected with us please login with your personal info</p>
                    <button type="button" class="btn text-white rounded-pill btn-outline-primary"
                        style="width:164px; height:39px" id="signIn">Log In</button>
                </div>
                <div class="overlay-right">
                    <h2>Hello, Friend!</h2>
                    <p>Enter your personal details and start your journey with us</p>
                    <button type="button" class="btn text-white rounded-pill btn-outline-primary"
                        style="width:164px; height:39px" id="signUp">Sign up</button>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-3">
                        <div class="single-cta">
                            <i class="fa-solid fa-map" style="color: #f39c12;"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>1010 Avenue, sw 54321, chandigarh</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-3">
                        <div class="single-cta">
                            <i class="fas fa-phone" style="color: #f39c12;"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>9876543210 0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-3">
                        <div class="single-cta">
                            <i class="fa-solid fa-envelope" style="color: #f39c12;"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>mail@info.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-3">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.php"><img src="images/PeoplePerTask.png" class="img-fluid"
                                        alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>At PeoplePerTask, we foster a thriving community of skilled professionals and
                                    businesses, seamlessly facilitating the connection between talent and tasks. With a
                                    commitment to excellence and user satisfaction, our platform serves as a dynamic hub
                                    for collaboration, enabling individuals and companies to achieve their goals
                                    efficiently and effectively.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget ps-lg-5">
                            <div class="footer-widget-heading">
                                <h3>Links</h3>
                            </div>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">Searsh</a></li>
                                <li><a href="#">Profil</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center mx-auto">
                        <div class="copyright-text">
                            <p>© 2023 PeoplePerTask. All rights reserved </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/sign.js"></script>
    <script src="https://kit.fontawesome.com/e80051e55f.js" crossorigin="anonymous"></script>
</body>

</html>