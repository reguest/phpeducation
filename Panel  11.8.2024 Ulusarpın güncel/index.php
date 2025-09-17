<?php include "template/header.php"; ?>
<!--==============================
      Hero Area
    ==============================-->
<section class="vs-hero-wrapper position-relative  ">
    <div class="vs-hero-carousel" data-height="850" data-container="1900" data-slidertype="responsive">
        <!-- Slide 1 -->

        <?php
        $sliders = $config->db->prepare("SELECT * from slides 
                                    ORDER BY id DESC");
        $sliders->execute(array());
        $slidersAll = $sliders->fetchAll(PDO::FETCH_ASSOC);
        foreach ($slidersAll as $row) {
        ?>



            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
                <img width="1920" height="850" src="images/slider/<?= $row['image'] ?>" class="ls-bg" alt="hero-bg" />
                <!-- <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:300px; height:1558px; background-color:rgba(14, 84, 245, 0.5); top:-473px; left:51px;" class="ls-l ls-text-layer d-hd-none" data-ls="offsetxin:-800; offsetyin:-800; durationin:1700; delayin:1200; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; rotation:43.46;">
                </div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:589px; height:1819.7px; top:-485px; left:406px; background:linear-gradient(172deg, rgba(5, 26, 79, 0.35) 21%, rgba(0, 0, 0, 0) 54%);" class="ls-l ls-text-layer d-hd-none" data-ls="offsetxin:-800; offsetyin:-800; durationin:1500; delayin:1300; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; bgcolorout:transparent; colorout:transparent; rotation:43.46;">
                </div>
                <p style="font-size:18px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; border-width:2px 2px 2px 2px; border-color:#ffffff; border-radius:5px 5px 5px 5px; padding-top:9px; padding-right:23.5px; padding-left:23.5px; top:240px; left:588px; padding-bottom:9px;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    <?= $row['sliderOrder'] ?></p>
                <h1 style="top:225px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; color:#ffffff; font-family:Exo;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">

                </h1>
                <h1 style="top:305px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    <?= $row['title'] ?>
                </h1>
                <div style="top:405px; left:350px; background-size:inherit; background-position:inherit; font-size:16px; line-height:28px; font-family:Fira Sans; width:695px; color:#ffffff; white-space:normal;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetyin:50; durationin:1500; delayin:600; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <?= $row['description'] ?></div>
                <div style="top:495px; left:350px; background-size:inherit; background-position:inherit; font-size:24px;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">

                        <a href="<?= $row['url'] ?>" class="vs-btn style2 ls-hero-btn"><?= $row['button'] ?><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <p style="font-size:32px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; border-width:2px 2px 2px 2px; border-color:#ffffff; border-radius:5px 5px 5px 5px; padding-top:18px; padding-right:44px; padding-left:44px; top:160px; left:90px; padding-bottom:18px;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    <?= $row['sliderOrder'] ?></p>
                <h1 style="top:280px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; color:#ffffff; font-family:Exo;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">

                </h1>
                <h1 style="top:380px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    <?= $row['title'] ?>
                </h1>
                <div style="top:540px; left:80px; background-size:inherit; background-position:inherit; font-size:24px;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">

                        <a href="<?= $row['url'] ?>" class="vs-btn style2 ls-hero-btn"><?= $row['button'] ?><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <h1 style="top:120px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; color:#ffffff; font-family:Exo; width:10000px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">

                </h1>
                <h1 style="top:280px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; font-family:Exo; color:#ffffff; width:10000px; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    <?= $row['title'] ?>
                </h1>
                <div style="top:520px; left:50%; text-align:center; background-size:inherit; background-position:inherit; font-size:24px; width:1000px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer" data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">

                        <a href="<?= $row['url'] ?>" class="vs-btn style2 ls-hero-btn"><?= $row['button'] ?><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <a class="ls-l ls-hide-tablet ls-hide-phone" href="#next" target="_self" data-ls="static:forever;">
                    <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; left:1685px; top:50%;" class="ls-html-layer">
                        <span class="icon-btn style2"><i class="far fa-arrow-right"></i></span>
                    </div>
                </a>
                <a class="ls-l ls-hide-tablet ls-hide-phone" href="#prev" target="_self" data-ls="static:forever;">
                    <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; left:150px; top:50%;" class="ls-html-layer">
                        <span class="icon-btn style2"><i class="far fa-arrow-left"></i></span>
                    </div>
                </a> -->
            </div>
            <!-- Slide -->


        <?php
        }
        ?>




    </div>
</section>

<div data-bg-src="assets/img/bg/ab-bg-1-1.jpg">
    <!--==============================
               Features Area
           ==============================-->
    <!-- <section class="feature-wrap1  space-top space-extra-bottom">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row vs-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2">
                <div class="col-xl-4">
                    <div class="feature-style1">
                        <div class="feature-icon"><img src="assets/img/icon/fe-1-1.png" alt="Features"></div>
                        <h3 class="feature-title h5"><a class="text-inherit" href="#"><?= $lang['services1'] ?></a></h3>
                        <p class="feature-text"><?= $lang['servicesa'] ?></p>
                        <a href="#" class="vs-btn style3"><?= $lang['readmore'] ?><i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="feature-style1">
                        <div class="feature-icon"><img src="assets/img/icon/fe-1-2.png" alt="Features"></div>
                        <h3 class="feature-title h5"><a class="text-inherit" href="#"><?= $lang['services2'] ?></a></h3>
                        <p class="feature-text"><?= $lang['servicesb'] ?></p>
                        <a href="#" class="vs-btn style3"><?= $lang['readmore'] ?><i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="feature-style1">
                        <div class="feature-icon"><img src="assets/img/icon/fe-1-3.png" alt="Features"></div>
                        <h3 class="feature-title h5"><a class="text-inherit" href="#"><?= $lang['services3'] ?></a></h3>
                        <p class="feature-text"><?= $lang['servicesc'] ?></p>
                        <a href="#" class="vs-btn style3"><?= $lang['readmore'] ?><i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    </br></br>
    <!--==============================
          About Us
              ==============================-->

    <section class="position-relative space-bottom">
        <span class="about-shape1 d-none d-xl-block">Ulusarp</span>
        <div class="container z-index-common">
            <div class="row gx-60">
                <div class="col-lg-6 col-xl-5 mb-50 mb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="img-box1">
                        <div class="img-1">
                            <img src="images/logowall2.png" alt="About image">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 align-self-center wow fadeInUp" data-wow-delay="0.3s">
                    <span class="sec-subtitle"><i class="fas fa-bring-forward"></i><?= $lang['about2'] ?></span>
                    <h2 class="sec-title h1"><?= $lang['about1'] ?></h2>
                    <p class="mb-4 mt-1 pb-3"><?= $lang['about3'] ?></p>

                    <iframe width="399" height="250px" src="https://www.youtube.com/embed/-tWGoMR62rI" title="Sveaverken Otomatik Dümenleme Kiti" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    <!-- <div class="call-media">
                        <div class="call-media__icon"><img src="assets/img/icon/tel-1-1.png" alt="icon"></div>
                        <div class="media-body">
                            <span class="call-media__label"><?= $lang['detailInfo'] ?></span>
                            <p class="call-media__info"><?= $lang['phone'] ?>: <a href="tel:+90<?= $lang['phoneNumber'] ?>">+90<?= $lang['phoneNumber'] ?></a></p>
                        </div>
                    </div> -->
                    <!-- <a href="about.php" class="vs-btn"><?= $lang['about'] ?><i class="far fa-long-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>
</div>
<!--==============================
    Service Area
    ==============================-->

<section class="z-index-common space" data-bg-src="images/ban.jpg">
    <div class="container">
        <div class="row text-center text-lg-start align-items-center justify-content-between">
            <div class="col-lg-auto">
                <span class="sec-subtitle text-white"><?= $lang['whatCompany'] ?></span>
                <h2 class="h1 sec-title cta-title1"><?= $lang['whatAre'] ?></h2>
            </div>
            <div class="col-lg-auto">
                <a href="about.php" class="vs-btn"><?= $lang['readmore'] ?><i class="far fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>




<section class=" space-top space-extra-bottom" data-bg-src="assets/img/bg/sr-bg-1-1.png">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="title-area">

                    <h2 class="sec-title h1"><?= $lang['services'] ?></h2>
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-6 col-lg-4">
                <div class="service-style1">
                    <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div>
                    <div class="service-icon"><img src="assets/img/icon/1.png" alt="Features"></div>
                    <h3 class="service-title h5"><a href="tractor.php"><?= $lang['tractor'] ?></a></h3>
                    <p class="service-text"><?= $lang['project1'] ?></p>
                    <a href="tractor.php" class="vs-btn style3"><?= $lang['detail'] ?><i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-style1">
                    <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div>
                    <div class="service-icon"><img src="assets/img/icon/2.png" alt="Features"></div>
                    <h3 class="service-title h5"><a href="sveaverken.php"><?= $lang['smartFarming'] ?></a></h3>
                    <p class="service-text"><?= $lang['project2'] ?></p>
                    <a href="sveaverken.php" class="vs-btn style3"><?= $lang['detail'] ?><i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-style1">
                    <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div>
                    <div class="service-icon"><img src="assets/img/icon/3.png" alt="Features"></div>
                    <h3 class="service-title h5"><a href="scratchingcomb.php"><?= $lang['farming'] ?></a></h3>
                    <p class="service-text"><?= $lang['project3'] ?></p>
                    <a href="scratchingcomb.php" class="vs-btn style3"><?= $lang['detail'] ?><i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-style1">
                    <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div>
                    <div class="service-icon"><img src="assets/img/icon/4.png" alt="Features"></div>
                    <h3 class="service-title h5"><a href="industry.php"><?= $lang['endustry'] ?></a></h3>
                    <p class="service-text"><?= $lang['project4'] ?></p>
                    <a href="industry.php" class="vs-btn style3"><?= $lang['detail'] ?><i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
            <!-- <div class="col-md-6 col-lg-4">
                <div class="service-style1">
                    <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div>
                    <div class="service-icon"><img src="assets/img/icon/5.png" alt="Features"></div>
                    <h3 class="service-title h5"><a href="#"><?= $lang['farmDrone'] ?></a></h3>
                    <p class="service-text"><?= $lang['project5'] ?></p>
                    <a href="#" class="vs-btn style3"><?= $lang['detail'] ?><i class="far fa-long-arrow-right"></i></a>
                </div>
            </div> -->
            <!-- <div class="col-md-6 col-lg-4">
                <div class="service-style1">
                    <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div>
                    <div class="service-icon"><img src="assets/img/icon/6.png" alt="Features"></div>
                    <h3 class="service-title h5"><a href="#"><?= $lang['motor'] ?></a></h3>
                    <p class="service-text"><?= $lang['project6'] ?></p>
                    <a href="#" class="vs-btn style3"><?= $lang['detail'] ?><i class="far fa-long-arrow-right"></i></a>
                </div>
            </div> -->

            <div class="col-md-6 col-lg-4">
                <div class="service-style1">
                    <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div>
                    <div class="service-icon"><img src="assets/img/icon/7.png" alt="Features"></div>
                    <h3 class="service-title h5"><a href="animalfood.php"><?= $lang['animalFood'] ?></a></h3>
                    <p class="service-text"><?= $lang['project7'] ?></p>
                    <a href="animalfood.php" class="vs-btn style3"><?= $lang['detail'] ?><i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>






        </div>
    </div>
</section>
<!--==============================
    Counter Area
    ==============================-->

<!--==============================
    Skill Area
    ==============================-->
<section class=" space-top space-extra-bottom" data-bg-src="assets/img/bg/sr-bg-1-1.png">
    <div class="container">

        <div class="row wow fadeInUp" data-wow-delay="0.2s">


            <iframe width="100%" height="438" src="https://www.youtube.com/embed/G0nel0rE1_E" title="Sveaverken, Innovation for Life" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        </div>
    </div>
</section>


<!--==============================
    Blog Area
    ==============================-->
<section class="vs-blog-wrapper  space-top space-extra-bottom" data-bg-src="assets/img/bg/blog-bg-1-1.jpg">
    <div class="container  wow fadeInUp" data-wow-delay="0.2s">
        <div class="row justify-content-center text-center">
            <div class="col-xl-6">
                <div class="title-area">
                    <span class="sec-subtitle">Güncel Paylaşımlar</span>
                    <h2 class="h1">Blog</h2>
                </div>
            </div>
        </div>
        <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">

            <?php


            $blogs = $config->db->prepare("SELECT * from blogs order by id desc LIMIT 3");
            $blogs->execute(array());
            $blogsAll = $blogs->fetchAll(PDO::FETCH_ASSOC);
            foreach ($blogsAll as $row) {
            ?>


                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="images/blog/<?= $row['image'] ?>" alt="<?= $row['title'] ?>" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="#"><i class="far fa-calendar"></i><?= $row['blogDate'] ?></a>
                                    <a href="#"><i class="fal fa-user"></i>Admin</a>
                                </div>
                                <h3 class="blog-title h5"><a href="blog-details.php?id=<?= $row['id'] ?>"><?= $row['title'] ?></a></h3>
                                <a href="blog-details.php?id=<?= $row['id'] ?>" class="link-btn"> <?= $lang['detail'] ?><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


            <?php
            }
            ?>








        </div>
    </div>
</section>


<section class=" space-bottom">
    <div class="container">
        <div class="sec-line-wrap">
            <div class="sec-line"></div>
            <h2 class="sec-title2">Referanslar </h2>
            <div class="sec-line"></div>
        </div>
        <div class="row vs-carousel text-center" data-slide-show="5" data-md-slide-show="3" data-sm-slide-show="2" data-xs-slide-show="2">

            <?php


            $sponsor = $config->db->prepare("SELECT * from sponsor ");
            $sponsor->execute(array());
            $sponsorAll = $sponsor->fetchAll(PDO::FETCH_ASSOC);
            foreach ($sponsorAll as $row) {
            ?>



                <div class="col-auto"><img src="images/sponsor/<?= $row['imageName'] ?>" alt="Sponsor"></div>



            <?php
            }
            ?>

        </div>
    </div>
</section>

<br><br>



<!--==============================
			Footer Area
	==============================-->

<?php include "template/footer.php"; ?>