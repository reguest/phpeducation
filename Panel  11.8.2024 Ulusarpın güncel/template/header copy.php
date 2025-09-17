<?php
//error_reporting(0);
include "panel/settings/config.php";
include "lang/index.php";
//print_r($_SESSION['lang']);

?> 
 
<!doctype html>
<html class="no-js" lang="<?= $_SESSION['lang'] ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ULUSARP - <?= $lang['slogan'] ?> </title>
    <meta name="author" content="vecuro">
    <meta name="description" content="Ulusarp - <?= $lang['slogan'] ?>">
    <meta name="keywords" content="Ulusarp - <?= $lang['slogan'] ?>" />
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->

    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon.png">

    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700&family=Fira+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Layerslider -->
    <link rel="stylesheet" href="assets/css/layerslider.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->





    <!--==============================
     Preloader
    ==============================-->
    <!-- <div class="preloader  ">
        <button class="vs-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div> -->
    <!--==============================
    Mobile Menu
    ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.php"><img width="150px" src="assets/img/logo.png" alt="Ulusarp" class="logo"></a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                    <li>
                        <a href="index.php"><?= $lang['home'] ?></a>

                    </li>

                    <li><a href="abouts.php"><?= $lang['about'] ?></a></li>



                    <li><a href="#"><?= $lang['blog'] ?></a></li>

                    <li class="menu-item-has-children">
                        <a href="#none"><?= $lang['shop'] ?></a>
                        <ul class="sub-menu">
                            <li><a href="#"><?= $lang['tractor'] ?></a></li>

                            <li><a href="#"><?= $lang['smartFarming'] ?></a>
                                <ul class="sub-menu">
                                    <li><a href="#"><?= $lang['autopilot'] ?></a></li>
                                    <li><a href="#"><?= $lang['baseStation'] ?></a></li>
                                    <li><a href="#"><?= $lang['corsStation'] ?></a></li>
                                    <li><a href="#"><?= $lang['animalEquipment'] ?></a></li>
                                    <li><a href="#"><?= $lang['countsSeeds'] ?></a></li>
                                </ul>
                            </li>

                            <li><a href="#"><?= $lang['farming'] ?></a>
                                <ul class="sub-menu">
                                    <li><a href="#"><?= $lang['scratchingcomb'] ?></a></li>
                                    <li><a href="#"><?= $lang['milkingmachines'] ?></a></li>

                                </ul>
                            </li>

                            <li><a href="#"><?= $lang['endustry'] ?></a></li>
                            <!-- <li><a href="#"><?= $lang['farmDrone'] ?></a></li> -->
                            <!-- <li><a href="#"><?= $lang['motor'] ?></a></li> -->

                            <li><a href="#"><?= $lang['animalFood'] ?></a>
                                <ul class="sub-menu">
                                    <li><a href="#"><?= $lang['bait'] ?></a></li>
                                    <li><a href="#"><?= $lang['feedAdditives'] ?></a></li>

                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#none"><span class="has-new-lable"><?= $lang['services'] ?></span></a>
                        <ul class="sub-menu">
                            <li><a href="#"><?= $lang['services2'] ?></a> </li>
                            <li><a href="#"><?= $lang['services1'] ?></a></li>
                            <li><a href="#"><?= $lang['services3'] ?></a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><?= $lang['dealer'] ?></a>
                    </li>
                    <li>
                        <a href="#"><?= $lang['support'] ?></a>
                    </li>
                    <li>
                        <a href="#"><?= $lang['carrier'] ?></a>
                    </li>
                    <li>
                        <a href="#"><?= $lang['contact'] ?></a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!--==============================
        Header Area
    ==============================-->
    <header class="vs-header header-layout1">
        <!-- Header Top -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center justify-content-between gy-1 text-center text-lg-start">
                    <div class="col-lg-auto d-none d-lg-block">
                        <p class="header-text"><span class="fw-medium">Ulusarp:</span> Tarımsal Ekipman Tedarikçisi</p>
                    </div>
                    <div class="col-lg-auto">
                        <div class="header-social style-white">
                            <span class="social-title">Sosyal Medya: </span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="menu-top">
                <div class="row justify-content-between align-items-center gx-sm-0">
                    <div class="col">
                        <div class="header-logo">
                            <a href="index.php"><img width="150px" src="assets/img/logo.png" alt="Ulusarp" class="logo"></a>
                        </div>
                    </div>
                   
                    <!-- <div class="col-auto header-info d-none d-lg-flex">
                     
                        <div class="header-btns">
                            <a href="#" class="vs-btn style7">Servis Desteği Al<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div> -->

                    <div class="col-auto header-info d-none d-xl-flex">
                        <div class="header-btns">
                            <a href="#" class="vs-btn style7">Servis Desteği Al<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Menu Area -->
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <nav class="main-menu menu-style1 d-none d-lg-block">
                                <ul>
                                    <li>
                                        <a href="index.php"><span class="has-new-lable"><?= $lang['home'] ?></span></a>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#"><?= $lang['about'] ?></a>
                                        <ul class="sub-menu">
                                            <li><a href="abouts.php"><?= $lang['about'] ?></a></li>
                                            <li><a href="kvkk.php"><?= $lang['kvkk'] ?></a></li>
                                            <li><a href="cookiepolicy.php"><?= $lang['cookiePolicy'] ?></a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="shop.php"><?= $lang['shop'] ?></a>
                                        <ul class="sub-menu">
                                            <li><a href="#"><?= $lang['tractor'] ?></a></li>

                                            <li><a href="#"><?= $lang['smartFarming'] ?></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#"><?= $lang['autopilot'] ?></a></li>
                                                    <li><a href="#"><?= $lang['baseStation'] ?></a></li>
                                                    <li><a href="#"><?= $lang['corsStation'] ?></a></li>
                                                    <li><a href="#"><?= $lang['animalEquipment'] ?></a></li>
                                                    <li><a href="#"><?= $lang['countsSeeds'] ?></a></li>
                                                </ul>
                                            </li>

                                            <li><a href="#"><?= $lang['farming'] ?></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#"><?= $lang['scratchingcomb'] ?></a></li>
                                                    <li><a href="#"><?= $lang['milkingmachines'] ?></a></li>

                                                </ul>
                                            </li>

                                            <li><a href="#"><?= $lang['endustry'] ?></a></li>
                                            <!-- <li><a href="#"><?= $lang['farmDrone'] ?></a></li> -->
                                            <!-- <li><a href="#"><?= $lang['motor'] ?></a></li> -->

                                            <li><a href="#"><?= $lang['animalFood'] ?></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#"><?= $lang['bait'] ?></a></li>
                                                    <li><a href="#"><?= $lang['feedAdditives'] ?></a></li>

                                                </ul>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="service.php"><?= $lang['services'] ?></a>
                                        <ul class="sub-menu">
                                            <li><a href="#"><?= $lang['services2'] ?></a> </li>
                                            <li><a href="#"><?= $lang['services1'] ?></a></li>
                                            <li><a href="#"><?= $lang['services3'] ?></a> </li>
                                        </ul>
                                    </li>

                                    <li class="">
                                        <a href="blog.php"><?= $lang['blog'] ?></a>

                                    </li>


                                    <li class="menu-item-has-children">
                                        <a href="dealer.php"><?= $lang['dealer'] ?></a>

                                        <ul class="sub-menu">
                                            <li><a href="#"><?= $lang['dealers'] ?></a> </li>
                                            <li><a href="#"><?= $lang['dealersSubc'] ?></a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="support.php"><?= $lang['support'] ?></a>
                                        <ul class="sub-menu">
                                            <li><a href="#"><?= $lang['sveaverkenF100'] ?></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#"><?= $lang['mechanicalInstallation'] ?></a> </li>
                                                    <li><a href="#"><?= $lang['calibration'] ?></a></li>
                                                    <li><a href="#"><?= $lang['equipmentSettings'] ?></a></li>
                                                    <li><a href="#"><?= $lang['problemSolutions'] ?></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#"><?= $lang['sss'] ?></a></li>
                                        </ul>

                                    </li>

                                    <li>
                                        <a href="carrier.php"><?= $lang['carrier'] ?></a>
                                    </li>

                                    <li>
                                        <a href="contact.php"><?= $lang['contact'] ?></a>
                                    </li>


                                </ul>
                            </nav>
                            <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                        </div>
                        <div class="col-auto">
                            <div class="header-dropdown style-black">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-globe"></i><?= $lang['language'] ?></a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                    <li>
                                        <a href="lang.php?lang=tr"> <img width="25px" src="assets/img/tr.png" alt=""> <?= $lang['turkey'] ?></a>
                                        <a href="lang.php?lang=en"> <img width="25px" src="assets/img/en.png" alt=""> <?= $lang['english'] ?></a>


                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>