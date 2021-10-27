<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Family Map</title>

    <!-- CSS  -->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Skill Progress Bar -->
    <link href="css/pro-bars.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- Default Theme CSS File-->
    <link id="switcher" href="css/themes/default-theme.css" type="text/css" rel="stylesheet"
        media="screen,projection" />
    <!-- Main css File -->
    <link href="style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" href="print.css" type="text/css" media="print" />

    <!-- Font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .button {
            background-color: #49274A;
            border-radius: 25px;
            padding: 20px;
            width: 171px;
            height: 48px;
            color: white;
            padding-top: 12px;
            border-color: #707070;
        }

        .vertical-line {
            display: inline-block;
            border-left: 6px solid #FCF2D9;

            height: 1000px;
        }

        .ontop {
            /* z-index: 9999; */
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            display: none;
            position: absolute;
            background-color: #565555;
            color: #aaaaaa;
            opacity: .99;
            filter: alpha(opacity=99);
        }

        #popup {
            width: 1200px;
            height: 600px;
            position: absolute;
            color: #000000;
            background-color: white;
            /* To align popup window at the center of screen*/
            top: 30%;
            left: 30%;
            margin-top: -100px;
            margin-left: -150px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 40%;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        @media print {
            body * {
                visibility: hidden;
            }

            #section-to-print,
            #section-to-print * {
                visibility: visible;
            }

            #section-to-print {
                position: absolute;
                left: 0;
                top: 0;
            }
        }

        .line {
            height: 1px;
            /* background-color: #e9e9ed; */
            /* padding: 1px; */
        }

        .left-rotate {
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .left-rotate-2 {
            -ms-transform: rotate(69deg);
            -webkit-transform: rotate(69deg);
            transform: rotate(69deg);
        }

        .left-rotate-3 {
            -ms-transform: rotate(75deg);
            -webkit-transform: rotate(75deg);
            transform: rotate(75deg);
        }

        .left-rotate-4 {
            -ms-transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .right-rotate-2 {
            -ms-transform: rotate(111deg);
            -webkit-transform: rotate(111deg);
            transform: rotate(111deg);
        }

        .right-rotate-3 {
            -ms-transform: rotate(105deg);
            -webkit-transform: rotate(105deg);
            transform: rotate(105deg);
        }

        .zigzag {
            margin: 7.5% 0;
            background: #F6F7F9;
            position: relative;
            height: 16px;

            -ms-transform: rotate(135deg);
            -webkit-transform: rotate(135deg);
            transform: rotate(135deg);
        }

        .zigzag:before,
        .zigzag:after {
            content: "";
            display: block;
            position: absolute;
            left: 0;
            right: 0;
        }

        .zigzag:before {
            height: 12px;
            top: 110%;
            background: linear-gradient(-135deg, #5f5d5d 8px, transparent 0) 0 8px, linear-gradient(135deg, #5f5d5d 8px, transparent 0) 0 8px;
            background-position: top left;
            background-repeat: repeat-x;
            background-size: 16px 16px;
        }

        .zigzag:after {
            height: 16px;
            top: 100%;
            background: linear-gradient(-135deg, #F6F7F9 8px, transparent 0) 0 8px, linear-gradient(135deg, #F6F7F9 8px, transparent 0) 0 8px;
            background-position: top left;
            background-repeat: repeat-x;
            background-size: 16px 16px;
        }

        .vertical {
            border-left: 3px solid black;
            height: 220px;
            position: absolute;
            left: 50%;
            top: 150px
        }

        .frame {
            width: 300px;
            height: 250px;
            border: 3px solid #ccc;
            background: #eee;
            margin: auto;
            padding: 15px 10px;
        }
    </style>
    <script type="text/javascript">
        function pop(div) {
            document.getElementById(div).style.display = 'block';
        }

        function hide(div) {
            document.getElementById(div).style.display = 'none';
        }
        //To detect escape button
        document.onkeydown = function (evt) {
            evt = evt || window.event;
            if (evt.keyCode == 27) {
                hide('popDiv');
            }
        };
    </script>
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
                            <li><a style="background: #F8EEE7;color: #49274A;border-radius: 60%;" href="#footer">EN</a>
                            </li>
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
                        <a href="#" data-activates="slide-out" class="button-collapse"><i
                                class="mdi-navigation-menu"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="main-wrapper">
        <main role="main">
            <!-- START HOME SECTION -->


            <!-- START ABOUT SECTION -->
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <h1>Family Map</h1>
                        </div>
                        <div class="col-sm-4">

                        </div>
                        <div class="col-sm-2" style="margin-top: 20px;"><input type="button" class="button"
                                value="Edit">
                        </div>
                        <div class="col-sm-2" style="margin-top: 20px;"><input onclick="window.print()" type="button"
                                class="button" value="Save as PDF">
                        </div>
                    </div>


                    <div class="container" style="background-color:white; height: 500px">
                        <div class="row">
                            <div class="col-md-12">
                                <div style="padding:50px 100px 50px 100px">

                                    <h3>Introduction</h3>
                                    <br>
                                    <p>
                                        What is Lorem Ipsum?
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                        recently with desktop publishing software like Aldus PageMaker including
                                        versions of Lorem Ipsum.
                                        <br><br>
                                        Why do we use it?
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English. Many desktop
                                        publishing packages and web page editors now use Lorem Ipsum as their default
                                        model text, and a search for 'lorem ipsum' will uncover many web sites still in
                                        their infancy. Various versions have evolved over the years, sometimes by
                                        accident, sometimes on purpose (injected humour and the like).


                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>














                    <!-- Row 1 -->
                    <div id="section-to-print" class="col-sm-12" style="background: #F8F9FB;">
                        <div class="col-sm-1"></div>

                        <?php
                  $data=mysqli_query($con,"select * from mapmember where userid='1' and title='Father'");
                  $r=mysqli_fetch_assoc($data);


                  $gender=$r['gender'];
                    if($gender=='male')
                    {
                      $clr="#006AFF";
                    }
                    if($gender=='female')
                    {
                      $clr="#EA206D";
                    }
                  if($r)
                  {

              ?>

                        <div class="col-sm-3">
                            <div id="father" class="card" style="width: 250px;">
                                <center>

                                    <p style="color:<?php echo $clr;?>"><?php echo $r['title'];?></p>
                                    <h4><b><?php echo $r['name'];?></b></h4>
                                    <p><?php echo $r['dob'];?>-<?php echo $r['status'];?></p>

                                    <img class="rounded-circle"
                                        style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid <?php echo $clr;?>;"
                                        src="<?php echo $r['pic'];?>" alt="Avatar">
                                    <br>
                                    <p><?php echo $r['hob'];?></p><br>
                                    <p><?php echo $r['pos'];?></p>
                                    <p><?php echo $r['neg'];?></p>
                                    <br>
                                    <p>Stances: <?php echo $r['cs'];?></p>

                                </center>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-4">
                            <!-- <svg height="300" width="400">
                <g fill="none" stroke="black" stroke-width="4">

                  <path stroke-dasharray="10,10" d="M90 150 l250 0" />

                </g>
                Sorry, your browser does not support inline SVG.
              </svg> -->
                            <center>
                                <p style="margin-top:120px;">M. 1960</p>
                                <div class="vertical"></div>
                            </center>
                        </div>

                        <?php
                $data=mysqli_query($con,"select * from mapmember where userid='1' and title='Mother'");
                $r=mysqli_fetch_assoc($data);


                $gender=$r['gender'];
                  if($gender=='male')
                  {
                    $clr="#006AFF";
                  }
                  if($gender=='female')
                  {
                    $clr="#EA206D";
                  }
                if($r)
                {

              ?>
                        <div class="col-sm-3">
                            <div id="mother" class="card" style="width: 250px;">


                                <center>

                                    <p style="color:<?php echo $clr;?>"><?php echo $r['title'];?></p>
                                    <h4><b><?php echo $r['name'];?></b></h4>
                                    <p><?php echo $r['dob'];?>-<?php echo $r['status'];?></p>

                                    <img class="rounded-circle"
                                        style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid <?php echo $clr;?>;"
                                        src="<?php echo $r['pic'];?>" alt="Avatar">
                                    <br>
                                    <p><?php echo $r['hob'];?></p><br>
                                    <p><?php echo $r['pos'];?></p>
                                    <p><?php echo $r['neg'];?></p>
                                    <br>
                                    <p>Stances: <?php echo $r['cs'];?></p>

                                </center>

                            </div>
                            <?php } ?>
                        </div>

                        <div class="col-sm-1"> </div>
                    </div>
                    <!-- Row 1 End-->


                    <!-- Row 2 -->

                    <div class="col-md-12" style="background: #F8F9FB;">

                        <div class="col-md-4">
                            <?php
                    $data=mysqli_query($con,"select * from mapmember where userid='1' and title='Myself'");
                    $r=mysqli_fetch_assoc($data);

                    if($r)
                    {

                    $gender=$r['gender'];
                      if($gender=='male')
                      {
                        $clr="#006AFF";
                      }
                      if($gender=='female')
                      {
                        $clr="#EA206D";
                      }

                  ?>
                            <div class="line left-rotate"
                                style="margin-top:44px; margin-left:280px; width:150px; border-top: dotted 5px; color:black !important;">
                            </div>

                            <!-- <div class="line left-rotate-2" style="margin-top:200px; margin-left:31px; width:558px; position:absolute; z-index:100; height:5px !important; background-color:black;"></div> -->

                            <!-- <div class="line left-rotate-3" style="margin-top:377px; margin-left:-157px; width:900px; position:absolute; z-index:100; height:2px !important; background-color:black;"></div> -->

                        </div>
                        <div class="col-sm-4">

                            <div class="card" style="width: 250px; margin-left:45px;">
                                <center>

                                    <p style="margin-left: 90px;color:<?php echo $clr;?>">
                                        <?php echo $r['title'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                                            src="star.png"></p>
                                    <h4><b><?php echo $r['name'];?></b></h4>
                                    <p><?php echo $r['dob'];?>-<?php echo $r['status'];?></p>

                                    <img class="rounded-circle"
                                        style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid <?php echo $clr;?>;"
                                        src="<?php echo $r['pic'];?>" alt="Avatar">
                                    <br>
                                    <p><?php echo $r['hob'];?></p><br>
                                    <p><?php echo $r['pos'];?></p>
                                    <p><?php echo $r['neg'];?></p>
                                    <br>
                                    <p>Stances: <?php echo $r['cs'];?></p>


                                </center>
                            </div>
                            <?php } ?>





                        </div>



                        <div class="col-sm-4">
                            <div class="zigzag" style="margin-top:56px !important; width:163px; margin-left:-82px;">
                            </div>

                            <!-- <div class="line right-rotate-2" style="margin-top:154px; margin-left:-250px; width:558px; position:absolute; z-index:100; height:2px !important; background-color:black;"></div> -->

                            <!-- <div class="line right-rotate-3" style="margin-top:325px; margin-left:-403px; width:895px; position:absolute; z-index:100; height:2px !important; background-color:black;">
              </div>              -->

                        </div>

                    </div>

                    <!-- Row 2 End-->


                    <!-- Row 3 Start -->

                    <div class="col-md-12" style="background: #F8F9FB;">

                        <div class="col-sm-4">
                            <?php
                    $data=mysqli_query($con,"select * from mapmember where userid='1' and title='Daughter'");
                    $r=mysqli_fetch_assoc($data);

                    if($r)
                    {

                    $gender=$r['gender'];
                      if($gender=='male')
                      {
                        $clr="#006AFF";
                      }
                      if($gender=='female')
                      {
                        $clr="#EA206D";
                      }

              ?>

                            <div class="line left-rotate-2"
                                style="margin-top:-116px; margin-left:30px; width:562px; position:absolute; z-index:100; height:5px !important; background-color:black;">
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="card" style="width: 250px;top: 0; margin-left:45px;">

                                <center>

                                    <p style="color:<?php echo $clr;?>"><?php echo $r['title'];?></p>
                                    <h4><b><?php echo $r['name'];?></b></h4>
                                    <p><?php echo $r['dob'];?>-<?php echo $r['status'];?></p>

                                    <img class="rounded-circle"
                                        style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid <?php echo $clr;?>;"
                                        src="<?php echo $r['pic'];?>" alt="Avatar">
                                    <br>
                                    <p><?php echo $r['hob'];?></p><br>
                                    <p><?php echo $r['pos'];?></p>
                                    <p><?php echo $r['neg'];?></p>
                                    <br>
                                    <p>Stances: <?php echo $r['cs'];?></p>


                                </center>
                            </div>
                        </div>



                        <div class="col-md-4">
                            <div class="line right-rotate-2"
                                style="margin-top:-112px; margin-left:-252px; width:565px; position:absolute; z-index:100; height:2px !important; background-color:black;">
                            </div>
                        </div>

                        <?php } ?>
                    </div>
                    <!-- Row 3 End -->


                    <!-- Row 4 Start -->
                    <div class="col-md-12" style="background: #F8F9FB;">

                        <div class="col-md-4">
                            <?php
                    $data=mysqli_query($con,"select * from mapmember where userid='1' and title='Son'");
                    $r=mysqli_fetch_assoc($data);

                    if($r)
                    {

                    $gender=$r['gender'];
                      if($gender=='male')
                      {
                        $clr="#006AFF";
                      }
                      if($gender=='female')
                      {
                        $clr="#EA206D";
                      }

              ?>

                            <div class="line left-rotate-3"
                                style="margin-top:-302px; margin-left:-163px; width:915px; position:absolute; z-index:100; height:2px !important; background-color:black;">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card" style="width: 250px;top: 0; margin-left:45px;">

                                <center>

                                    <p style="color:<?php echo $clr;?>"><?php echo $r['title'];?></p>
                                    <h4><b><?php echo $r['name'];?></b></h4>
                                    <p><?php echo $r['dob'];?>-<?php echo $r['status'];?></p>

                                    <img class="rounded-circle"
                                        style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid <?php echo $clr;?>;"
                                        src="<?php echo $r['pic'];?>" alt="Avatar">
                                    <br>
                                    <p><?php echo $r['hob'];?></p><br>
                                    <p><?php echo $r['pos'];?></p>
                                    <p><?php echo $r['neg'];?></p>
                                    <br>
                                    <p>Stances: <?php echo $r['cs'];?></p>


                                </center>
                            </div>
                        </div>



                        <div class="col-md-4">

                            <div class="line right-rotate-3"
                                style="margin-top:-311px; margin-left:-403px; width:895px; position:absolute; z-index:100; height:2px !important; background-color:black;">
                            </div>

                            <hr style="margin-top:180px; border-top:4px dotted #000; margin-left:-73px; width:150px;">
                            <br>
                            <div class="line left-rotate-4"
                                style="margin-top:-401px;  width:719px; border-top: dotted 4px; position:absolute; z-index:100; color:black !important; margin-left:-277px;">
                            </div>
                            <br>
                            <hr style="margin-top:-779px; border-top:4px dotted #000; margin-left:-73px; width:150px;">
                        </div>

                        <?php } ?>
                    </div>
                </div>


                <!-- Row 4 End -->












            </section>
            <!-- Start Resume -->

            <!-- Start Portfolio -->

            <!-- Start Facts -->

            <!-- Testimonial -->

            <!-- Start Blog -->

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
                                        <p style="color: white;">To honor and keep the memories of the lost love
                                            ones<br>
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
                <?php

            if(isset($_POST['submit'])){
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["pic"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file))
{
  $name=$_POST['name'];
  $title=$_POST['title'];
$gender=$_POST['gender'];
$dt=$_POST['dt'];
$status=$_POST['status'];
$des=$_POST['des'];

$insert= mysqli_query($con,"INSERT INTO `member`(`userid`, `name`, `title`, `gender`,`dob`, `status`, `description`, `pic`) VALUES ('1','$_POST[name]','$_POST[title]','$_POST[gender]','$_POST[dt]','$_POST[status]','$_POST[des]','$target_file')");
if($insert)
{
  echo'<script>location.replace("https://beautifulsouls.one/familytree/addmember.php");</script>';
}
}



            }


            ?>

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