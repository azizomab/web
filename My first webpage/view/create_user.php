<?php

include '../controller/userC.php';

 
$error = "";

// create client
$user = null;

// create an instance of the controller
$userC = new userC();
 if (
     isset($_POST["username"]) &&
     isset($_POST["password"]) &&
     isset($_POST["email"]) &&
     isset($_POST["dob"])
)  {echo "heyy" ;
    if (
        !empty($_POST['username']) &&
        !empty($_POST["password"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["dob"])
    ) {
        $hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $user = new user(
            null,
            $_POST['username'],
            $hashed_password,
            $_POST['email'],
            new DateTime($_POST['dob'])
        );
       $userC->adduser($user);
        header('Location:home.html');
    } else
        $error = "Missing information";
}


?> 


<!DOCTYPE html>
<html>
<head>

  <!-- Site made with Mobirise Website Builder v5.8.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.8.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/image-194x190.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>C_user account</title>
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
    <script src=".\validation.js"></script> 
  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu cid-s48OLK6784" once="menu" id="menu1-l">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="./home.html">
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
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black show text-primary display-4" href="login.php">sign in</a></li>
                <li class="nav-item"><a class="nav-link link text-black show text-primary display-4" href="create_user.php">create account</a></li>
                <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="create_artist.php">for artist</a></li>
                <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="home.html">
                    <span class="mobi-mbri mobi-mbri-home mbr-iconfont mbr-iconfont-btn"></span>home</a></li>
                 <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="../back_office/index.php">admin</a></li>
                </ul>
                
                
            </div>
        </div>
    </nav>

</section>

<section data-bs-version="5.1" class="form6 cid-tAANHkh8Dm" id="form6-n">
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>become a fan !</strong></h3>
        </div>
         <div class="row justify-content-center mt-4">
           <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
 <form action=""  method="POST" onsubmit="return validateForm()"  class="mbr-form form-with-styler mx-auto">
              <div class="row">
                 <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some problem!</div>
                 </div>
                <div class="dragArea row">
                 <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="username">
             <input type="text" name="username" placeholder="username" id="username" data-form-field="username" class="form-control"  >
             <span id="username-error"></span>
                    </div>
                 <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="password">
                <input type="text" name="password" placeholder="password" data-form-field="password" class="form-control" id="password">
                <span id="password-error"></span>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="confirm-password">
            <input type="text" name="confirm-password" placeholder="confirm password" data-form-field="confirm-password" class="form-control" value="" id="confirm_password">
                     <span id="confirm-password-error"></span>
                        </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="email">
            <input type="email" name="email" placeholder="email" data-form-field="email" class="form-control"  id="email">
                   <span id="email-error"></span>
               </div>
            <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="dob">
             <input type="date" name="dob" placeholder="date of birth" data-form-field="dob" class="form-control" id="dob">
            <span id="dob-error"></span>
            </div>
                <div class="col-auto mbr-section-btn align-center">
            <button type="submit" class="btn btn-primary display-4">create account</button>
              </div>
             </div>
        </form>
            </div> 
        </div>
    </div>
</section>
<!--
<section data-bs-version="5.1" class="footer3 cid-s48P1Icc8J" once="footers" id="footer3-m">

    

       

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li  class="foot-menu-item mbr-fonts-style display-7"><a href="index.html#content1-8"class="text-success text-primary" target="_blank">  welcome </a></li>
                <li class="foot-menu-item mbr-fonts-style display-7"><a href="index.html#content1-8" class="text-success text-primary" target="_blank">soundspace Forums</a></li>
                <li class="foot-menu-item mbr-fonts-style display-7"><a href="https://soundspace.com/" class="text-success text-primary">soundspace.com</a></li></ul>
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
                    © hello fan !
                </p>
            </div>
        </div>
    </div>
</section><section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;"><a href="https://mobiri.se/" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 4rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a><p style="margin: 0;text-align: center;" class="display-7"> &#8204;</p></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
-->
</body>
</html>

