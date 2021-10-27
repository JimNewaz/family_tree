<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>Family Tree</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <!-- Font Awesome -->
  <link href="css/font-awesome.css" rel="stylesheet">
  <!-- Skill Progress Bar -->
  <link href="css/pro-bars.css" rel="stylesheet" type="text/css" media="all" />
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <!-- Default Theme CSS File-->
  <link id="switcher" href="css/themes/default-theme.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <!-- Main css File -->
  <link href="style.css" type="text/css" rel="stylesheet" media="screen,projection" />

  <!-- Font -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .button {
      background-color: #49274A;
      /* border-radius: 25px; */
      padding: 20px 40px;
      width: 171px;
      height: 48px;
      color: white;
      /* padding-top: 12px; */
      border-color: #707070;
      text-decoration:none;
    }

    .vertical-line {
      display: inline-block;
      border-left: 6px solid #FCF2D9;

      height: 1000px;
    }

    .ontop {
      z-index: 9999;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      display: none;
      position: fixed;
      background-color: #000000ba;
      color: #aaaaaa;
      opacity: .99;
      filter: alpha(opacity=99);
    }

    #popup {
      width: 1000px;
      height: 600px;
      position: absolute;
      color: #000000;
      background-color: white;
      /* To align popup window at the center of screen*/
      top: 10%;
      /* left: 30%; */
      margin-top: 18px;
      margin-left: 142px;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      width: 40%;
    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }
  </style>
  
  <script src="https://use.fontawesome.com/9e223a6a76.js"></script>
</head>

<body>
  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div class="progress">
      <div class="indeterminate"></div>
    </div>
  </div>
  <!-- END PRELOADER -->
  <header id="header" role="banner">
    <div class="navbar-fixed">
      <nav>
        <div class="container">
          <div class="nav-wrapper">

            <!-- LOGO -->

            <!-- TEXT BASED LOGO -->
            <!-- <a href="index.html" class="brand-logo">MU Material</a> -->

            <!-- Image Based Logo -->
            <a href="index.php" class="brand-logo"><img src="img/logo.png" alt="logo img"></a>
            <ul class="right hide-on-med-and-down custom-nav menu-scroll">
              <li><a href="#about">Home</a></li>
              <li><a href="addmember.php">Create</a></li>
              <li><a href="#portfolio">View</a></li>
              <li><a href="#testimonial">Life Experience Hall</a></li>
              <li><a href="#blog">Store</a></li>
              <li><a href="#footer">About Us</a></li>
              <li><a href="#footer">中文</a></li>
              <li><a style="background: #F8EEE7;color: #49274A;border-radius: 60%;" href="#footer">EN</a></li>
            </ul>
            <!-- For Mobile View -->
            <ul id="slide-out" class="side-nav menu-scroll">
              <li><a href="#about">Home</a></li>
              <li><a href="#resume">Create</a></li>
              <li><a href="#portfolio">View</a></li>
              <li><a href="#testimonial">Life Experience Hall</a></li>
              <li><a href="#blog">Store</a></li>
              <li><a href="#footer">About Us</a></li>
            </ul>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
          </div>
        </div>
      </nav>
    </div>
  </header>
    


    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="box" style="background-color:white; height:300px; border:1px solid #94618E; margin-top:100px; margin-bottom:100px; padding:125px">
                        <div class="inner">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-3">
                                   <a href="tree-intro.php" class="button">Family Tree</a> 
                                </div>
                                <div class="col-md-3">
                                <a href="map-intro.php" class="button">Family Map</a> 
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            
                            
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>























    
  <!-- Start Footer -->
  <footer id="footer" role="contentinfo">
    <!-- Start Footer Top -->
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <div class="footer-top-inner">
              <div class="col-sm-2"><img src="img/footer.png" alt="logo img"></div>
              <div class="col-sm-4">
                <p style="color: white;">To honor and keep the memories of the lost love ones<br>
                  COPYRIGHT @2021 BEAUTIFUL SOULS. ALL RIGHTS RESERVED</p>
              </div>
              <div class="col-sm-2"><a href="#" style="color: white;">Contact US</a></div>
              <div class="col-sm-1"><a href="#" style="color: white;">Help/FAQ</a></div>
              <div class="col-sm-3"><a href="#" style="color: white;">Terms & Conditions</a>

                <br><br><img src="img/fb.png">
                &nbsp;&nbsp;&nbsp;<img src="img/twitter.png">
                &nbsp;&nbsp;&nbsp;<img src="img/insta.png">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Start Footer Bottom -->
 

  </footer>
  </main>
  </div>
  <!-- jQuery Library -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Materialize js -->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!-- Skill Progress Bar -->
  <script src="js/appear.min.js" type="text/javascript"></script>
  <script src="js/pro-bars.min.js" type="text/javascript"></script>
  <!-- Owl slider -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Mixit slider  -->
  <script src="https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
  <!-- counter -->
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>

  <!-- Custom Js -->
  <script src="js/custom.js"></script>
</body>

</html>