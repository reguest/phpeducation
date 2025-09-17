<?php include "template/header.php"; ?>


<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="images/cors2.png">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title"><?= $lang['corsStation'] ?></h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.php"><?= $lang['home'] ?></a></li>
                    <li><?= $lang['corsStation'] ?></li>
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

                    <h2 class="sec-title h1"><?= $lang['corsStation'] ?></h2>
                </div>
            </div>
        </div>

        <div class="row flex-row-reverse">
            <div class="col-lg-12">


                <p>

                <?= $lang['corstext2'] ?>

               
                </p>
                <div class="row gx-0 mb-4 pb-2 pt-3   wow fadeInUp" data-wow-delay="0.2s">
                    <div class="col-xl-6"><img src="images/corsh.jpeg" alt="project image" class="w-100"></div>
                    <div class="col-xl-6">
                        <div class="service-list-box">
                            <h3 class="h5 title"><?= $lang['feature'] ?>  </h3>
                            <div class="list-style3">
                                <ul>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f59'] ?></li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f60'] ?></li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f61'] ?></li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f62'] ?></li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f63'] ?></li>
                                    <li><i class="fal fa-check-circle"></i><?= $lang['f64'] ?></li>
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
                <iframe width="100%" height="400" src="images/cors.mp4" title="F100 Feature Highlights |  How to Improve Tractor&#39;s Efficiency in the Field" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>







<!--==============================
			Footer Area
	==============================-->
</br></br>

<?php include "template/footer.php"; ?>