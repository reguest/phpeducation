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


                    <li><a href="abouts.php"><?= $lang['about'] ?></a></li>



                    <li><a href="#"><?= $lang['blog'] ?></a></li>

                    <li class="menu-item-has-children">
                        <a href="#none"><?= $lang['shop'] ?></a>
                        <ul class="sub-menu">
                            <li><a href="tractor.php"><?= $lang['tractor'] ?></a></li>

                            <li><a href="#"><?= $lang['smartFarming'] ?></a>
                                <ul class="sub-menu">
                                    <li><a href="sveaverken.php"><?= $lang['autopilot'] ?></a></li>
                                    <li><a href="baz.php"><?= $lang['baseStation'] ?></a></li>
                                    <li><a href="corsstation.php"><?= $lang['corsstation'] ?></a></li>
                                    <li><a href="animalequipment.php"><?= $lang['animalEquipment'] ?></a></li>
                                    <li><a href="countsseeds.php"><?= $lang['countsSeeds'] ?></a></li>
                                </ul>
                            </li>

                            <li><a href="#"><?= $lang['farming'] ?></a>
                                <ul class="sub-menu">
                                    <li><a href="scratchingcomb.php"><?= $lang['scratchingcomb'] ?></a></li>
                                    <li><a href="milkingmachines.php"><?= $lang['milkingmachines'] ?></a></li>

                                </ul>
                            </li>

                            <li><a href="industry.php"><?= $lang['endustry'] ?></a></li>
                            <!-- <li><a href="#"><?= $lang['farmDrone'] ?></a></li> -->
                            <!-- <li><a href="#"><?= $lang['motor'] ?></a></li> -->

                            <li><a href="#"><?= $lang['animalFood'] ?></a>
                                <ul class="sub-menu">
                                    <li><a href="animalfood.php"><?= $lang['bait'] ?></a></li>
                                    <li><a href="animalfood2.php"><?= $lang['feedAdditives'] ?></a></li>

                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#none"><span class="has-new-lable"><?= $lang['services'] ?></span></a>
                        <ul class="sub-menu">
                            <li><a href="milk.php"><?= $lang['services2'] ?></a> </li>
                            <li><a href="cors.php"><?= $lang['services1'] ?></a></li>
                            <li><a href="servicesdetail.php"><?= $lang['services3'] ?></a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><?= $lang['dealer'] ?></a>
                        <ul class="sub-menu">
                            <li><a href="dealer.php"><?= $lang['dealers'] ?></a> </li>
                            <li><a href="franchise.php"><?= $lang['dealersSubc'] ?></a></li>

                        </ul>

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
    <header class="vs-header header-layout5">
        <div class="header-shape1"></div>
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center justify-content-between gx-20">
                    <div class="col d-none d-md-block">
                        <div class="header-links style-white">
                            <ul>
                                <li><i class="far fa-envelope"></i><a href="mailto:v"><?= $lang['emailadress'] ?></a></li>
                                <li><i class="far fa-map-marker-alt"></i><?= $lang['myAddress'] ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-dropdown style-white">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-globe"></i>
                                <?php
                                if ($_SESSION['lang'] == "tr") {  echo "Türkçe";   } else { echo "English";  }  ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                <li>

                                    <a href="lang.php?lang=tr"> <img width="25px" src="assets/img/tr.png" alt=""> <?= $lang['turkey'] ?></a>
                                    <a href="lang.php?lang=en"> <img width="25px" src="assets/img/en.png" alt=""> <?= $lang['english'] ?></a>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-social style-white">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="menu-area">
                    <div class="container">
                        <div class="row align-items-center justify-content-between gx-40">
                            <div class="col-auto">
                                <div class="header-logo">
                                    <a href="index.php"><img width="180px" src="assets/img/logo.png" alt="Ulusarp" class="logo"></a>
                                </div>
                            </div>
                            <div class="col text-end text-xl-center">
                                <nav class="main-menu menu-style4 d-none d-lg-block">
                                    <ul>
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
                                                <li><a href="tractor.php"><?= $lang['tractor'] ?></a></li>

                                                <li><a href="#"><?= $lang['smartFarming'] ?></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="sveaverken.php"><?= $lang['autopilot'] ?></a></li>
                                                        <li><a href="baz.php"><?= $lang['baseStation'] ?></a></li>
                                                        <li><a href="corsstation.php"><?= $lang['corsStation'] ?></a></li>
                                                        <li><a href="animalequipment.php"><?= $lang['animalEquipment'] ?></a></li>
                                                        <li><a href="countsseeds.php"><?= $lang['countsSeeds'] ?></a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="#"><?= $lang['farming'] ?></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="scratchingcomb.php"><?= $lang['scratchingcomb'] ?></a></li>
                                                        <li><a href="milkingmachines.php"><?= $lang['milkingmachines'] ?></a></li>

                                                    </ul>
                                                </li>

                                                <li><a href="industry.php"><?= $lang['endustry'] ?></a></li>
                                                <!-- <li><a href="#"><?= $lang['farmDrone'] ?></a></li> -->
                                                <!-- <li><a href="#"><?= $lang['motor'] ?></a></li> -->

                                                <li><a href="#"><?= $lang['animalFood'] ?></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="animalfood.php"><?= $lang['bait'] ?></a></li>
                                                        <li><a href="animalfood2.php"><?= $lang['feedAdditives'] ?></a></li>

                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="service.php"><?= $lang['services'] ?></a>
                                            <ul class="sub-menu">
                                                <li><a href="milk.php"><?= $lang['services2'] ?></a> </li>
                                                <li><a href="cors.php"><?= $lang['services1'] ?></a></li>
                                                <li><a href="servicesdetail.php"><?= $lang['services3'] ?></a> </li>
                                            </ul>
                                        </li>




                                        <li class="menu-item-has-children">
                                            <a href="dealer.php"><?= $lang['dealer'] ?></a>

                                            <ul class="sub-menu">
                                                <li><a href="dealer.php"><?= $lang['dealers'] ?></a> </li>
                                                <li><a href="franchise.php"><?= $lang['dealersSubc'] ?></a></li>

                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="support.php"><?= $lang['support'] ?></a>
                                            <ul class="sub-menu">
                                                <li><a href="#"><?= $lang['sveaverkenF100'] ?></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="mechanic.php"><?= $lang['mechanicalInstallation'] ?></a> </li>
                                                        <li><a href="calib.php"><?= $lang['calibration'] ?></a></li>
                                                        <li><a href="equipment.php"><?= $lang['equipmentSettings'] ?></a></li>
                                                        <li><a href="faqc.php"><?= $lang['problemSolutions'] ?></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="faq.php"><?= $lang['sss'] ?></a></li>
                                            </ul>
                                        </li>



                                        <li>
                                            <a href="contact.php"><?= $lang['contact'] ?></a>
                                        </li>


                                    </ul>
                                </nav>
                                <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                            </div>

                            <div class="col-auto d-none d-xl-block">
                                <div class="header-btns">
                                    <a href="contact.php" class="vs-btn style7"><?= $lang['servicesupport'] ?><i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>