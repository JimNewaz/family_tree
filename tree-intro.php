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


        .purple-border textarea {
            border: 5px solid #94618E;
        }

        .purple-border .form-control:focus {
            border: 6px solid #94618E;
            box-shadow: 0 0 0 0.2rem rgba(186, 104, 200, .25);
        }

        .b {
            text-decoration: none;
            padding: 15px 30px;
            background-color: #49274a;
            border-radius: 50px;
            color: white;
            text-decoration: none;
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
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4" style="margin-top: 20px;text-align:right"><input
                                onclick="location.replace('generatetree.php')" type="button" class="button"
                                value="Generate Tree">
                        </div>
                    </div>
                    <div class="row" style="background: #F8F9FB;">
                        <div class="col-sm-3">
                            <ul style="padding:35px ">
                                <li>
                                    <a style="color: #49274A;font-size: 18px;text-decoration:none"
                                        href="#" onclick="intro()">Introduction</a>
                                </li>
                                <br><br>
                                <li>
                                    <a style="color: #49274A;font-size: 18px;text-decoration:none" href="#" onclick="tree()">Family Tree
                                        Profiles</a>
                                </li>
                                <br><br>
                                <li>
                                    <a style="color: #49274A;font-size: 18px;text-decoration:none" href="#" onclick="profile()">Profile
                                        Photo</a>
                                </li>
                            </ul>
                        </div>

                        <script>
                            function intro(){
                                document.getElementById("intro").style.display = "block";
                                document.getElementById("profile").style.display = "none";
                                document.getElementById("tree").style.display = "none";
                            }

                            function tree(){
                                document.getElementById("intro").style.display = "none";
                                document.getElementById("profile").style.display = "block";
                                document.getElementById("tree").style.display = "none";
                            }

                            function profile(){
                                document.getElementById("intro").style.display = "none";
                                document.getElementById("profile").style.display = "none";
                                document.getElementById("tree").style.display = "block";
                            }


                        </script>

                        <?php 

                            if(isset($_POST['add'])){
                                $iro = $_POST['introduction'];                                
                                

                                $insertt= mysqli_query($con,"INSERT INTO treeintro(intro,member_id) VALUES ('$iro','1')");
                                if($insertt)
                                {
                                    echo'<script>location.replace("tree-intro.php");</script>';
                                }
                                
                            }

                        ?>

                        

                        <div class="col-sm-9" style="border-left: 3px solid #F8EEE7;  ">
                            <div style="padding:50px; display:block" id="intro">
                                <div class="form-group purple-border">
                                    <form action="tree-intro.php" method="post" enctype="multipart/form-data">
                                        <textarea class="form-control" id=""
                                        rows="10" name="introduction"> 
                                        </textarea>
                                        <br>                                        
                                        <input type="submit" class="btn" value="Save" name="add" style="padding: 7px 12px; width: 90px;">
                                    </form>                                  
                                </div>
                            </div>

                            <div style="padding:10px; display:none" id="profile">
                                <div style="margin-top:30px;  margin-left: 20px;">
                                    <a href="#" class="b" data-toggle="modal" data-target="#er">Add Member</a>
                                </div>


                                <div class="row" style="margin-top:50px">
                                    <div class="col-sm-12">
                                        <?php
                                            $data=mysqli_query($con,"select * from member where userid='1'");
                                            while($r=mysqli_fetch_assoc($data))
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

                                        <div class="col-sm-4">
                                            <div class="card" style="width: 250px;">


                                                <center>
                                                    <p style="color:<?php echo $clr;?>"><?php echo $r['title'];?></p>
                                                    <h4><b><?php echo $r['name'];?></b></h4>
                                                    <p><?php echo $r['dob'];?>-<?php echo $r['status'];?></p>

                                                    <img class="rounded-circle"
                                                        style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid <?php echo $clr;?>;"
                                                        src="<?php echo $r['pic'];?>" alt="Avatar">
                                                    <p><?php echo $r['description'];?></p>
                                                </center>
                                            </div>
                                        </div>


                                        <?php } ?>
                                    </div>
                                </div>



                                <div class="modal fade" id="er" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document"
                                        style="margin-top:5%; width:70%">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-3" style="text-align:center">
                                                        <form method="post" enctype="multipart/form-data">

                                                            <label for="fileField">
                                                                <img class="rounded-circle mt-5"
                                                                    style="margin-top: 40px;" src="pro.png"
                                                                    width="120px" height="120px">
                                                            </label>
                                                            <input type="file" name="pic" style="display: none;"
                                                                id="fileField" accept="image/*" required="required">
                                                    </div>

                                                    <div style="margin-top: 40px;" class="col-sm-3">
                                                        <label for="name"
                                                            style="font-size:18px;color: #49274A; ">Name</label><br>
                                                        <input style="border-color: #49274A;font-size:25px;" type="text"
                                                            name="name" required="">
                                                    </div>

                                                    <div style="margin-top: 40px;" class="col-sm-3">
                                                        <label for="title"
                                                            style="font-size:18px;color: #49274A; ">Title</label><br>
                                                        <select
                                                            style="border:2px solid #49274A;font-size:16px;padding: 8px;"
                                                            name="title" required="">
                                                            <option value="Father">Father</option>
                                                            <option value="Mother">Mother</option>
                                                            <option value="Husband">Husband</option>
                                                            <option value="Wife">Wife</option>
                                                            <option value="Father in Law">Father in Law</option>
                                                            <option value="Mother in Law">Mother in Law</option>
                                                            <option value="Brother in Law">Brother in Law</option>
                                                            <option value="Sister in Law">Sister in Law</option>
                                                            <option value="Grand Father">Grand Father</option>
                                                            <option value="Son in Law">Son in Law</option>
                                                            <option value="Daughter in Law">Daughter in Law</option>
                                                            <option value="Son">Son</option>
                                                            <option value="Daughter">Daughter</option>
                                                            <option value="Grand Son">Grand Son</option>
                                                            <option value="Grand Daughter">Grand Daughter</option>
                                                            <option value="Grand Mother">Grand Mother</option>
                                                        </select>
                                                    </div>

                                                    <div style="margin-top: 40px;" class="col-sm-3">
                                                        <label for="gender"
                                                            style="font-size:18px;color: #49274A; ">Gender</label><br>
                                                        <input
                                                            style="border-color: #49274A;font-size:25px;padding: 10px;width: 230px;"
                                                            type="radio" id="male" name="gender" value="male">
                                                        <label style="font-size:18px;color: #49274A;"
                                                            for="male">Male</label>
                                                        <input
                                                            style="border-color: #49274A;font-size:25px;padding: 10px;width: 230px;"
                                                            type="radio" id="female" name="gender" value="female">
                                                        <label style="font-size:18px;color: #49274A;"
                                                            for="female">Female</label>
                                                    </div>

                                                    <br>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            &nbsp;&nbsp;&nbsp;<div class="col-sm-3">
                                                                <label for="nh"
                                                                    style="font-size:18px;color: #49274A;display: none; ">Name</label><br>
                                                                <input
                                                                    style="border-color: #49274A;font-size:25px;padding: 10px;width: 200px;"
                                                                    type="hidden" name="nh">
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <label for="dt"
                                                                    style="font-size:18px;color: #49274A; ">Year of
                                                                    Birth</label><br>
                                                                <input
                                                                    style="border-color: #49274A; font-size:16px; padding: 7px;width: 210px;"
                                                                    type="date" name="dt" required="">
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <label for="status"
                                                                    style="font-size:18px;color: #49274A; ">Status</label><br>
                                                                <input
                                                                    style="border-color: #49274A;font-size:25px;padding: 7px;width: 230px;"
                                                                    type="radio" id="living" name="status"
                                                                    value="Present">
                                                                <label style="font-size:18px;color: #49274A;"
                                                                    for="living">Living</label>
                                                                <input
                                                                    style="border-color: #49274A;font-size:25px;padding: 7px;width: 230px;"
                                                                    type="radio" id="deceased" name="status"
                                                                    value="Deceased">
                                                                <label style="font-size:18px;color: #49274A;"
                                                                    for="deceased">Deceased</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-3">
                                                                <label for="n"
                                                                    style="font-size:18px;color: #49274A;display: none; ">Name</label><br>
                                                                <input
                                                                    style="border-color: #49274A;font-size:25px;padding: 10px;width: 200px;"
                                                                    type="hidden" name="n">
                                                            </div>
                                                            <div class="col-sm-8">

                                                                <label for="des"
                                                                    style="font-size:18px;color: #49274A; ">Description
                                                                    of This Person</label><br>
                                                                <input placeholder="eg, hobby, occupation etc."
                                                                    style="border-color: #49274A;font-size:16px;padding: 6px;"
                                                                    type="text" name="des">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-3" style="text-align:center">

                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input type="submit" class="button" value="Add"
                                                                name="submit">
                                                            <br>
                                                        </div>
                                                        <div class="col-sm-3"></div>
                                                        <div class="col-sm-3"></div>
                                                    </div>
                                                    </form>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="padding:10px; display:none;" id="tree">
                                <div class="row" style="margin-top:50px">

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


                                    <div class="col-sm-4">                                       

                                        <div class="card" style="width: 250px;">
                                            <center>
                                                <p style="color:<?php echo $clr;?>"><?php echo $r['title'];?></p>
                                                <h4><b><?php echo $r['name'];?></b></h4>
                                                <p><?php echo $r['dob'];?>-<?php echo $r['status'];?></p>

                                                <img class="rounded-circle"                                                       style="height: 103px;width: 103px;border-radius: 50%;border: 4px solid <?php echo $clr;?>;"
                                                src="<?php echo $r['pic'];?>" alt="Avatar">
                                                <p><?php echo $r['description'];?></p>
                                            </center>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group purple-border" style="margin:0.5rem 0 1rem 0">
                                            <form action="tree-intro.php" method="post">                                            
                                                <textarea class="form-control" id="exampleFormControlTextarea4"
                                                rows="10" name="ind_intro"> <?php echo $r['introduction'] ?> </textarea>
                                                <br>                                            
                                        </div>                                        
                                    </div>      
                                    
                                    <?php } ?>
                                    
                                    
                                </div>
                                <div class="row">
                                    <input type="submit" class="btn" value="Save" name="sub" style="padding: 7px 12px; width: 90px;">
                                </div>
                                </form>
                            </div>

                        </div>
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
                echo'<script>location.replace("tree-intro.php");</script>';
                }
                }
            }


        ?>


        <?php 

            if(isset($_POST['sub']))
            {	
                $texta=$_POST['ind_intro'];       
                
                
                $sql=mysqli_query($con,"update member set introduction='$texta' where memid='$id' ");

                if($sql){
                    echo'
                    <script> alert("Udated") </script> ';
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