<?php
include_once './_head.php';
include_once './signin_signup_form.php';
?>


<div class="main-page-wrapper">
    <header class="main-header" >
        <div class="top-header">
            <div class="container" >
                <div class="left-side float-left">
                    <ul>
                        <li><span class="icon round-border"><i class="ficon flaticon-signs"></i></span> <a href="" class="tran3s">45/12 Best Avenue Street, UK 2450, US</a></li>
                        <li><span class="icon round-border"><i class="ficon flaticon-multimedia"></i></span> <a href="" class="tran3s">info@edutech.com</a></li>
                        <li><span class="icon round-border"><i class="ficon flaticon-technology"></i></span> <a href="" class="tran3s">+8801712570051</a></li>
                        <li><span class="icon round-border"><i class="ficon flaticon-translation"></i></span>
                            <select class="selectpicker">
                                <option>English</option>
                                <option>Spanish</option>
                                <option>L'italiano</option>
                            </select>
                        </li>
                    </ul>
                </div> <!-- /.left-side -->
                <div class="right-side float-right">
                    <ul>
                        <li><a href="#" class="tran3s round-border icon"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="tran3s round-border icon"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="tran3s round-border icon"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="tran3s round-border icon"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
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
                            <button class="btn btn-default" style="background-color: #84b645" data-toggle="modal" data-target="#exampleModal">Signup</button>
                            <button class="btn btn-default" style="background-color: #84b645" data-toggle="modal" data-target="#signinModal">Sigin</button>
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
                    <nav class="navbar float-right">
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
                            <ul class="nav navbar-nav">
                                <li class="dropdown-holder current-page-item"><a href="index.php">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.php" class="tran3s">For Teacher</a></li>
                                        <li><a href="index-2.html" class="tran3s">For Student</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-holder"><a href="about-us.html">About</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.html" class="tran3s">About REDU</a></li>
                                        <li><a href="become-tutors.html" class="tran3s">About Founding Team</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-holder"><a href="#">scholar hunt</a>
                                </li>
                                <li class="dropdown-holder"><a href="#">Find a tutor</a>
                                    <ul class="sub-menu">
                                        <li><a href="course-v1.html" class="tran3s">Course Version One</a></li>
                                        <!--- <li><a href="course-v2.html" class="tran3s">Course Version Two</a></li> -->
                                        <!--- <li><a href="course-details.html" class="tran3s">Course Details Page</a></li> -->
                                    </ul>
                                </li>
                                <li class="dropdown-holder"><a href="#">features</a>
                                    <ul class="sub-menu">
                                        <li><a href="our-teacher.html" class="tran3s">Our Teacher</a></li>
                                        <li><a href="teacher-profile.html" class="tran3s">Teacher Profile</a></li>
                                        <!--<li><a href="faq.html" class="tran3s">faq</a></li>-->
                                        <!--<li><a href="404.html" class="tran3s">Error Page</a></li>-->
                                    </ul>
                                </li>
                                <li class="dropdown-holder"><a href="#">faq</a>

                                </li>
                                <li class="dropdown-holder"><a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-v1.html" class="tran3s">blog Version One</a></li>
                                        <li><a href="seflstudy-guide.html" class="tran3s">blog Version Two</a></li>
                                        <li><a href="selfstudy-details.html" class="tran3s">blog Details Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">contact</a></li>
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
                            <a href="course-v1.html" class="course-button">View courses</a>
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
                            <h1 class="center-item">Meet your new <span class="p-color">community</span> <br>Learn education</h1>
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
                            <a href="course-v1.html" class="course-button">View courses</a>
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
                            <a href="contact-us.html" class="buy-button p-color-bg">BUY NOW</a>
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
                            <a href="course-v1.html" class="course-button">View courses</a>
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