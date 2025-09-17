<?php include "template/header.php"; ?>


<!--==============================
    Breadcumb 
============================== -->
<div class="breadcumb-wrapper " data-bg-src="images/yem3.jpg">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title"> <?= $lang['feedAdditives'] ?> </h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.php"><?= $lang['home'] ?></a></li>
                    <li><?= $lang['feedAdditives'] ?> </li>
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

                    <h2 class="sec-title h1"><?= $lang['feedAdditives'] ?></h2>
                </div>
            </div>
        </div>

        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <p>

                <?= $lang['feedtext'] ?> 
                </p>


                <div class="row gx-0 mb-4 pb-2 pt-3   wow fadeInUp" data-wow-delay="0.2s">
                    <div class="col-xl-6"><img src="images/yemkatki.jpg" alt="project image" class="w-100"></div>
                    <div class="col-xl-6">
                        <div class="service-list-box">
                            <h3 class="h5 title"><?= $lang['shop'] ?>  </h3>
                            <div class="list-style3">
                                <ul>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f53'] ?></li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f54'] ?> </li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f55'] ?> </li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f56'] ?> </li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f57'] ?> </li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f58'] ?></li>
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







<!--==============================
			Footer Area
	==============================-->
</br></br>

<?php include "template/footer.php"; ?>