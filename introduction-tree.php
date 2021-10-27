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
            z-index: 9999;
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
                            <h1>Family Tree</h1>
                        </div>
                        <div class="col-sm-4">
                            <form method="post">
                                <p style="font-size:18px;color: #49274A;margin-left: 10px;">Filter</p>
                                <select id="filter" onchange="myFunction()"
                                    style="border-color: #49274A;font-size:25px;padding: 10px;width: 230px;"
                                    name="filter">
                                    <option value="all">All</option>
                                    <option value="2 eldest generation">2 eldest generation</option>
                                    <option value="2 youngest generation">2 youngest generation</option>
                                </select>
                                <input type="submit" name="submit" id="submit" style="display: none;">
                            </form>

                            <script type="text/javascript">
                                function myFunction() {
                                    var x = document.getElementById("filter").value;
                                    if (x == "2 eldest generation") {
                                        location.replace("https://beautifulsouls.one/familytree/eldest.php");
                                    }
                                    if (x == "2 youngest generation") {
                                        location.replace("https://beautifulsouls.one/familytree/young.php");
                                    }
                                }
                            </script>
                        </div>
                        <div class="col-sm-2" style="margin-top: 20px;"><input type="button" class="button"
                                value="Edit">
                        </div>
                        <div class="col-sm-2" style="margin-top: 20px;"><input onclick="window.print()" type="button"
                                class="button" value="Save as PDF">
                        </div>
                    </div>

                    <!-- Introduction Part -->

                    <?php 
                        $dquery=mysqli_query($con,"select * from treeintro where member_id = '1'");

                        while($row=mysqli_fetch_assoc($dquery))
                            {
                                $introduc=$row['intro'];
                            }

                    ?>

                    <div class="container" style="background-color:white; height: 500px">
                        <div class="row">
                            <div class="col-md-12">
                                <div style="padding:50px 100px 50px 100px">

                                    <h3>Introduction</h3>
                                    <br>
                                    <p>
                                        <?php echo $introduc; ?>


                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <!-- IntroDuction Ends here -->
                    <div class="container" id="section-to-print" style="background: #F8F9FB;">

                        <div class="row">
                            <!-- 1st row -->



                            <div class="col-sm-12">
                                <div class="col-sm-2">
                                    <?php 
                                        $data=mysqli_query($con,"select * from member where userid='1' and title='Father in Law'");
                                        $view=mysqli_fetch_assoc($data);
                                        if($view)
                                        {


                                        ?>
                                    <div class="card" style="width: 180px;">


                                        <center>

                                            <p style="color:#006AFF;"><?php echo $view['title'];?></p>
                                            <h4><b><?php echo $view['name'];?></b></h4>
                                            <p><?php echo $view['dob'];?>-<?php echo $view['status'];?></p>

                                            <img class="rounded-circle"
                                                style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid #006AFF;"
                                                src="<?php echo $view['pic'];?>" alt="Avatar">
                                            <p><?php echo $view['description'];?></p>
                                        </center>
                                    </div>
                                    <?php } ?>

                                </div>
                                <div class="col-sm-2">
                                    <?php 
                                    $data=mysqli_query($con,"select * from member where userid='1' and title='Mother in Law'");
                                    $view=mysqli_fetch_assoc($data);
                                    if($view)
                                    {


                                    ?>
                                    <div class="card" style="width: 180px;">


                                        <center>

                                            <p style="color: #EA206D;"><?php echo $view['title'];?></p>
                                            <h4><b><?php echo $view['name'];?></b></h4>
                                            <p><?php echo $view['dob'];?>-<?php echo $view['status'];?></p>

                                            <img class="rounded-circle"
                                                style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid #EA206D;"
                                                src="<?php echo $view['pic'];?>" alt="Avatar">
                                            <p><?php echo $view['description'];?></p>
                                        </center>
                                    </div>
                                    <?php } ?>

                                </div>
                                <div class="col-sm-2">


                                </div>
                                <div class="col-sm-2">


                                </div>
                                <div class="col-sm-2">
                                    <?php 
                        $data=mysqli_query($con,"select * from member where userid='1' and title='Father'");
                        $view=mysqli_fetch_assoc($data);
                        if($view)
                        {


                              ?>
                                    <div class="card" style="width: 180px;">


                                        <center>

                                            <p style="color:#006AFF;"><?php echo $view['title'];?></p>
                                            <h4><b><?php echo $view['name'];?></b></h4>
                                            <p><?php echo $view['dob'];?>-<?php echo $view['status'];?></p>

                                            <img class="rounded-circle"
                                                style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid #006AFF;"
                                                src="<?php echo $view['pic'];?>" alt="Avatar">
                                            <p><?php echo $view['description'];?></p>
                                        </center>
                                    </div>
                                    <?php } ?>

                                </div>
                                <div class="col-sm-2">
                                    <?php 
                      $data=mysqli_query($con,"select * from member where userid='1' and title='Mother'");
                      $view=mysqli_fetch_assoc($data);
                      if($view)
                      {


                        ?>
                                    <div class="card" style="width: 180px;">


                                        <center>

                                            <p style="color: #EA206D;"><?php echo $view['title'];?></p>
                                            <h4><b><?php echo $view['name'];?></b></h4>
                                            <p><?php echo $view['dob'];?>-<?php echo $view['status'];?></p>

                                            <img class="rounded-circle"
                                                style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid #EA206D;"
                                                src="<?php echo $view['pic'];?>" alt="Avatar">
                                            <p><?php echo $view['description'];?></p>
                                        </center>
                                    </div>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- 2nd row -->



                            <div class="col-sm-12">
                                <div class="col-sm-2">


                                </div>
                                <div class="col-sm-2" style="margin-top:-35px;">
                                    <svg height="200" width="300">
                                        <line x1="0" y1="0" x2="0" y2="155"
                                            style="stroke:rgb(223, 230, 235);stroke-width:3" />
                                        <line x1="185" y1="155" x2="0" y2="155"
                                            style="stroke:rgb(223, 230, 235);stroke-width:3" />

                                    </svg>

                                </div>
                                <div class="col-sm-2">

                                    <?php 
                              $data=mysqli_query($con,"select * from member where userid='1' and (title='Husband' or title='Wife')");
                              $view=mysqli_fetch_assoc($data);
                              if($view)
                              {
                                $gender=$view['gender'];
                                if($gender=='male')
                                {
                                  $clr="#006AFF";
                                }
                                if($gender=='female')
                                {
                                  $clr="#EA206D";
                                }


                                    ?>
                                    <div class="card" style="width: 180px;">


                                        <center>

                                            <p style="color:<?php echo $clr;?>"><?php echo $view['title'];?></p>

                                            <h4><b><?php echo $view['name'];?></b></h4>
                                            <p><?php echo $view['dob'];?>-<?php echo $view['status'];?></p>

                                            <img class="rounded-circle"
                                                style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid <?php echo $clr;?>;"
                                                src="<?php echo $view['pic'];?>" alt="Avatar">
                                            <p><?php echo $view['description'];?></p>
                                        </center>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="col-sm-2">

                                    <?php 
                        $data=mysqli_query($con,"select * from member where userid='1' and title='Myself'");
                        $view=mysqli_fetch_assoc($data);
                        if($view)
                        {
                        $gender=$view['gender'];
                        if($gender=='male')
                        {
                            $clr="#006AFF";
                        }
                        if($gender=='female')
                        {
                            $clr="#EA206D";
                        }

                          ?>
                                    <div class="card" style="width: 180px;">


                                        <center>

                                            <p style="margin-left: 70px;color: <?php echo $clr;?>">
                                                <?php echo $view['title'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                                                    src="star.png"></p>
                                            <h4><b><?php echo $view['name'];?></b></h4>
                                            <p><?php echo $view['dob'];?>-<?php echo $view['status'];?></p>

                                            <img class="rounded-circle"
                                                style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid <?php echo $clr;?>;"
                                                src="<?php echo $view['pic'];?>" alt="Avatar">
                                            <p><?php echo $view['description'];?></p>
                                        </center>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="col-sm-2">
                                    <svg height="200" width="300" style="margin-top:-35px">
                                        <line x1="185" y1="0" x2="185" y2="155"
                                            style="stroke:rgb(223, 230, 235);stroke-width:3" />
                                        <line x1="185" y1="155" x2="0" y2="155"
                                            style="stroke:rgb(223, 230, 235);stroke-width:3" />

                                    </svg>

                                </div>
                                <div class="col-sm-2">


                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- 3rd row -->



                            <div class="col-sm-12">
                                <div class="col-sm-2">
                                    <?php 
                                $data=mysqli_query($con,"select * from member where userid='1' and title='Son in Law'");
                                $view=mysqli_fetch_assoc($data);
                                if($view)
                                {


                            ?>
                                    <div class="card" style="width: 180px;">


                                        <center>

                                            <p style="color:#006AFF;"><?php echo $view['title'];?></p>
                                            <h4><b><?php echo $view['name'];?></b></h4>
                                            <p><?php echo $view['dob'];?>-<?php echo $view['status'];?></p>

                                            <img class="rounded-circle"
                                                style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid #006AFF;"
                                                src="<?php echo $view['pic'];?>" alt="Avatar">
                                            <p><?php echo $view['description'];?></p>
                                        </center>
                                    </div>
                                    <?php } ?>

                                </div>
                                <div class="col-sm-2">

                                    <?php 
                                    $data=mysqli_query($con,"select * from member where userid='1' and title='Daughter'");
                                    $view=mysqli_fetch_assoc($data);
                                    if($view)
                                    {


                                    ?>
                                    <div class="card" style="width: 180px;">


                                        <center>

                                            <p style="color: #EA206D;"><?php echo $view['title'];?></p>
                                            <h4><b><?php echo $view['name'];?></b></h4>
                                            <p><?php echo $view['dob'];?>-<?php echo $view['status'];?></p>

                                            <img class="rounded-circle"
                                                style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid #EA206D;"
                                                src="<?php echo $view['pic'];?>" alt="Avatar">
                                            <p><?php echo $view['description'];?></p>
                                        </center>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="col-sm-2" style="margin-top:-35px;">

                                    <svg height="200" width="300">
                                        <line x1="185" y1="0" x2="185" y2="155"
                                            style="stroke:rgb(223, 230, 235);stroke-width:3" />
                                        <line x1="185" y1="155" x2="0" y2="155"
                                            style="stroke:rgb(223, 230, 235);stroke-width:3" />

                                    </svg>
                                </div>
                                <div class="col-sm-2" style="margin-top:-35px;">
                                    <svg height="200" width="300">
                                        <line x1="0" y1="0" x2="0" y2="155"
                                            style="stroke:rgb(223, 230, 235);stroke-width:3" />
                                        <line x1="0" y1="155" x2="185" y2="155"
                                            style="stroke:rgb(223, 230, 235);stroke-width:3" />

                                    </svg>

                                </div>

                                <div class="col-sm-2">
                                    <?php 
                                        $data=mysqli_query($con,"select * from member where userid='1' and title='Son'");
                                        $view=mysqli_fetch_assoc($data);
                                        if($view)
                                        {


                                    ?>
                                    <div class="card" style="width: 180px;">


                                        <center>

                                            <p style="color:#006AFF;"><?php echo $view['title'];?></p>
                                            <h4><b><?php echo $view['name'];?></b></h4>
                                            <p><?php echo $view['dob'];?>-<?php echo $view['status'];?></p>

                                            <img class="rounded-circle"
                                                style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid #006AFF;"
                                                src="<?php echo $view['pic'];?>" alt="Avatar">
                                            <p><?php echo $view['description'];?></p>
                                        </center>
                                    </div>
                                    <?php } ?>

                                </div>
                                <div class="col-sm-2">

                                    <?php 
                                    $data=mysqli_query($con,"select * from member where userid='1' and title='Daughter in Law'");
                                    $view=mysqli_fetch_assoc($data);
                                    if($view)
                                    {


                                        ?>
                                    <div class="card" style="width: 180px;">


                                        <center>

                                            <p style="color: #EA206D;"><?php echo $view['title'];?></p>
                                            <h4><b><?php echo $view['name'];?></b></h4>
                                            <p><?php echo $view['dob'];?>-<?php echo $view['status'];?></p>

                                            <img class="rounded-circle"
                                                style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid #EA206D;"
                                                src="<?php echo $view['pic'];?>" alt="Avatar">
                                            <p><?php echo $view['description'];?></p>
                                        </center>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- 4th row -->

                            <svg height="200" width="300" style="margin-left:44px; margin-top:-30px;">
                                <line x1="170" y1="0" x2="170" y2="185"
                                    style="stroke:rgb(223, 230, 235);stroke-width:3" />
                                <line x1="150" y1="185" x2="30" y2="185"
                                    style="stroke:rgb(223, 230, 235);stroke-width:3" />
                                <line x1="150" y1="185" x2="300" y2="185"
                                    style="stroke:rgb(223, 230, 235);stroke-width:3" />
                                <line x1="30" y1="210" x2="30" y2="185"
                                    style="stroke:rgb(223, 230, 235);stroke-width:3" />
                                <line x1="300" y1="210" x2="300" y2="185"
                                    style="stroke:rgb(223, 230, 235);stroke-width:3" />

                            </svg>

                            <div class="col-sm-12" style="margin-top:-10px;">
                                <div class="col-sm-2">
                                    <?php 
                                $data=mysqli_query($con,"select * from member where userid='1' and title='Grand Son'");
                                $view=mysqli_fetch_assoc($data);
                                if($view)
                                {


                                ?>
                                    <div class="card" style="width: 180px;">


                                        <center>

                                            <p style="color:#006AFF;"><?php echo $view['title'];?></p>
                                            <h4><b><?php echo $view['name'];?></b></h4>
                                            <p><?php echo $view['dob'];?>-<?php echo $view['status'];?></p>

                                            <img class="rounded-circle"
                                                style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid #006AFF;"
                                                src="<?php echo $view['pic'];?>" alt="Avatar">
                                            <p><?php echo $view['description'];?></p>
                                        </center>
                                    </div>
                                    <?php } ?>

                                </div>
                                <div class="col-sm-2">

                                    <?php 
                                $data=mysqli_query($con,"select * from member where userid='1' and title='Grand Daughter'");
                                $view=mysqli_fetch_assoc($data);
                                if($view)
                                {


                                ?>
                                    <div class="card" style="width: 180px;">


                                        <center>

                                            <p style="color: #EA206D;"><?php echo $view['title'];?></p>
                                            <h4><b><?php echo $view['name'];?></b></h4>
                                            <p><?php echo $view['dob'];?>-<?php echo $view['status'];?></p>

                                            <img class="rounded-circle"
                                                style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid #EA206D;"
                                                src="<?php echo $view['pic'];?>" alt="Avatar">
                                            <p><?php echo $view['description'];?></p>
                                        </center>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="col-sm-2">


                                </div>
                                <div class="col-sm-2">


                                </div>
                                <div class="col-sm-2">
                                    <?php 
                                    $data=mysqli_query($con,"select * from member where userid='1' and title='Grand Son'");
                                    $view=mysqli_fetch_assoc($data);
                                    if($view)
                                    {


                                ?>
                                    <div class="card" style="width: 180px;">


                                        <center>

                                            <p style="color:#006AFF;"><?php echo $view['title'];?></p>
                                            <h4><b><?php echo $view['name'];?></b></h4>
                                            <p><?php echo $view['dob'];?>-<?php echo $view['status'];?></p>

                                            <img class="rounded-circle"
                                                style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid #006AFF;"
                                                src="<?php echo $view['pic'];?>" alt="Avatar">
                                            <p><?php echo $view['description'];?></p>
                                        </center>
                                    </div>
                                    <?php } ?>

                                </div>
                                <div class="col-sm-2">

                                    <?php 
                                        $data=mysqli_query($con,"select * from member where userid='1' and title='Grand Daughter'");
                                        $view=mysqli_fetch_assoc($data);
                                        if($view)
                                        {


                                    ?>
                                    <div class="card" style="width: 180px;">


                                        <center>

                                            <p style="color: #EA206D;"><?php echo $view['title'];?></p>
                                            <h4><b><?php echo $view['name'];?></b></h4>
                                            <p><?php echo $view['dob'];?>-<?php echo $view['status'];?></p>

                                            <img class="rounded-circle"
                                                style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid #EA206D;"
                                                src="<?php echo $view['pic'];?>" alt="Avatar">
                                            <p><?php echo $view['description'];?></p>
                                        </center>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="container" style="background-color:white; height: auto; ">
                        <div class="row">
                            <div style="margin-top:100px; ">                                   

                                <div class="col-md-1"></div>  
                                
                                <?php
                                            $data=mysqli_query($con,"select * from member where userid='1' and introduction is not null");
                                            while($r=mysqli_fetch_assoc($data))
                                            {

                                            $id=$r['memid'];
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

                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-4" style="text-align:center">
                                            <img class="rounded-circle" style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid <?php echo $clr;?>;" src="<?php echo $r['pic'];?>" alt="Avatar">
                                        </div>
                                        <div class="col-md-8" style="text-align:left">
                                            <p style="font-size:20px; font-weight:bold"><?php echo $r['name'];?></p>                          
                                            <p><?php echo $r['introduction'] ;?></p>
                                              
                                        </div>
                                    </div>
                                </div>                                                         

                                <div class="col-md-1"> </div>
                                <?php } ?> 
                            </div>    
                        </div>


                        <!-- <div class="row">
                            <div style="margin-top:100px;">
                                <div class="col-md-1">                                
                                </div>

                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-4" style="text-align:center">
                                            <img class="rounded-circle" style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid #EA206D;" src="<?php echo $view['pic'];?>" alt="Avatar">
                                        </div>
                                        <div class="col-md-8" style="text-align:left">
                                            <p style="font-size:20px; font-weight:bold">Sakib Al Hasan</p>                          
                                            <p>Lorem Ipsum is a demo tex.Lorem Ipsum is a demo texLorem Ipsum is a demo texLorem Ipsum is a demo texLorem Ipsum is a demo texLorem Ipsum is a demo text</p>
                                              
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-4" style="text-align:center">
                                            <img class="rounded-circle" style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid #EA206D;" src="<?php echo $view['pic'];?>" alt="Avatar">
                                        </div>
                                        <div class="col-md-8" style="text-align:left">
                                            <p style="font-size:20px; font-weight:bold">Sakib Al Hasan</p>                          
                                            <p>Lorem Ipsum is a demo tex.Lorem Ipsum is a demo texLorem Ipsum is a demo texLorem Ipsum is a demo texLorem Ipsum is a demo texLorem Ipsum is a demo text</p>
                                              
                                        </div>
                                    </div>
                                </div>






                                <div class="col-md-1">                                
                                </div>
                            </div>    
                        </div> -->
                    </div>




                </div>

                

                



        </main>


    </div>












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