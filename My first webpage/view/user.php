
<?php
include "../controller/userC.php";
session_start(); 
$iduser= $_SESSION['user_id'] ;
$userc=new userc();  
$user= $userc->showuser($iduser) ;
 //$_SESSION['users']=$user ; 
 
 
if (isset($_POST['logout'])) {
  // Unset all session variables
  $_SESSION = array();

  // Destroy the session
  session_destroy();

  // Redirect the user to the home page
//  ob_start(); // Start output buffering
header('Location: home.html');
// Your PHP code here
}


 ?>



<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.8.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.8.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/image-194x190.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>user</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap"></noscript>
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  
  
  
</head>
<body>
  
<section data-bs-version="5.1" class="menu cid-s48OLK6784" once="menu" id="menu1-h">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html#image3-9">
                        <img src="assets/images/image-194x190.png" alt="Mobirise Website Builder" style="height: 3.9rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="https://mobiri.se">SoundSpace<br></a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item dropdown">
                    <a class="nav-link link text-black text-primary dropdown-toggle display-4" href="home.html" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <span class="mbrib-setting mbr-iconfont mbr-iconfont-btn">My account</span></a><div class="dropdown-menu" aria-labelledby="dropdown-710">
                            <a class="text-black text-primary dropdown-item display-4" href="settings.php">
                            settings</a>
                            <div>
                            <Form method="post" action="">
                            <a class="text-black text-primary dropdown-item display-4">
                                 <button class="btn btn-success display-4" type="submit" name="logout" > log_Out </button> </a>
                            </form>
                                 </div>    
                            </div>
                    </li>
                </ul>  
            </div>
    </nav>

</section>

<section data-bs-version="5.1" class="header1 cid-s48MCQYojq" id="header1-f">

    

    

    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2"><strong>welcome to your world</strong></h1>
                
                <p class="mbr-text mbr-fonts-style display-7">website that contain +10000000 music for all types !</p>
                <div class="mbr-section-btn mt-3"><a class="btn btn-success display-4" href="https://mobirise.com">sign in</a> <a class="btn btn-success-outline display-4" href="https://mobirise.com">create &gt;</a></div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="countdown2 cid-tAExT3IJpJ" data-bg-video="https://youtu.be/xfk4OehB5PI?t=2734" id="countdown2-z">
    

    <div class="mbr-fallback-image disabled"></div>
    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(255, 255, 255);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h3 class="mbr-section-title mb-5 align-center mbr-fonts-style display-2">
                    <strong>welcome <?php echo $user['username'] ?></strong></h3>
                <h4 class="mbr-section-subtitle mb-5 align-center mbr-fonts-style display-7">
                    Use this block as a countdown for your project if it's not ready yet. Set the date in Block
                    Parameters.
                </h4>
                <div class="countdown-cont align-center mb-5">
                    <div class="daysCountdown col-xs-3 col-sm-3 col-md-3" title="Days"></div>
                    <div class="hoursCountdown col-xs-3 col-sm-3 col-md-3" title="Hours"></div>
                    <div class="minutesCountdown col-xs-3 col-sm-3 col-md-3" title="Minutes"></div>
                    <div class="secondsCountdown col-xs-3 col-sm-3 col-md-3" title="Seconds"></div>
                    <div class="countdown" data-due-date="2023/06/08"></div>
                </div>
                <p class="mbr-text mb-5 align-center mbr-fonts-style display-7"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mx-auto mbr-form" data-form-type="formoid">
                <form action="" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" >
                   
                </form>
            </div>
        </div>
    </div>
    <div style="position: relative;">
  <div style="background-color: #f0f0f0; padding: 20px;">
    <!-- your section content goes here -->
  </div>
  <form action="../view1/add_donation.php" style="position: absolute; bottom: 20px; right: 20px;">
    <button style="background-color: #0b5761; border: none; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 20px; border-radius: 50%; cursor: pointer;">add donation</button>
  </form>
</div>

</section>

<section data-bs-version="5.1" class="header13 cid-tAExsdmK0x" id="header13-w">

    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-11">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>Attractive landing pages</strong></h1>
                
                <p class="mbr-text mbr-fonts-style mb-3 display-7">
                    Mobirise is a free offline app for Windows and Mac to easily create small/medium websites, landing
                    pages, portfolios. 3500+ beautiful website blocks, templates and themes help you to start easily.
                </p>
                
                
            </div>
        </div>
    </div>
    
</section>

<section data-bs-version="5.1" class="footer3 cid-tAAP8ZL6Qh" once="footers" id="footer3-u">

    



    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7">qsdqsdqsd</li><li class="foot-menu-item mbr-fonts-style display-7"><a href="index.html#content1-8" class="text-success text-primary" target="_blank">soundspace Forums</a></li><li class="foot-menu-item mbr-fonts-style display-7"><a href="https://soundspace.com/" class="text-success text-primary">soundspace.com</a></li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2020 Mobirise. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
   

</section><section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;"><a href="https://mobiri.se/" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 4rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a><p style="margin: 0;text-align: center;" class="display-7">Made with  &#8204;</p><a style="z-index:1" href="https://mobirise.com/builder/html-code-generator.html">HTML Code Generator</a></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/countdown/countdown.js"></script>  <script src="assets/vimeoplayer/player.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
  
</body>
</html>


