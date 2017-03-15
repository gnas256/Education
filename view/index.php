<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>REDU - Reachable Education</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
        <!-- Main style sheet -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- responsive style sheet -->
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link rel="stylesheet" type="text/css" href="my_style.css">
        <!-- Fix Internet Explorer ______________________________________-->
        <!--[if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <script src="vendor/html5shiv.js"></script>
                <script src="vendor/respond.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="../controller/UserController.php">
                        <!--                        <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Signup</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>-->
                        <div class="modal-body">
                            <table class="table table-hover table-responsive">
                                <tr>
                                    <td colspan="2">
                                <center>
                                    <h3>Signup Form</h3>
                                </center>
                                </td>
                                </tr>
                                <tr>
                                    <td class="active">Who are you</td>
                                    <td>
                                        <input type="radio" name="type" id="teacher" style="margin-right: 1%"  checked/><label for="teacher" style="margin-right: 3%">Teacher</label>
                                        <input type="radio" name="type" id="parent" style="margin-right: 1%"/><label for="parent" style="margin-right: 3%">Parent</label>
                                        <input type="radio" name="type" id="student" style="margin-right: 1%"/><label for="student">Student</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="active">Your username</td>
                                    <td>
                                        <input type="text" name="username" id="username" class="form-control" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="active">Your password</td>
                                    <td>
                                        <input type="password" name="password" id="password" class="form-control" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="active">Confirm password</td>
                                    <td>
                                        <input type="password" name="confirm" id="confirm" class="form-control" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="active">Your name</td>
                                    <td>
                                        <input type="text" name="name" id="name"  class="form-control" required />
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-default" name="signup" id="signup">Sign up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="../controller/UserController.php">
                        <!--                        <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Signin</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>-->
                        <div class="modal-body">
                            <table class="table table-hover table-responsive">
                                <tr>
                                    <td colspan="2"><center><h3>Sign in Form</h3></center>
                                </td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>
                                        <input  type="text" class="form-control" id="username_sign_in" name="username_sign_in" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>
                                        <input  type="password" class="form-control" id="password_sign_in" name="password_sign_in" required/>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-default" id="signin" name="signin" value=" Sign In"> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="main-page-wrapper">
            <header class="main-header" >
                <div class="top-header">
                    <div class="container" >
                        <div class="left-side float-left">
                            <ul>
                                <li><span class="icon round-border"><i class="ficon flaticon-signs"></i></span> <a href="" class="tran3s">144 Xuan Thuy, Cau Giay, Ha Noi</a></li>
                                <li><span class="icon round-border"><i class="ficon flaticon-multimedia"></i></span> <a href="" class="tran3s">redu.asia@gmail.com</a></li>
                                <li><span class="icon round-border"><i class="ficon flaticon-technology"></i></span> <a href="" class="tran3s">+84961961063</a></li>
                                <li><span class="icon round-border"><i class="ficon flaticon-translation"></i></span>
                                    <select class="selectpicker">
                                        <option>English</option>
                                        <option>Vietnamese</option>
                                    </select>
                                </li>
                            </ul>
                        </div> <!-- /.left-side -->
                        <div class="right-side float-right">
                            <ul>
                                <li><a href="https://www.facebook.com/reduvn/" class="tran3s round-border icon"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://plus.google.com/u/6/109222418141837975446" class="tran3s round-border icon"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div> <!-- /.right-side -->
                    </div>
                </div> <!-- /.top-header -->
                <div class="container" >
                    <div class="main-menu-wrapper clear-fix">
                        <div class="container"  >
                            <div class="logo float-left" style="margin-right: 1%">
                                <a href="index.php" style="vertical-align:middle;"><img src="images/logo/logo.png" alt="LOGO"></a></div>
                            <!--                            <form action="#" class="float-right">
                                                            <input type="text" placeholder="Search">
                                                            <button><i class="fa fa-search-minus" aria-hidden="true"></i></button>
                                                        </form>-->
                            <div class="float-right" style="margin-top: 3%; color: #ffffff; margin-right: 1%;">
                                <?php
                                include_once '../service/UserSessionService.php';
                                $service = new UserSessionService();
                                if (!$service->is_logged_in()) {
                                    ?>
                                    <button class="btn btn-default" style="background-color: #84b645" data-toggle="modal" data-target="#exampleModal">Sign up</button>
                                    <button class="btn btn-default" style="background-color: #84b645" data-toggle="modal" data-target="#signinModal">Sign in</button>
                                    <?php
                                } else {
                                    ?>  
                                    <button class="btn btn-default" style="background-color: #84b645" data-toggle="modal" data-target="#"><?php
                                        include_once '../service/UserSessionService.php';
                                        $service = new UserSessionService();
                                        echo "Welcome " . $service->getCurrentUser()->getName();
                                        ?></button>
                                    <form method="post" action="../controller/UserController.php">
                                        <button type="submit" class="btn btn-default" style="background-color: #84b645" value="Sign out" name="out">
                                            Sign out</button>
                                    </form>
                                    <?php
                                }
                                ?>
                            </div>

                            <!-- Menu -->
                            <nav class="navbar float-left">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                    <ul class="nav navbar-nav navbar-left">
                                        <li class="dropdown-holder"><a href="index.php">Home</a>
                                        </li>
                                        <li class="dropdown-holder"><a href="find-futors.html">Find tutors</a>
                                        <li  class="dropdown-holder"><a href="about-us.html">Become tutors</a>
                                        </li>
                                        <li><a href="seflstudy-guide.html">Self-study Guides</a>
                                        </li>
                                        <li class="dropdown-holder"><a href="about-us.html">About us</a>
                                            <!-- <ul class="sub-menu">
                                                    <li><a href="become-tutors.html" class="tran3s">Become tutors </a></li>
                                            </ul> -->
                                        </li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </nav>
                        </div>
                    </div> <!-- /.main-menu-wrapper -->
                </div>
            </header>
            <!-- Theme Banner ________________________________ -->
            <div id="banner">
                <div class="rev_slider_wrapper">
                    <!--                    <div id="main-banner-slider" class="rev_slider" data-version="5.0.7">
                                            <div id="map" class="tp-caption"></div>
                                        </div>
                    -->                    <script>
                        function initMap() {
                            //                document.getElementById("map")
                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 12,
                                center: {lat: 21.028511, lng: 105.804817}
                            });
                            var marker = new google.maps.Marker({
                                position: {lat: 20.993776, lng: 105.811417},
                                map: map
                            });
                            new google.maps.Marker({
                                position: {lat: 20.983775, lng: 105.811415},
                                map: map
                            });
                            new google.maps.Marker({
                                position: {lat: 20.993775, lng: 105.821415},
                                map: map
                            });
                            new google.maps.Marker({
                                position: {lat: 20.9893775, lng: 105.821415},
                                map: map
                            });
                        }
                    </script>
                    <!--START REVOLUTION SLIDER 5.0.7 auto mode -->
                    <div id="main-banner-slider" class="rev_slider" data-version="5.0.7">
                        <ul>
                            <!--                            <li id="map" data-index="rs-280" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-rotate="0"  data-saveperformance="off"  data-title="Title Goes Here" data-description="">
                                                        </li>-->
                            SLIDE1  
                            <li data-index="rs-280" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-rotate="0"  data-saveperformance="off"  data-title="Title Goes Here" data-description="">
                                MAIN IMAGE 
                                <img src="images/home/slide-1.jpg"  alt="image"  class="rev-slidebg" data-bgparallax="3" data-bgposition="center center" data-duration="20000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="140">
                                LAYERS 

                                <!-- LAYER NR. 1 
                                <div class="tp-caption" 
                                     data-x="['left','left','left','left']" data-hoffset="['0','25','35','15']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-56','-56','-45','-150']" 
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"

                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                     data-mask_in="x:0px;y:[100%];" 
                                     data-mask_out="x:inherit;y:inherit;" 
                                     data-start="1000" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-responsive_offset="on" 
                                     style="z-index: 6; white-space: nowrap;">
                                    <h5>for hundreds of successful student here </h5>
                                </div>

                                LAYER NR. 2 
                                <div class="tp-caption" 
                                     data-x="['left','left','left','left']" data-hoffset="['0','25','35','15']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['20','25','30','-85']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"

                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                     data-mask_in="x:0px;y:[100%];" 
                                     data-mask_out="x:inherit;y:inherit;" 
                                     data-start="2000" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-responsive_offset="on" 
                                     style="z-index: 6; white-space: nowrap;">
                                    <h1>Education is a <span class="p-color">backbone</span> <br>of life</h1>
                                </div>


                                LAYER NR. 3 
                                <div class="tp-caption"
                                     data-x="['left','left','left','left']" data-hoffset="['0','25','35','15']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['205','205','210','80']"
                                     data-transform_idle="o:1;"
                                     data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                     data-transform_in="x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;" 
                                     data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;" 
                                     data-start="3000" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-responsive_offset="on">
                                    <a href="find-futors.html" class="course-button">View courses</a>
                                </div>

                                LAYER NR. 4 
                                <div class="tp-caption"
                                     data-x="['left','left','left','left']" data-hoffset="['192','217','227','15']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['205','205','210','155']"
                                     data-transform_idle="o:1;"
                                     data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                     data-transform_in="x:[100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;" 
                                     data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;" 
                                     data-start="3000" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-responsive_offset="on">
                                    <a href="contact-us.html" class="buy-button p-color-bg">BUY NOW</a>
                                </div> -->

                            </li>


                            SLIDE2  
                            <li data-index="rs-18" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/home/slide-2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Title Goes Here" data-description="">
                                MAIN IMAGE 
                                <img src="images/home/slide-2.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                LAYERS 

                                LAYER NR. 1 
                                <div class="tp-caption" 
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-56','-56','-36','-150']" 
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"

                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                     data-mask_in="x:0px;y:[100%];" 
                                     data-mask_out="x:inherit;y:inherit;" 
                                     data-start="1000" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-responsive_offset="on" 
                                     style="z-index: 6; white-space: nowrap;">
                                    <h5>for hundreds of successful student here </h5>
                                </div>

                                LAYER NR. 2 
                                <div class="tp-caption" 
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['20','20','45','-85']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"

                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                     data-mask_in="x:0px;y:[100%];" 
                                     data-mask_out="x:inherit;y:inherit;" 
                                     data-start="2000" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-responsive_offset="on" 
                                     style="z-index: 6; white-space: nowrap;">
                                    <h1 class="center-item"> cut down their <span class="p-color"> unproductive time by</span> <br>  
improving their learning skills.</h1>
                                </div>


                                LAYER NR. 3 
                                <div class="tp-caption"
                                     data-x="['center','center','center','center']" data-hoffset="['-87','-87','-87','0']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['205','205','210','80']"
                                     data-transform_idle="o:1;"
                                     data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                     data-transform_in="x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;" 
                                     data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;" 
                                     data-start="3000" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-responsive_offset="on">
                                    <a href="find-futors.html" class="course-button">Find tutors</a>
                                </div>

                                LAYER NR. 4 
                                <div class="tp-caption"
                                     data-x="['center','center','center','center']" data-hoffset="['105','105','105','0']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['205','205','210','155']"
                                     data-transform_idle="o:1;"
                                     data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                     data-transform_in="x:[100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;" 
                                     data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;" 
                                     data-start="3000" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-responsive_offset="on">
                                    <a href="become-tutors.html" class="buy-button p-color-bg">become teacher</a>
                                </div>
                            </li>


                            SLIDE3  
                            <li data-index="rs-20" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/home/slide-5.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Title Goes Here" data-description="">
                                MAIN IMAGE 
                                <img src="images/home/slide-5.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500" data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                LAYERS 

                                LAYER NR. 1 
                                <div class="tp-caption" 
                                     data-x="['left','left','left','left']" data-hoffset="['0','25','35','15']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-56','-56','-45','-150']" 
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"

                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                     data-mask_in="x:0px;y:[100%];" 
                                     data-mask_out="x:inherit;y:inherit;" 
                                     data-start="1000" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-responsive_offset="on" 
                                     style="z-index: 6; white-space: nowrap;">
                                    <h5>for hundreds of successful student here </h5>
                                </div>

                                LAYER NR. 2 
                                <div class="tp-caption" 
                                     data-x="['left','left','left','left']" data-hoffset="['0','25','35','15']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['20','25','30','-85']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"

                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                     data-mask_in="x:0px;y:[100%];" 
                                     data-mask_out="x:inherit;y:inherit;" 
                                     data-start="2000" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-responsive_offset="on" 
                                     style="z-index: 6; white-space: nowrap;">
                                    <h1>Education is a <span class="p-color">backbone</span> <br>of life</h1>
                                </div>


                                LAYER NR. 3 
                                <div class="tp-caption"
                                     data-x="['left','left','left','left']" data-hoffset="['0','25','35','15']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['205','205','210','80']"
                                     data-transform_idle="o:1;"
                                     data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                     data-transform_in="x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;" 
                                     data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;" 
                                     data-start="3000" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-responsive_offset="on">
                                    <a href="find-futors.html" class="course-button">View courses</a>
                                </div>

                                LAYER NR. 4 
                                <div class="tp-caption"
                                     data-x="['left','left','left','left']" data-hoffset="['192','217','227','15']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['205','205','210','155']"
                                     data-transform_idle="o:1;"
                                     data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                     data-transform_in="x:[100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;" 
                                     data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;" 
                                     data-start="3000" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-responsive_offset="on">
                                    <a href="contact-us.html" class="buy-button p-color-bg">BUY NOW</a>
                                </div>
                            </li>
                        </ul>	
                    </div>
                </div><!-- END REVOLUTION SLIDER -->
            </div> <!--  /#banner -->


            <!-- Manage Section _________________________ -->
            <div class="theme-manage-area" >
                <div class="container">
                    <div class="item-part float-left item1 p-color-bg" >
                        <h3><i class="fa fa-graduation-cap" aria-hidden="true"></i> Qualified tutors</h3>
                        <p>Best students from every university, recruited, tested and trained via experienced mentors board. Validated information and contacts. </p>
                        <a href="about-us.html" class="tran3s">READ MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="item-part float-left item2">
                        <img src="images/home/1.jpg" alt="Image">
                    </div>
                    <div class="item-part float-left item1 p-color-bg" >
                        <h3><i class="fa fa-book" aria-hidden="true"></i> STUDY GUIDE LIBRARY</h3>
                        <p>Collection of the best and latest learning techniques and learning strategies. Develop our own books for every levels and intelligent type.</p>
                        <a href="seflstudy-guide.html" class="tran3s">READ MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div> <!-- /.container -->
            </div> <!-- /.theme-manage-area -->


            <!-- Course Finder  ______________________________ -->
            <div class="course-search-option wow fadeInUp">
                <div class="container">
                    <form action="#">
                        <div class="row">
                            <div class="single-input float-left input-one">
                                <div>
                                    <input type="text" placeholder="Tên môn học">
                                </div> 
                            </div> <!-- /.single-input -->

                            <div class="single-input float-left input-two">
                                <div>
                                    <select class="selectpicker">
                                        <option>Cầu Giấy</option>
                                        <option>Đống Đa</option>
                                        <option>Ba Đình</option>
                                        <option>Tây Hồ</option>
                                        <option>Thanh Xuân</option>
                                    </select>
                                </div>
                            </div> <!-- /.single-input -->

                            <div class="single-input float-left input-two time-select">
                                <div>
                                    <input type="text" placeholder="Thời gian" class="timepicker">
                                    <span><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                </div>
                            </div> <!-- /.single-input -->

                            <div class="single-input float-left input-three" >
                                <div>
                                    <button class="tran3s p-color-bg themehover">search</button>
                                </div>
                            </div> <!-- /.single-input -->
                        </div>
                    </form>
                </div>
            </div> <!-- /.course-search-option -->



            <!-- Welcome Section ___________________________ -->
            <div class="welcome-section">
                <div class="container">
                    <div class="section-title wow fadeInUp">
                        <h2 class="p-color">Welcome to REDU</h2>
                        <h5>Reachable Education</h5>
                        <p>REDU is a company that provides high qualified tutor network in both online and offline form, whom teach students not only academic skills
but also SELF-STUDY GUIDES AND STRATEGIES.</p>
                    </div> <!-- /.section-title -->

                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInUp">
                            <h3><i class="fa fa-graduation-cap" aria-hidden="true" ></i> High qualified tutors</h3>
                            <p>Recruit best students from every university. To be one of REDU’s tutor network, they have to pass our online test which are built to check their academic abilities. They will be trained at least in 3-7 days for teaching.
 </p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInUp">
                            <h3><i class="fa fa-tags" aria-hidden="true" ></i> Learning techniques library</h3>
                            <p>Collection of the best and latest learning techniques and learning strategies. Develop our own books for every levels and intelligent type.</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInUp">
                            <h3><i class="fa fa-diamond" aria-hidden="true" ></i> New technology on learning</h3>
                            <p>Searching tool, advanced filters, easy to use with friendly visualized functions. Tracking system for parents to keep eyes on children’s schedules, timetables and results.</p>
                        </div>
                    </div>
                </div> <!-- /.container -->
            </div> <!-- /.welcome-section -->


            <!-- Popular Course _________________________ -->
            <div class="popular-course wow fadeInUp theme-bg-color">
                <div class="container">
                    <h2>POPULAR TUTORS/h2>

                    <div class="row">
                        <div class="theme-slider course-item-wrapper">
                            <div class="item hvr-float-shadow">
                                <div class="img-holder"><img src="images/home/2.jpg" alt="Image"></div>
                                <div class="text">
                                    <h4><a href="course-details.html">Tiến sĩ toán học</a></h4>
                                    <div class="img round-border"><img src="images/home/1.png" alt="Image"></div>
                                    <h6>Ts. Đặng Đình Hanh</h6>
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>
                                    <p>Trưởng bộ môn toán ĐH Kiến Trúc Hà Nội</p>
                                    <div class="clear-fix">
                                        <ul class="float-left">
                                            <li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
                                            <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Tea road,CA</li>
                                        </ul>

                                        <a href="course-details.html" class="tran3s p-color-bg themehover">$50.00</a>
                                    </div>
                                </div> <!-- /.text -->
                            </div> <!-- /.item -->

                            <div class="item hvr-float-shadow">
                                <div class="img-holder"><img src="images/home/3.jpg" alt="Image"></div>
                                <div class="text">
                                    <h4><a href="course-details.html">Learn Basic German Fast</a></h4>
                                    <div class="img round-border"><img src="images/home/1.png" alt="Image"></div>
                                    <h6>Mahfuz riad</h6>
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>
                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat</p>
                                    <div class="clear-fix">
                                        <ul class="float-left">
                                            <li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
                                            <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Tea road,CA</li>
                                        </ul>

                                        <a href="course-details.html" class="tran3s p-color-bg themehover">$50.00</a>
                                    </div>
                                </div> <!-- /.text -->
                            </div> <!-- /.item -->

                            <div class="item hvr-float-shadow">
                                <div class="img-holder"><img src="images/home/4.jpg" alt="Image"></div>
                                <div class="text">
                                    <h4><a href="course-details.html">basic time use properly</a></h4>
                                    <div class="img round-border"><img src="images/home/1.png" alt="Image"></div>
                                    <h6>Mahfuz riad</h6>
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>
                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat</p>
                                    <div class="clear-fix">
                                        <ul class="float-left">
                                            <li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
                                            <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Tea road,CA</li>
                                        </ul>

                                        <a href="course-details.html" class="tran3s p-color-bg themehover">$50.00</a>
                                    </div>
                                </div> <!-- /.text -->
                            </div> <!-- /.item -->

                            <div class="item hvr-float-shadow">
                                <div class="img-holder"><img src="images/home/3.jpg" alt="Image"></div>
                                <div class="text">
                                    <h4><a href="course-details.html">Learn Basic German Fast</a></h4>
                                    <div class="img round-border"><img src="images/home/1.png" alt="Image"></div>
                                    <h6>Mahfuz riad</h6>
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>
                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat</p>
                                    <div class="clear-fix">
                                        <ul class="float-left">
                                            <li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
                                            <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Tea road,CA</li>
                                        </ul>

                                        <a href="course-details.html" class="tran3s p-color-bg themehover">$50.00</a>
                                    </div>
                                </div> <!-- /.text -->
                            </div> <!-- /.item -->

                            <div class="item hvr-float-shadow">
                                <div class="img-holder"><img src="images/home/2.jpg" alt="Image"></div>
                                <div class="text">
                                    <h4><a href="course-details.html">web development courses</a></h4>
                                    <div class="img round-border"><img src="images/home/1.png" alt="Image"></div>
                                    <h6>Mahfuz riad</h6>
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>
                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat</p>
                                    <div class="clear-fix">
                                        <ul class="float-left">
                                            <li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
                                            <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Tea road,CA</li>
                                        </ul>

                                        <a href="course-details.html" class="tran3s p-color-bg themehover">$50.00</a>
                                    </div>
                                </div> <!-- /.text -->
                            </div> <!-- /.item -->

                            <div class="item hvr-float-shadow">
                                <div class="img-holder"><img src="images/home/4.jpg" alt="Image"></div>
                                <div class="text">
                                    <h4><a href="course-details.html">basic time use properly</a></h4>
                                    <div class="img round-border"><img src="images/home/1.png" alt="Image"></div>
                                    <h6>Mahfuz riad</h6>
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>
                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat</p>
                                    <div class="clear-fix">
                                        <ul class="float-left">
                                            <li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
                                            <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Tea road,CA</li>
                                        </ul>

                                        <a href="course-details.html" class="tran3s p-color-bg themehover">$50.00</a>
                                    </div>
                                </div> <!-- /.text -->
                            </div> <!-- /.item -->

                            <div class="item hvr-float-shadow">
                                <div class="img-holder"><img src="images/home/3.jpg" alt="Image"></div>
                                <div class="text">
                                    <h4><a href="course-details.html">Learn Basic German Fast</a></h4>
                                    <div class="img round-border"><img src="images/home/1.png" alt="Image"></div>
                                    <h6>Mahfuz riad</h6>
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>
                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat</p>
                                    <div class="clear-fix">
                                        <ul class="float-left">
                                            <li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
                                            <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Tea road,CA</li>
                                        </ul>

                                        <a href="course-details.html" class="tran3s p-color-bg themehover">$50.00</a>
                                    </div>
                                </div> <!-- /.text -->
                            </div> <!-- /.item -->

                            <div class="item hvr-float-shadow">
                                <div class="img-holder"><img src="images/home/2.jpg" alt="Image"></div>
                                <div class="text">
                                    <h4><a href="course-details.html">web development courses</a></h4>
                                    <div class="img round-border"><img src="images/home/1.png" alt="Image"></div>
                                    <h6>Mahfuz riad</h6>
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>
                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat</p>
                                    <div class="clear-fix">
                                        <ul class="float-left">
                                            <li><i class="fa fa-users" aria-hidden="true"></i> 345</li>
                                            <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Tea road,CA</li>
                                        </ul>

                                        <a href="course-details.html" class="tran3s p-color-bg themehover">$50.00</a>
                                    </div>
                                </div> <!-- /.text -->
                            </div> <!-- /.item -->
                        </div> <!-- /.course-slider -->
                    </div>
                </div> <!-- /.container -->
            </div> <!-- /.popular-course -->


            <!-- course Progress  __________________________ -->
            <div class="course-progress">
                <div class="opacity">
                    <div class="container">
                        <h2>TRY THE FIRST CLASS<span class="p-color"> FREE </span></h2>
                        <p>Trải nghiệm buổi học thử đầu tiên miễn phí để quyết định người thầy</p>
                        <h6>Chỉ có ở REDU| Reachable Education</h6>

  <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="icon"> <i class="ficon flaticon-crowdfunding"></i> </div>
                                <p>CERTIFIED TEACHERS</p>
                                <div class="number"><span class="timer" data-from="0" data-to="117" data-speed="1500" data-refresh-interval="5">0</span></div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="icon"><i class="ficon flaticon-teamwork"></i></div>
                                <p>COURSES COMPLETE</p>
                                <div class="number"><span class="timer" data-from="0" data-to="12456" data-speed="1500" data-refresh-interval="5">0</span></div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="icon"><i class="ficon flaticon-medical"></i></div>
                                <p>Students Enrolled</p>
                                <div class="number"><span class="timer" data-from="0" data-to="220234" data-speed="1500" data-refresh-interval="5">0</span></div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="icon"><i class="ficon flaticon-book"></i></div>
                                <p>Students Enrolled</p>
                                <div class="number"><span class="timer" data-from="0" data-to="100" data-speed="1500" data-refresh-interval="5">0</span>%</div>
                            </div>
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div> <!-- /.opacity -->
            </div> <!-- /.course-progress -->



                    <!-- Information Banner _______________________ -->
            <div class="information-banner wow fadeInUp">
                <div class="container">
                    <h3>Course information and <span class="p-color"> free sholarships, curriculum, books, pdf.</span></h3>
                    <h6>Contact us 24/7</h6>
                    <a href="contact-us.html" class="p-color-bg tran3s wow fadeInUp" >Contact us</a>
                </div> <!-- /.container -->
            </div> <!-- /.information-banner -->





            <!-- Latest News ___________________________ -->
            <div class="latest-news wow fadeInUp theme-bg-color">
                <div class="container">
                    <div class="theme-title">
                        <h2>Partnerships and Sponsorship</h2>
                        <p>Our beloved partners and sponsors</p>
                    </div>

                    <div class="post-wrapper row">
                        <div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="img-holder">
                                <!-- <div class="date wow fadeInUp p-color-bg">12 <span>Sep</span></div> -->
                                <img src="images/blog/1.jpg" alt="Image">
                                <a href="selfstudy-details.html" class="tran4s"></a>
                            </div>
                            <div class="text-wrapper">
                                <div class="text tran4s">
                                    <a href="selfstudy-details.html"> Đại học Kinh Tế - ĐHQGHN </a>
                                    <p>Xuất thân và được sự hỗ trợ của đại học kinh tế - Đại học Quốc Gia Hà Nội</p>
                                </div> <!-- /.text -->
                            </div> <!-- /.text-wrapper -->
                        </div> <!-- /.single-post -->

                        <div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="img-holder">
                                <img src="images/blog/2.jpg" alt="Image">
                                <a href="selfstudy-details.html" class="tran4s"></a>
                            </div>
                            <div class="text-wrapper">
                                <div class="text tran4s">
                                    <a href="selfstudy-details.html">Mr. Dam Quang Thang </a>
                                    <p>Giám đốc công ty TNHH Agricare Việt Nam - Cố vấn chiến lược và kinh doanh </p>
                                </div> <!-- /.text -->
                            </div> <!-- /.text-wrapper -->
                        </div> <!-- /.single-post -->

                        <div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="img-holder">
                                <img src="images/blog/3.jpg" alt="Image">
                                <a href="selfstudy-details.html" class="tran4s"></a>
                            </div>
                            <div class="text-wrapper">
                                <div class="text tran4s">
                                    <a href="selfstudy-details.html">Sinh trắc dấu vân tay B-Code </a>
                                    <p>Phân tích dựa trên những thành tựu khoa học giải mã khả năng tiềm ẩn con người. 
                            </div> <!-- /.text-wrapper -->
                        </div> <!-- /.single-post -->
                    </div> <!-- /.post-wrapper -->
                </div> <!-- /.container -->
            </div> <!-- /.latest-news -->



            <!-- Testimonial And FAQ Section _________________________ -->
            <div class="test-faq">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 testimonial wow fadeInLeft">
                            <div class="wrapper">
                                <h3>TESTIMONIALS</h3>
                                <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#testimonial-carousel" data-slide-to="1"></li>
                                        <li data-target="#testimonial-carousel" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <div class="single-box theme-bg-color">
                                                <div class="img round-border"><img src="images/home/2.png" alt="Image"></div>
                                                <h6>Top 3 Khởi nghiệp quốc gia 2016 <span>(Top 3)</span></h6>
                                                <p>REDU hân hạnh được đánh giá là dự án khả thi và lọt vào top 3 của cuộc thi khởi nghiệp quốc gia do Báo Diễn Đàn Doanh Nghiệp và VCCI năm 2016</p>
                                            </div> <!-- /.single-box -->

                                            <div class="single-box theme-bg-color">
                                                <div class="img round-border"><img src="images/home/3.png" alt="Image"></div>
                                                <h6>Top 2 Genesis Startup 2016<span>(Top 2)</span></h6>
                                                <p>Tranh tài gay cấn và được đánh giá cao trong cuộc thi Genesis Startup được ĐH Kinh Tế phối hợp với trường đại học Sydney của Úc phối hợp huấn luyện và tổ chức</p>
                                            </div> <!-- /.single-box -->
                                        </div>

                                        <div class="item">
                                            <div class="single-box theme-bg-color">
                                                <div class="img round-border"><img src="images/home/2.png" alt="Image"></div>
                                                <h6>VCCI<span></span></h6>
                                                <p>Tổ chức được thành lập nhằm xúc tiến quan hệ thương mại, kinh tế giữa Việt Nam và các nước. Tập hợp cho các doanh nghiệp thuộc nhiều thành phần kinh tế.</p>
                                            </div> <!-- /.single-box -->

                                            <div class="single-box theme-bg-color">
                                                <div class="img round-border"><img src="images/home/3.png" alt="Image"></div>
                                                <h6>Diễn đàn doanh nghiệp <span></span></h6>
                                                <p>BÁO DIỄN ĐÀN DOANH NGHIỆP-PHÒNG THƯƠNG MẠI VÀ CÔNG NGHIỆP VIỆT NAM.</p>
                                            </div> <!-- /.single-box -->
                                        </div>

                                        <div class="item">
                                            <div class="single-box theme-bg-color">
                                                <div class="img round-border"><img src="images/home/2.png" alt="Image"></div>
                                                <h6>Đại học Kinh Tế - Đại học QGHN <span>(Ban NCKH)</span></h6>
                                                <p>Phòng Nghiên cứu khoa học và Hợp tác phát triển, Trường Đại học Kinh tế ... Đầu mối xây dựng các chương trình nghiên cứu, kế hoạch NCKH </p>
                                            </div> <!-- /.single-box -->

                                            <div class="single-box theme-bg-color">
                                                <div class="img round-border"><img src="images/home/3.png" alt="Image"></div>
                                                <h6>Sinh trắc vân tay B-code <span>(Giải mã tài năng việt)</span></h6>
                                                <p>Sinh trắc học dấu vân tay là công nghệ khoa học giúp ta khám phá ra các năng lực tiềm ẩn của não bộ.</p>
                                            </div> <!-- /.single-box -->
                                        </div>
                                    </div>
                                </div> <!-- /#testimonial-carousel -->
                            </div> <!-- /.wrapper -->
                        </div> <!-- /.testimonial -->

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 faq wow fadeInRight">
                            <div class="wrapper">
                                <h3>Frequently Asked Questions</h3>
                                <!-- ________________ Panel _______________ -->
                                <div class="faq_panel">
                                    <div class="panel-group theme-accordion" id="accordion">
                                        <div class="panel">
                                            <div class="panel-heading active-panel">
                                                <h6 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                                        Điểm khác biệt của REDU là gì?</a>
                                                </h6>
                                            </div>
                                            <div id="collapse1" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <p>REDU là công ty cung cấp mạng lưới gia sư chất lượng cao với mục tiêu cuối là  mang đến cho các em phương pháp học tập riêng phù hợp với bản thân, giúp các em tính tự học, tự nghiên cứu và phát triển bản thân dựa trên nền tảng một ứng dụng/ website mã nguồn mở.
</p>                                               </div>
                                            </div>
                                        </div> <!-- /panel 1 -->
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h6 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                                        Cách đăng tìm gia sư và đăng ký tìm lớp học như thế nào</a>
                                                </h6>
                                            </div>
                                            <div id="collapse2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Có thể dễ dàng tìm được gia sư như ý bằng cách nhập môn học muốn tìm kiếm, trình độ gia sư, tìm kiếm theo khu vực và thời gian trong mục tìm kiếm. Các gia sư đáp ứng các nhu cầu sẽ hiển thị trên bản đồ trực quan.</p>
                                                </div>
                                            </div>
                                        </div> <!-- /panel 2 -->
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h6 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                                        Trở thành một phần của mạng lưới giáo viên REDU</a>
                                                </h6>
                                            </div>
                                            <div id="collapse3" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p> Gia sư nhấp vào link đăng ký và hoàn thiện profile giới thiệu của bản thân. Các bạn gửi ảnh chụp chứng minh thư và các giấy tờ cá nhân để ban quản trị duyệt. Đồng thời muốn dạy môn nào sẽ làm bài test online về môn đấy, khi các bạn đạt điểm đậu thì sẽ được REDU cung cấp giấy chứng nhận và đào tạo offline cho các bạn 3 buổi để các bạn bắt đầu đi dạy.
</p>
                                                </div>
                                            </div>
                                        </div> <!-- /panel 3 -->

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h6 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                                        Tại sao phải sử dụng phương pháp hướng dẫn học và tự học</a>
                                                </h6>
                                            </div>
                                            <div id="collapse4" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Giúp học sinh có thái độ học tập hiệu quả, học có phương pháp, tăng tính hiệu quả và giảm bớt thời gian không cần thiết. Xây dựng nền tảng học tập đúng đắn ngay từ bây giờ để phát triển vững chắc tư duy học tập và phát triển sau này.</p>
                                                </div>
                                            </div>
                                        </div> <!-- /panel 4 -->

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h6 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                                        Dịch vụ theo dõi tiến độ và theo dõi dành cho phụ huynh là gì?</a>
                                                </h6>
                                            </div>
                                            <div id="collapse5" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Là công cụ hỗ trợ để giúp những phụ huynh bận rộn có thể nắm bắt được quá trình học tập, tiến triển của con cái qua các công cụ online mà REDU cung cấp, ví dụ như theo dõi tiến độ học sinh, điểm, lời nhận xét, tracking vị trí gia sư và tình trạng dạy học giữa gia sư và phụ huynh. </p>
                                                </div>
                                            </div>
                                        </div> <!-- /panel 5 -->

                                    </div> <!-- end #accordion -->
                                </div> <!-- End of .faq_panel -->
                            </div> <!-- /.wrapper -->
                        </div> <!-- /.faq -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.test-faq -->



            <!-- SubsCribe Banner ___________________ -->
            <div class="subscribe-banner p-color-bg wow fadeInUp">
                <div class="container">
                    <h3>Subscribe now</h3>
                    <p>Receive weekly newsletter with educational materials, new courses, most popular posts, popular books and much more!</p>
                    <form action="#" class="clear-fix">
                        <input type="email" class="float-left wow fadeInLeft" placeholder="Email address">
                        <button class="float-left tran3s wow fadeInRight">Subcribe</button>
                    </form>
                </div>
            </div>



            <!-- Footer ______________________________ -->
            <footer>
                <div class="top-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer-about">
                                <h4>About REDU</h4>
                                <p>REDU is a company that provides high qualified tutor network in both online and offline form, whom teach students not only academic skills but also SELF-STUDY GUIDES AND STRATEGIES. 
</p>                                <a href="about-us.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> About us</a>
                                <a href="our-team.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> Team Member</a>
                                <ul>
                                    <li><a href="https://www.facebook.com/reduvn" class="tran3s round-border icon"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="https://plus.google.com/u/6/109222418141837975446" class="tran3s round-border icon"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div> <!-- /.footer-about -->

                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 footer-contact">
                                <ul>
                                    <li>
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <a href="mailto:helpneed@edutech.com" class="tran3s">redu.asia@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <a href="tel:+8801712570051" class="tran3s">+961961063</a>
                                    </li>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>144 Xuan Thuy, Cau Giay, HN</li>
                                </ul>
                            </div> <!-- /.footer-contact -->

                            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 footer-quick-link">
                                <h4>Quick link</h4>
                                <ul>
                                    <li><a href="find-futors.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> Find Tutors</a></li>
                                    <li><a href="about-us.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> Become tutors</a></li>
                                    <li><a href="seflstudy-guide.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> Self-study guide</a></li>
                                    <li><a href="our-team.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> Team Member</a></li>
                                    <li><a href="faq.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> Privacy Policy</a></li>
                                    <li><a href="faq.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> Help</a></li>
                                    <li><a href="contact-us.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> Support</a></li>
                                    <li><a href="mentor-board.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> Mentors Boards</a></li>
                                </ul>
                            </div> <!-- /.footer-quick-link -->

                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer-event">
                                <h4>Latest News</h4>

                                <div id="footer-event-carousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#footer-event-carousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#footer-event-carousel" data-slide-to="1"></li>
                                        <li data-target="#footer-event-carousel" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <ul>
                                                <li>
                                                    <div class="date p-color-bg">27 <span>Jan</span></div>
                                                    <a href="event-details.html"><h6>Phương pháp quản lý thời gian</h6></a>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
                                                        <li><i class="fa fa-tags" aria-hidden="true"></i> UP Bách Khoa</li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <div class="date p-color-bg">19 <span>June</span></div>
                                                    <a href="event-details.html"><h6>Phương pháp ghi nhớ</h6></a>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
                                                        <li><i class="fa fa-tags" aria-hidden="true"></i> ĐH Quốc Gia Hà Nội</li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <div class="date p-color-bg">07 <span>Dec</span></div>
                                                    <a href="event-details.html"><h6>Cho và nhận</h6></a>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
                                                        <li><i class="fa fa-tags" aria-hidden="true"></i> BCode - Giải mã tài năng việt</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div> <!-- /.item -->

                                        <div class="item">
                                            <ul>
                                                <li>
                                                    <div class="date p-color-bg">27 <span>June</span></div>
                                                    <a href="event-details.html"><h6>8 loại hình thông minh</h6></a>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
                                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Minh Sang</li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <div class="date p-color-bg">19 <span>Feb</span></div>
                                                    <a href="event-details.html"><h6>Các loại hình tính cách</h6></a>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> 6pm - 8pm</li>
                                                        <li><i class="fa fa-tags" aria-hidden="true"></i> BCode - Giải mã tài năng việt</li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <div class="date p-color-bg">07 <span>Feb</span></div>
                                                    <a href="event-details.html"><h6>Nhóm Whorl - Nhóm tư duy lãnh đạo</h6></a>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
                                                        <li><i class="fa fa-tags" aria-hidden="true"></i> BCode - Giải mã tài năng việt</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div> <!-- /.item -->

                                        <div class="item">
                                            <ul>
                                                <li>
                                                    <div class="date p-color-bg">27 <span>Nov</span></div>
                                                    <a href="event-details.html"><h6>Các phương pháp ghi nhớ tốt nhất</h6></a>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> 4pm - 6pm</li>
                                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Minh Sang</li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <div class="date p-color-bg">19 <span>Dec</span></div>
                                                    <a href="event-details.html"><h6>Cách đọc nhanh</h6></a>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
                                                        <li><i class="fa fa-tags" aria-hidden="true"></i> ĐH Quốc Gia Hà Nội</li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <div class="date p-color-bg">07 <span>Dec</span></div>
                                                    <a href="event-details.html"><h6>Tổng hợp những website để tự học tốt nhất</h6></a>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
                                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Minh Sang</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div> <!-- /.item -->  
                                    </div>
                                </div> <!-- /#footer-event-carousel -->
                            </div> <!-- /.footer-event -->
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div> <!-- /.top-footer -->

                <div class="bottom-footer">
                    <p>Copyright 2017 &copy; <a class="tran3s" target="_blank">REDU</a> <span>|</span> Reachable Eduacation <span class="p-color"></span></p>
                </div> <!-- /.bottom-footer -->
            </footer>

            <!-- Scroll Top Button -->
            <button class="scroll-top tran3s p-color-bg" style="background-color: #84b645!important">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </button>
            <!-- pre loader  -->
            <div id="loader-wrapper">
                <div id="loader"></div>
            </div>





            <!-- Js File_________________________________ -->

            <!-- j Query -->
            <script type="text/javascript" src="vendor/jquery-2.1.4.js"></script>

            <!-- Bootstrap JS -->
            <script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

            <!-- Vendor js _________ -->
            <!-- revolution -->
            <script src="vendor/revolution/jquery.themepunch.tools.min.js"></script>
            <script src="vendor/revolution/jquery.themepunch.revolution.min.js"></script>
            <script type="text/javascript" src="vendor/revolution/revolution.extension.slideanims.min.js"></script>
            <script type="text/javascript" src="vendor/revolution/revolution.extension.layeranimation.min.js"></script>
            <script type="text/javascript" src="vendor/revolution/revolution.extension.navigation.min.js"></script>
            <script type="text/javascript" src="vendor/revolution/revolution.extension.kenburn.min.js"></script>
            <script type="text/javascript" src="vendor/revolution/revolution.extension.actions.min.js"></script>

            <!-- Google map js -->
            <!--<script src="http://maps.google.com/maps/api/js"></script>  Gmap Helper -->
            <!--<script src="vendor/gmap.js"></script>-->
            <!-- Bootstrap Select JS -->
            <script type="text/javascript" src="vendor/bootstrap-select/dist/js/bootstrap-select.js"></script>
            <!-- Time picker -->
            <script type="text/javascript" src="vendor/time-picker/jquery.timepicker.min.js"></script>
            <!-- WOW js -->
            <script type="text/javascript" src="vendor/WOW-master/dist/wow.min.js"></script>
            <!-- owl.carousel -->
            <script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
            <!-- js count to -->
            <script type="text/javascript" src="vendor/jquery.appear.js"></script>
            <script type="text/javascript" src="vendor/jquery.countTo.js"></script>

            <!-- Theme js -->
            <script type="text/javascript" src="js/theme.js"></script>

            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAStzrnC6BDM4kWVwnu-BiKiHrNnfPH5rQ&callback=initMap">
            </script> 

        </div> <!-- /.main-page-wrapper -->
    </body>
</html>