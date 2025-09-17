<?php
error_reporting(0);
include "dil/index.php";
?>


<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />
    <meta property="og:title" content="<?= $dil['title'] ?>" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title><?= $dil['title'] ?></title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="css/plugins.css">
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
    <link rel="stylesheet" type="text/css" href="css/templete.min.css">
    <!-- Revolution Slider Css -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="plugins/revolution/css/navigation.css">
    <!-- Revolution Navigation Style -->

</head>

<body id="bg">
    <div id="loading-area"></div>
    <div class="page-wraper">
        <!-- header -->
        <?php include "template/header.php"; ?>

        <!-- header END -->
        <!-- Content -->
        <div class="page-content">
            <!-- Slider -->
            <div class="main-slider style-two default-banner">
                <div class="tp-banner-container">
                    <div class="tp-banner">
                        <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery">
                            <!-- START REVOLUTION SLIDER 5.3.0.2 -->
                            <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
                                <ul>
                                    <!-- SLIDE 1 -->
                                    <li data-index="rs-1000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/main-slider/slide1.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="images/main-slider/slide1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />
                                        <!-- LAYERS -->
                                        <!-- LAYER NR. 1 [ for overlay ] -->
                                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                        </div>

                                        <!-- LAYER NR. 2 [ for title ] -->
                                        <div class="tp-caption  tp-resizeme" id="slide-100-layer-2" data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" data-y="['top','top','top','top']" data-voffset="['170','150','150','140']" data-fontsize="['70','60','50','40']" data-lineheight="['70','60','50','40']" data-width="['700','700','700','700']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal; font-size: 30px; line-height: 30px; font-weight: 700; color: rgba(255, 255, 255, 1.00); border-width:0px;"> <span class="text-uppercase" style="font-family: Oswald;"><?= $dil['slide1'] ?> <br> <h5 style="padding-top:15px"><?= $dil['slide1detail'] ?></h5></span>
                                        </div>

                                        <!-- LAYER NR. 3 [ for paragraph] -->


                                        <!-- LAYER NR. 4 [ for readmore botton ] -->

                                    </li>
                                    <!-- SLIDE 2 -->
                                    <li data-index="rs-2000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/main-slider/slide2.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="images/main-slider/slide2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />
                                        <!-- LAYERS -->
                                        <!-- LAYER NR. 1 [ for overlay ] -->
                                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-200-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                        </div>
                                        <!-- LAYER NR. 2 [ for title ] -->

                                        <div class="tp-caption  tp-resizeme" id="slide-100-layer-2" data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" data-y="['top','top','top','top']" data-voffset="['170','150','150','140']" data-fontsize="['70','60','50','40']" data-lineheight="['70','60','50','40']" data-width="['700','700','700','700']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal; font-size: 30px; line-height: 30px; font-weight: 700; color: rgba(255, 255, 255, 1.00); border-width:0px;"> <span class="text-uppercase" style="font-family: Oswald;"><?= $dil['slide2'] ?> </span>
                                        </div>



                                    </li>
                                    <!-- SLIDE 3 -->
                                    <li data-index="rs-3000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/main-slider/slide3.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="images/main-slider/slide3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />
                                        <!-- LAYERS -->
                                        <!-- LAYER NR. 1 [ for overlay ] -->

                                    </li>
                                    
                                </ul>
                                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                            </div>
                        </div>
                        <!-- END REVOLUTION SLIDER -->
                    </div>
                </div>
            </div>
            <!-- Slider END -->
            <!-- meet & ask -->
            <div class="section-full z-index100 meet-ask-outer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 meet-ask-row p-tb30">
                            <div class="row d-flex">
                                <div class="col-lg-6">
                                    <div class="icon-bx-wraper clearfix text-white left">
                                        <div class="icon-xl "> <span class=" icon-cell"><i style="color:black" class="fa fa-building-o"></i></span> </div>
                                        <div class="icon-content">
                                            <h3 style="color:black" class="dez-tilte text-uppercase m-b10 "><?= $dil['wanttowork'] ?></h3>
                                            <p style="color:black"><?= $dil['filltheform'] ?> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 m-t20">
                                    <a href="kariyer.php" class="site-button-secondry button-skew m-l10  ">
                                        <span><?= $dil['carrier'] ?> </span><i class="fa fa-angle-right"></i></a>
                                    <a href="contact.php" class="site-button-secondry button-skew m-l20">
                                        <span><?= $dil['contact'] ?> </span><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- meet & ask END -->
            <!-- About Company -->
            <div class="section-full  bg-gray content-inner-1" style="background-image: url(images/bg-img.png); background-repeat: repeat-x; background-position: left bottom -37px;">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-lg-7">
                                <h2 class="text-uppercase"> <?= $dil['about'] ?> </h2>
                                <div class="dez-separator-outer ">
                                    <div class="dez-separator bg-secondry style-skew"></div>
                                </div>
                                <div class="clear"></div>
                                <p><strong><?= $dil['about1'] ?> </strong></p>
                                <p class="m-b50"><?= $dil['about2'] ?> </p>

                            </div>
                            <div class="col-lg-5">
                                <div class="dez-thu m"><img src="images/worker.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Company END -->
            <!-- Our Projects  -->
            <div class="section-full bg-img-fix content-inner-2 overlay-black-middle" style="background-image:url(images/background/bg1.jpg);">
                <div class="container">
                    <div class="section-head  text-center text-white">
                        <h2 class="text-uppercase"><?= $dil['projects'] ?> </h2>
                        <div class="dez-separator-outer ">
                            <div class="dez-separator bg-white style-skew"></div>
                        </div>
                    </div>
                    <div class="site-filters clearfix center m-b40" id="portfolio">
                        <ul class="filters" data-toggle="buttons">
                            <li data-filter="" class="btn active">
                                <input type="radio">
                                <a href="#" class="site-button-secondry button-skew"><span><?= $dil['all'] ?></span></a>
                            </li>
                            <li data-filter="home" class="btn">
                                <input type="radio">
                                <a href="#" class="site-button-secondry button-skew"><span><?= $dil['services1a'] ?></span></a>
                            </li>
                            <!-- <li data-filter="office" class="btn">
                                <input type="radio">
                                <a href="#" class="site-button-secondry button-skew"><span><?= $dil['services2'] ?> </span></a>
                            </li>
                            <li data-filter="commercial" class="btn">
                                <input type="radio">
                                <a href="#" class="site-button-secondry button-skew"><span><?= $dil['services3'] ?></span></a>
                            </li>
                            <li data-filter="window" class="btn">
                                <input type="radio">
                                <a href="#" class="site-button-secondry button-skew"><span><?= $dil['services4'] ?></span></a>
                            </li>
                            <li data-filter="window" class="btn">
                                <input type="radio">
                                <a href="#" class="site-button-secondry button-skew"><span><?= $dil['services5'] ?></span></a>
                            </li>
                            <li data-filter="window" class="btn">
                                <input type="radio">
                                <a href="#" class="site-button-secondry button-skew"><span><?= $dil['services6'] ?> </span></a>
                            </li>
                            <li data-filter="window" class="btn">
                                <input type="radio">
                                <a href="#" class="site-button-secondry button-skew"><span><?= $dil['services7'] ?></span></a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="clearfix">
                        <ul id="masonry" class="row dez-gallery-listing gallery-grid-4 gallery lightgallery">


                            <li class="home card-container col-lg-4 col-md-4 col-sm-6">
                                <div class="dez-box dez-gallery-box">
                                    <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/1.jpeg" alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">

                                                <span data-exthumbimage="images/our-work/1.jpeg" data-src="images/our-work/1.jpeg" class="icon-bx-xs check-km" title="">
                                                    <i class="fa fa-picture-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="home card-container col-lg-4 col-md-4 col-sm-6">
                                <div class="dez-box dez-gallery-box">
                                    <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/2.jpeg" alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">

                                                <span data-exthumbimage="images/our-work/2.jpeg" data-src="images/our-work/2.jpeg" class="icon-bx-xs check-km" title="">
                                                    <i class="fa fa-picture-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="home card-container col-lg-4 col-md-4 col-sm-6">
                                <div class="dez-box dez-gallery-box">
                                    <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/3.jpeg" alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">

                                                <span data-exthumbimage="images/our-work/3.jpeg" data-src="images/our-work/3.jpeg" class="icon-bx-xs check-km" title="">
                                                    <i class="fa fa-picture-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="home card-container col-lg-4 col-md-4 col-sm-6">
                                <div class="dez-box dez-gallery-box">
                                    <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/4.jpeg" alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">

                                                <span data-exthumbimage="images/our-work/4.jpeg" data-src="images/our-work/4.jpeg" class="icon-bx-xs check-km" title="">
                                                    <i class="fa fa-picture-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="home card-container col-lg-4 col-md-4 col-sm-6">
                                <div class="dez-box dez-gallery-box">
                                    <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/5.jpeg" alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">

                                                <span data-exthumbimage="images/our-work/5.jpeg" data-src="images/our-work/5.jpeg" class="icon-bx-xs check-km" title="">
                                                    <i class="fa fa-picture-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="home card-container col-lg-4 col-md-4 col-sm-6">
                                <div class="dez-box dez-gallery-box">
                                    <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/6.jpeg" alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">

                                                <span data-exthumbimage="images/our-work/6.jpeg" data-src="images/our-work/6.jpeg" class="icon-bx-xs check-km" title="">
                                                    <i class="fa fa-picture-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="home card-container col-lg-4 col-md-4 col-sm-6">
                                <div class="dez-box dez-gallery-box">
                                    <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/7.jpeg" alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">

                                                <span data-exthumbimage="images/our-work/7.jpeg" data-src="images/our-work/7.jpeg" class="icon-bx-xs check-km" title="">
                                                    <i class="fa fa-picture-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="home card-container col-lg-4 col-md-4 col-sm-6">
                                <div class="dez-box dez-gallery-box">
                                    <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/8.jpeg" alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">

                                                <span data-exthumbimage="images/our-work/8.jpeg" data-src="images/our-work/8.jpeg" class="icon-bx-xs check-km" title="">
                                                    <i class="fa fa-picture-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="home card-container col-lg-4 col-md-4 col-sm-6">
                                <div class="dez-box dez-gallery-box">
                                    <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/9.jpeg" alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">

                                                <span data-exthumbimage="images/our-work/9.jpeg" data-src="images/our-work/9.jpeg" class="icon-bx-xs check-km" title="">
                                                    <i class="fa fa-picture-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="home card-container col-lg-4 col-md-4 col-sm-6">
                                <div class="dez-box dez-gallery-box">
                                    <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/10.jpeg" alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">

                                                <span data-exthumbimage="images/our-work/10.jpeg" data-src="images/our-work/10.jpeg" class="icon-bx-xs check-km" title="">
                                                    <i class="fa fa-picture-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="home card-container col-lg-4 col-md-4 col-sm-6">
                                <div class="dez-box dez-gallery-box">
                                    <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/11.jpeg" alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">

                                                <span data-exthumbimage="images/our-work/11.jpeg" data-src="images/our-work/11.jpeg" class="icon-bx-xs check-km" title="">
                                                    <i class="fa fa-picture-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="home card-container col-lg-4 col-md-4 col-sm-6">
                                <div class="dez-box dez-gallery-box">
                                    <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/12.jpeg" alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">

                                                <span data-exthumbimage="images/our-work/12.jpeg" data-src="images/our-work/12.jpeg" class="icon-bx-xs check-km" title="">
                                                    <i class="fa fa-picture-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="home card-container col-lg-4 col-md-4 col-sm-6">
                                <div class="dez-box dez-gallery-box">
                                    <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/13.jpeg" alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">

                                                <span data-exthumbimage="images/our-work/13.jpeg" data-src="images/our-work/13.jpeg" class="icon-bx-xs check-km" title="">
                                                    <i class="fa fa-picture-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="home card-container col-lg-4 col-md-4 col-sm-6">
                                <div class="dez-box dez-gallery-box">
                                    <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/14.jpeg" alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">

                                                <span data-exthumbimage="images/our-work/14.jpeg" data-src="images/our-work/14.jpeg" class="icon-bx-xs check-km" title="">
                                                    <i class="fa fa-picture-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="home card-container col-lg-4 col-md-4 col-sm-6">
                                <div class="dez-box dez-gallery-box">
                                    <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/15.jpeg" alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">

                                                <span data-exthumbimage="images/our-work/15.jpeg" data-src="images/our-work/15.jpeg" class="icon-bx-xs check-km" title="">
                                                    <i class="fa fa-picture-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="home card-container col-lg-4 col-md-4 col-sm-6">
                                <div class="dez-box dez-gallery-box">
                                    <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/16.jpeg" alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">

                                                <span data-exthumbimage="images/our-work/16.jpeg" data-src="images/our-work/16.jpeg" class="icon-bx-xs check-km" title="">
                                                    <i class="fa fa-picture-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="home card-container col-lg-4 col-md-4 col-sm-6">
                                <div class="dez-box dez-gallery-box">
                                    <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/17.jpeg" alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">

                                                <span data-exthumbimage="images/our-work/17.jpeg" data-src="images/our-work/17.jpeg" class="icon-bx-xs check-km" title="">
                                                    <i class="fa fa-picture-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>



                        </ul>
                    </div>
                </div>
            </div>
            <!-- Our Projects END -->
            <div class="section-full bg-img-fix overlay-primary-dark p-tb50 dez-support" style="background-image:url(images/background/bg4.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="m-b15 m-t0 text-black "><?= $dil['724'] ?></h2>
                            <h3 class="m-t0 m-b20 text-black "><?= $dil['724detail'] ?></h3>
                            <a href="contact.php" class="site-button black radius-sm"><?= $dil['readmore'] ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- About Company -->
            <div class="section-full  bg-gray content-inner-1" style="background-image: url(images/bg-img.png); background-repeat: repeat-x; background-position: left bottom -37px;">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2 class="text-uppercase"> <?= $dil['d5'] ?> </h2>
                                <div class="dez-separator-outer ">
                                    <div class="dez-separator bg-secondry style-skew"></div>
                                </div>
                                <div class="clear"></div>
                                <p><strong><?= $dil['d6'] ?> </strong></p>
                                <p class="m-b50"><?= $dil['about2'] ?> </p>

                            </div>
                            <div class="col-lg-6">
                                <div class="dez-thu m"><img src="images/worker2.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Company END -->
            <!-- Architecture -->
            <div class="section-full bg-white content-inner">
                <div class="container">
                    <div class="section-head text-center ">
                        <h2 class="text-uppercase"><?= $dil['services'] ?></h2>

                    </div>
                    <div class="section-content ">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
                                <div class="dez-box">
                                    <div class="dez-media"> <a href="#"><img src="images/our-services/img2.jpg" alt=""></a> </div>
                                    <div class="dez-info p-a20 text-center bg-gray">
                                        <div class="p-lr20">
                                            <h4 class="m-a0 m-b15"><a href="#"><?= $dil['project1'] ?></a></h4>
                                            <div class="dez-separator bg-primary"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
                                <div class="dez-box">
                                    <div class="dez-media"> <a href="#"><img src="images/our-services/img2.jpg" alt=""></a> </div>
                                    <div class="dez-info p-a20 text-center bg-gray">
                                        <div class="p-lr20">
                                            <h4 class="m-a0 m-b15"><a href="#"><?= $dil['project2'] ?></a></h4>
                                            <div class="dez-separator bg-primary"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
                                <div class="dez-box">
                                    <div class="dez-media"> <a href="#"><img src="images/our-services/img2.jpg" alt=""></a> </div>
                                    <div class="dez-info p-a20 text-center bg-gray">
                                        <div class="p-lr20">
                                            <h4 class="m-a0 m-b15"><a href="#"><?= $dil['project3'] ?></a></h4>
                                            <div class="dez-separator bg-primary"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
                                <div class="dez-box">
                                    <div class="dez-media"> <a href="#"><img src="images/our-services/img2.jpg" alt=""></a> </div>
                                    <div class="dez-info p-a20 text-center bg-gray">
                                        <div class="p-lr20">
                                            <h4 class="m-a0 m-b15"><a href="#"><?= $dil['project4'] ?></a></h4>
                                            <div class="dez-separator bg-primary"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
                                <div class="dez-box">
                                    <div class="dez-media"> <a href="#"><img src="images/our-services/img2.jpg" alt=""></a> </div>
                                    <div class="dez-info p-a20 text-center bg-gray">
                                        <div class="p-lr20">
                                            <h4 class="m-a0 m-b15"><a href="#"><?= $dil['project5'] ?></a></h4>
                                            <div class="dez-separator bg-primary"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 m-b10">
                                <div class="dez-box">
                                    <div class="dez-media"> <a href="#"><img src="images/our-services/img2.jpg" alt=""></a> </div>
                                    <div class="dez-info p-a20 text-center bg-gray">
                                        <div class="p-lr20">
                                            <h4 class="m-a0 m-b15"><a href="#"><?= $dil['project6'] ?></a></h4>
                                            <div class="dez-separator bg-primary"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 m-b10">
                                <div class="dez-box">
                                    <div class="dez-media"> <a href="#"><img src="images/our-services/img2.jpg" alt=""></a> </div>
                                    <div class="dez-info p-a20 text-center bg-gray">
                                        <div class="p-lr20">
                                            <h4 class="m-a0 m-b15"><a href="#"> <?= $dil['project7'] ?></a></h4>
                                            <div class="dez-separator bg-primary"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Architecture END-->
            <!-- Company staus -->
            <div class="section-full text-white bg-img-fix content-inner overlay-black-middle" style="background-image:url(images/background/bg4.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dex-box  border-2 counter-box m-b30">
                                <h2 class="text-uppercase m-a0 p-a15 "><i class="fa fa-building-o m-r20"></i> <span class="counter">20</span></h2>
                                <h5 class="dez-tilte  text-uppercase m-a0"><span class="dez-tilte-inner skew-title bg-primary p-lr15 p-tb10"><?= $dil['testimontal1'] ?></span></h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dex-box  border-2 counter-box m-b30">
                                <h2 class="text-uppercase m-a0 p-a15 "><i class="fa fa-group m-r20"></i> <span class="counter">450</span></h2>
                                <h5 class="dez-tilte  text-uppercase m-a0"><span class="dez-tilte-inner skew-title bg-primary p-lr15 p-tb10"><?= $dil['testimontal2'] ?></span></h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dex-box  border-2 counter-box m-b30">
                                <h2 class="text-uppercase m-a0 p-a15 "><i class="fa fa-slideshare m-r20"></i> <span class="counter">5</span></h2>
                                <h5 class="dez-tilte  text-uppercase m-a0"><span class="dez-tilte-inner skew-title bg-primary p-lr15 p-tb10"><?= $dil['testimontal3'] ?></span></h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dex-box  border-2 counter-box m-b10">
                                <h2 class="text-uppercase m-a0 p-a15 "><i class="fa fa-home m-r20"></i> <span class="counter">150</span></h2>
                                <h5 class="dez-tilte  text-uppercase m-a0"><span class="dez-tilte-inner skew-title bg-primary p-lr15 p-tb10"><?= $dil['testimontal4'] ?></span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Company staus END -->
            <!-- Team member -->

            <!-- Team member END -->
            <!-- Latest blog -->



            <!-- Testimonials blog -->

            <!-- Testimonials blog END -->
            <!-- Client logo -->

            <!-- Client logo END -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22288.60430558287!2d33.9849417394278!3d38.263549297256574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d66f38a4d484e9%3A0x3faf634a1dffa1e6!2zQWtzYXJheSBPcmdhbml6ZSBTYW5heWkgQsO2bGdlIE3DvGTDvHJsw7zEn8O8!5e0!3m2!1str!2str!4v1670746529777!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- Latest blog END -->
            <div class="section-full dez-we-find bg-img-fix client-logo-area">
                <div class="container">
                    <div class="section-content">
                        <div class="client-logo-carousel owl-carousel owl-btn-center-lr">
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo"><a href="#"><img src="images/client-logo/logo.png" alt=""></a></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo"> <a href="#"><img src="images/client-logo/logo.png" alt=""></a> </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo"> <a href="#"><img src="images/client-logo/logo.png" alt=""></a> </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo"> <a href="#"><img src="images/client-logo/logo.png" alt=""></a> </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo"> <a href="#"><img src="images/client-logo/logo.png" alt=""></a> </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo"> <a href="#"><img src="images/client-logo/logo.png" alt=""></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content END-->
        <!-- Footer -->
        <?php include "template/footer.php"; ?>
        <!-- Footer END-->
        <!-- scroll top button -->


        <button class="scroltop fa fa-arrow-up style5"></button>
    </div>

    <!-- JavaScript  files ========================================= -->
    <script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
    <script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
    <script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
    <script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
    <script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
    <script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
    <script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
    <script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
    <script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
    <script src="plugins/lightgallery/js/lightgallery-all.js"></script><!-- LIGHT GALLERY -->
    <script src="js/custom.min.js"></script><!-- CUSTOM FUCTIONS  -->
    <script src="js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->
    <script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->

    <!-- REVOLUTION JS FILES -->
    <script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="js/rev.slider.js"></script>
    <script>
        jQuery(document).ready(function() {
            'use strict';
            dz_rev_slider_1();
        }); /*ready*/
    </script>


</body>

</html>