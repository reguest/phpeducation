<?php include "template/header.php"; ?>


<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="images/anban.jpg">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title"><?= $lang['animalEquipment'] ?></h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.php"><?= $lang['home'] ?></a></li>
                    <li><?= $lang['animalEquipment'] ?> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--==============================
    Blog Card Elements
    ==============================-->

<section class=" space-top space-extra-bottom" data-bg-src="assets/img/bg/project-bg-1-1.jpg">
    <div class="container   wow fadeInUp" data-wow-delay="0.2s">

        <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2">

            <div class="col-xl-6">
                <div class="project-style1">
                    <div class="project-img">
                        <a href="moo.php"><img src="images/moocolar.jpg" alt="image"></a>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title h6"><a class="text-inherit" href="moo.php">MooCollar S2</a></h3>
                        <a href="moo.php" class="vs-btn style3"><?= $lang['detail'] ?><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="project-style1">
                    <div class="project-img">
                        <a href="lamp.php"><img src="images/heatlamp.jpg" alt="image"></a>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title h6"><a class="text-inherit" href="lamp.php">Sveaverken HeatLamp</a></h3>
                        <a href="lamp.php" class="vs-btn style3"><?= $lang['detail'] ?><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>


        </div>
        <div class="text-center">
            <h4 class="fs-md fw-semibold mb-n1 mt-4">Ulusarp - <?= $lang['slogan'] ?></h4>
        </div>
    </div>
</section>





<!--==============================
			Footer Area
	==============================-->
</br></br>

<?php include "template/footer.php"; ?>