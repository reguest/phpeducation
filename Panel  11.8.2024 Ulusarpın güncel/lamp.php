<?php include "template/header.php"; ?>


<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="images/lampban.jpg">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Sveaverken HeatLamp</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.php"><?= $lang['home'] ?></a></li>
                    <li>Sveaverken <?= $lang['heathlamp'] ?> <?= $lang['feature'] ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--==============================
    Blog Card Elements
    ==============================-->
<section class=" space-top space-extra-bottom">
    <div class="container">

        <div class="row justify-content-center text-center">
            <div class="col-xl-6">
                <div class="title-area">

                    <h2 class="sec-title h1">Sveaverken <?= $lang['heathlamp'] ?></h2>
                </div>
            </div>
        </div>

        <div class="row flex-row-reverse">
            <div class="col-lg-12">

                <h3><?= $lang['heattext'] ?></h3>
                <p><?= $lang['heattext2'] ?>
                </p>
                <div class="row gx-0 mb-4 pb-2 pt-3   wow fadeInUp" data-wow-delay="0.2s">
                    <div class="col-xl-6"><img src="images/cow.jpg" alt="project image" class="w-100"></div>
                    <div class="col-xl-6">
                        <div class="service-list-box">
                            <h3 class="h5 title"><?= $lang['feature'] ?> </h3>
                            <div class="list-style3">
                                <ul>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f24'] ?></li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f25'] ?></li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f26'] ?></li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f27'] ?></li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f28'] ?></li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f29'] ?></li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f30'] ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Area -->

            </div>

        </div>
    </div>
</section>


<hr class="m-0" />
<!--==============================
    Blog Area
    ==============================-->
<section class="vs-blog-wrapper space-top space-extra-bottom" data-bg-src="assets/img/bg/blog-bg-6-1.png">
    <div class="container">
        <div class="row gx-60 justify-content-center">


            <div class="col-lg-12 col-xl text-center text-xl-start">


                <img src="images/heatla.jpg" width="250px" alt="project image" class="w-100">
            </div>
        </div>




    </div>
    </div>
</section>


<!--==============================
			Footer Area
	==============================-->
</br></br>

<?php include "template/footer.php"; ?>