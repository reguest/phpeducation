<?php include "template/header.php"; ?>


<!--==============================
    Breadcumb 
============================== -->
<div class="breadcumb-wrapper " data-bg-src="images/yem.png">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title"> <?= $lang['bait'] ?></h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.php"><?= $lang['home'] ?></a></li>
                    <li>  <?= $lang['bait'] ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--==============================
    Blog Card Elements
    ==============================-->
<section class="space-top space-extra-bottom">
    <div class="container">

        <div class="row justify-content-center text-center">
            <div class="col-xl-6">
                <div class="title-area">

                    <h2 class="sec-title h1"> <?= $lang['bait'] ?></h2>
                </div>
            </div>
        </div>

        <div class="row flex-row-reverse">  
            <div class="col-lg-12">
                <p>
                <?= $lang['baittext'] ?>
               
                </p> 


                <div class="row gx-0 mb-4 pb-2 pt-3   wow fadeInUp" data-wow-delay="0.2s">
                    <div class="col-xl-6"><img src="images/yem1.jpg" alt="project image" class="w-100"></div>
                    <div class="col-xl-6">
                        <div class="service-list-box">
                            <h3 class="h5 title"><?= $lang['feature'] ?> </h3>
                            <div class="list-style3">
                                <ul>
                                <li><i class="fal fa-check-circle"></i><?= $lang['f47'] ?></li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f48'] ?></li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f49'] ?></li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f50'] ?></li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f51'] ?></li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f52'] ?></li>
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






<!--==============================
			Footer Area
	==============================-->
</br></br>

<?php include "template/footer.php"; ?>