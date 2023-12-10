<?php
require 'cnx.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/about-contact.css">
    <link rel="stylesheet" href="../css/header_footer.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/index.css">
   
    <title>PeoplePerTask</title>
</head>

<body>
<style>
    #logoutbtn{
            margin-left: 1rem;
    
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

</style>

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

    <div class="section-hero container pt-5">
        <div class="row">
            <div class="col-md-6 pt-5">
                <h2 class="style" style="color: #6298f3;">About <span class="style" style="color: #f39c12;">Us</span>
                </h2>
                <p>Welcome to PeoplePerTask! Our platform was founded in 2015 with the vision of creating a dynamic
                    space that bridges the gap between talented freelancers and businesses worldwide. With a passion for
                    fostering meaningful collaborations and empowering the freelance community, we are dedicated to
                    providing a seamless and secure environment for both freelancers and clients to connect and thrive.
                </p>
                <button type="button" class="services-btn btn rounded-pill px-3 my-3" id="openModalBtn">Read more</button>
            </div>
            <div class="col-md-6 ">
                <div class="ml-3">
                    <img src="../images/Group 38.svg" class="img-fluid " alt="section-hero image">
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="style-vector">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="15%" viewBox="0 0 1440 238" fill="none">
                <path
                    d="M0 0H60.125C120.25 0 240.5 3.03031e-06 360.75 5.61361C481 11.6509 601.25 22.2426 721.5 62.1734C841.75 101.68 962 169.467 1082.25 175.081C1202.5 181.118 1322.75 123.923 1382.88 96.0669L1443 67.787V237.254H1382.88C1322.75 237.254 1202.5 237.254 1082.25 237.254C962 237.254 841.75 237.254 721.5 237.254C601.25 237.254 481 237.254 360.75 237.254C240.5 237.254 120.25 237.254 60.125 237.254H0V0Z"
                    fill="#3498DB" fill-opacity="0.2" />
            </svg>
            <h2 class="position-absolute ">The Founder</h2>
        </div>
    </div>
    <div class="founder-container">
        <div class="section-founder container">
            <div class="row">
                <div class="col-md-6">
                    <img src="../images/Group 1000004885.svg" class="img-fluid" alt="section-hero image">
                </div>
                <div class="col-md-6 pt-5">
                    <p>Meet Mohammed Elarbi EL Hattab, the visionary entrepreneur behind FreelanceNow. With a background
                        in digital marketing and a passion for empowering freelancers, Sarah embarked on a mission to
                        create a platform that would revolutionize the way professionals connect and collaborate in the
                        gig economy. Drawing from her own experiences as a freelancer, Sarah envisioned a user-friendly,
                        secure, and transparent platform that would bridge the gap between businesses and freelancers
                        worldwide.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="peopleperTask-idea">
        <div class="container">
            <div class="col-md-6 mx-auto my-4">
                <h2 class="pt-5">The Idea Behind PeoplePerTask</h2>
                <p class="py-3">PeoplePerTask was born out of the belief that every individual should have the opportunity to
                    leverage their skills and expertise, regardless of their location or background. The platform was
                    designed to provide a streamlined and efficient solution for businesses seeking top-tier talent and
                    for freelancers searching for meaningful projects to showcase their abilities. By prioritizing
                    fairness, transparency, and user satisfaction, FreelanceNow aims to create a thriving ecosystem
                    where freelancers and businesses can collaborate seamlessly, fostering growth and success for all
                    parties involved.</p>
            </div>
        </div>
    </div>
    <div class="faq-container" style="background-color: #3498DB33;">
        <div class="Faq-section">
        <h2 class="px-auto">Most Asked Question</h2> 
        <div class="faq-container">
            <h3 class="faq-question py-3">What People?</h3>
            <div class="faq-answer hidden">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde qui facilis cupiditate, aliquam aut
                    amet laborum et ut praesentium blanditiis velit fugiat expedita inventore neque, optio doloremque
                    doloribus dolore soluta illum? Laudantium assumenda corrupti sed! Molestiae voluptate amet ad
                    provident.</p>
            </div>
        </div>
        <div class="faq-container">
            <h3 class="faq-question py-3">What about our services?</h3>
            <div class="faq-answer hidden">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor praesentium explicabo delectus vitae
                    fugit fugiat blanditiis debitis laborum, eveniet quae recusandae neque voluptas excepturi inventore
                    totam unde cumque at eum exercitationem eligendi sed amet iusto ipsum. Adipisci fuga beatae quaerat!
                </p>
            </div>
        </div>
        <div class="faq-container">
            <h3 class="faq-question py-3">Why you shoud choose us?</h3>
            <div class="faq-answer hidden">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur officiis cum voluptate dolorum
                    aut illum necessitatibus incidunt ipsa amet, deserunt dignissimos, pariatur, voluptatum quia.
                    Ratione quidem odit vitae quisquam non?</p>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModalBtn">&times;</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi quibusdam quisquam, facere temporibus dolorum culpa modi illum laboriosam natus soluta ea ipsa laborum similique autem aliquam officia nemo neque magnam.</p>
        </div>
    </div>
    </div>
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
                                <a href="index.php"><img src="../images/PeoplePerTask.png" class="img-fluid"
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
                                <li><a href="about.php">about</a></li>
                                <li><a href="search.php">Searsh</a></li>
                                <li><a href="contact.php">Contact</a></li>
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

    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/about.js"></script>
    <script src="https://kit.fontawesome.com/e80051e55f.js" crossorigin="anonymous"></script>
</body>

</html>
