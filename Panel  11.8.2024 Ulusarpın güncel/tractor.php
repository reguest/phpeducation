<?php include "template/header.php"; ?>
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="images/tractor/banhat.jpg">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title"><?= $lang['tractor'] ?></h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.php"><?= $lang['home'] ?></a></li>
                    <li><?= $lang['tractor'] ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--==============================
    Service Area
    ==============================-->
<!-- <section class=" space-top space-extra-bottom">
    <div class="container   wow fadeInUp" data-wow-delay="0.2s">
        <div class="row">

            <div class="col-md-6 col-lg-4">
                <div class="service-style1 layout2">
                    <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div>
                    <div class="service-icon"><img src="assets/img/icon/sr-icon-1-1.png" alt="Features"></div>
                    <h3 class="service-title h5"><a href="hattat.php"><?= $lang['tractor'] ?></a></h3>
                    <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products with business models</p>
                    <a href="hattat.php" class="vs-btn style3">Read More<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-style1 layout2">
                    <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div>
                    <div class="service-icon"><img src="assets/img/icon/sr-icon-1-2.png" alt="Features"></div>
                    <h3 class="service-title h5"><a href="service-details.html"><?= $lang['servicepoint'] ?></a></h3>
                    <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products with business models</p>
                    <a href="service-details.html" class="vs-btn style3">Read More<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-style1 layout2">
                    <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div>
                    <div class="service-icon"><img src="assets/img/icon/sr-icon-1-3.png" alt="Features"></div>
                    <h3 class="service-title h5"><a href="service-details.html"><?= $lang['support'] ?></a></h3>
                    <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products with business models</p>
                    <a href="service-details.html" class="vs-btn style3">Read More<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>


        </div>
    </div>
</section> -->


<br><br>

<section class="space-bottom team-layout4">

    <div class="container wow fadeInUp" data-wow-delay="0.2s">
        <div class="row justify-content-center text-center">
            <div class="col-xl-6">
                <div class="title-area">
                  
                    <h2 class="sec-title h1"><?= $lang['servicepoint'] ?></h2>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-xl-auto">
                <div class="team-style4 active" data-tab-target="#one">
                    <div class="team-img">
                        <a href="#"><img src="images/tractor/a1.png" alt="image"></a>
                    </div>
                    <div class="team-content">
                        <h3 class="team-title">Amasya</h3>
                        <p class="team-degi">Merkez</p>
                    </div>
                </div>
                <div class="team-style4" data-tab-target="#two">
                    <div class="team-img">
                        <a href="#"><img src="images/tractor/a1c.png" alt="image"></a>
                    </div>
                    <div class="team-content">
                        <h3 class="team-title">Çorum</h3>
                        <p class="team-degi">Alaca</p>
                    </div>
                </div>
                <div class="team-style4" data-tab-target="#three">
                    <div class="team-img">
                        <a href="team-details.html"><img src="images/tractor/a3.png" alt="image"></a>
                    </div>
                    <div class="team-content">
                        <h3 class="team-title">Merzifon</h3>
                        <p class="team-degi">Merkez</p>
                    </div>
                </div>

            </div>
            <div class="col">
                <div id="one" class="team-box active" data-tab-content>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="team-img">
                                <img src="images/tractor/amasya.jpg" alt="team">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="team-body">
                                <div class="team-content">
                                    <h3 class="team-title"><a class="text-inherit" href="#">Amasya</a></h3>

                                    <p class="team-text">
                                    <?= $lang['address'] ?>: Merzifon
                                    </p>
                                </div>
                                <div class="team-contact">
                                    <div class="contact-social">
                                        <span class="title"><?= $lang['socialmedia'] ?>:</span>
                                        <div class="team-social">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                        </div>
                                    </div>
                                    <div class="contact-email">
                                        <span class="title"><?= $lang['phone'] ?>:</span>
                                        <p class="info"><i class="fal fa-phone"></i><a href="tel:+905554443322"> 0 555 444 33 22</a></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="two" class="team-box" data-tab-content>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="team-img">
                                <img src="images/tractor/slovenya.jpg" alt="team">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="team-body">
                                <div class="team-content">
                                    <h3 class="team-title"><a class="text-inherit" href="#">Çorum
                                        </a></h3>

                                    <p class="team-text">
                                    Adres: Çorum Alaca
                                    </p>
                                </div>
                                <div class="team-contact">
                                    <div class="contact-social">
                                        <span class="title">Sosyal Medya:</span>
                                        <div class="team-social">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                        </div>
                                    </div>
                                    <div class="contact-email">
                                        <span class="title">Telefon:</span>
                                        <p class="info"><i class="fal fa-phone"></i><a href="tel:+905554443322"> 0 555 444 33 22</a></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="three" class="team-box" data-tab-content>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="team-img">
                                <img src="images/tractor/merzifon.jpg" alt="team">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="team-body">
                                <div class="team-content">
                                    <h3 class="team-title"><a class="text-inherit" href="#">Merzifon</a></h3>

                                    <p class="team-text">
                                    Adres: Merzifon
                                    </p>
                                </div>
                                <div class="team-contact">
                                    <div class="contact-social">
                                        <span class="title">Sosyal Medya:</span>
                                        <div class="team-social">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                        </div>
                                    </div>
                                    <div class="contact-email">
                                        <span class="title">Telefon:</span>
                                        <p class="info"><i class="fal fa-phone"></i><a href="tel:+905554443322"> 0 555 444 33 22</a></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            
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
            <div class="col-lg-8 col-xl text-center text-xl-start">
                <div class="title-area wow fadeInUp" data-wow-delay="0.2s">
                    <span class="sec-subtitle2 pb-xl-2"><i class="fal fa-arrow-right"></i> <?= $lang['tractormodel'] ?></span>
                    <h2 class="sec-title4 h1 mb-4 pb-xl-3">Hattat <?= $lang['tractormodel'] ?></h2>
                    <p class=" mb-4 pb-2"><?= $lang['tractormodel1'] ?></p>
                    <a href="#" class="vs-btn style7">Broşür<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-xl-auto">
                <div class="row vs-carousel blog-style4-slider gx-30 wow fadeInUp" data-wow-delay="0.3s" data-slide-show="2" data-lg-slide-show="3" data-md-slide-show="2">


                    <div class="col-md-6 col-lg-4 ">
                        <div class="vs-blog blog-style4">
                            <div class="blog-img">
                                <a href="https://www.hattattraktor.com/traktorler"><img src="images/tractor/1.jpg" alt="Hattat" class="w-100"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="#"><i class="far fa-folder"></i><?= $lang['field'] ?></a>
                                    <a href="#"><i class="fal fa-user"></i>FPT - Stage 5</a>
                                </div>
                                <h3 class="blog-title h5"><a href="https://www.hattattraktor.com/traktorler">Hattat T4000 - Stage 5</a></h3>
                                <a href="https://www.hattattraktor.com/traktorler" class="link-btn"><?= $lang['detail'] ?><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 ">
                        <div class="vs-blog blog-style4">
                            <div class="blog-img">
                                <a href="https://www.hattattraktor.com/traktorler"><img src="images/tractor/2.jpg" alt="Hattat" class="w-100"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="#"><i class="far fa-folder"></i><?= $lang['field'] ?></a>
                                    <a href="#"><i class="fal fa-user"></i>FPT - Stage 5</a>
                                </div>
                                <h3 class="blog-title h5"><a href="https://www.hattattraktor.com/traktorler">Hattat C3000 - Stage 5</a></h3>
                                <a href="https://www.hattattraktor.com/traktorler" class="link-btn"><?= $lang['detail'] ?><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 ">
                        <div class="vs-blog blog-style4">
                            <div class="blog-img">
                                <a href="https://www.hattattraktor.com/traktorler"><img src="images/tractor/3.jpg" alt="Hattat" class="w-100"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="#"><i class="far fa-folder"></i><?= $lang['Garden'] ?></a>
                                    <a href="#"><i class="fal fa-user"></i>FPT - Stage 5</a>
                                </div>
                                <h3 class="blog-title h5"><a href="https://www.hattattraktor.com/traktorler">Hattat B3000 - Stage 5</a></h3>
                                <a href="https://www.hattattraktor.com/traktorler" class="link-btn"><?= $lang['detail'] ?><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 ">
                        <div class="vs-blog blog-style4">
                            <div class="blog-img">
                                <a href="https://www.hattattraktor.com/traktorler"><img src="images/tractor/4.jpg" alt="Hattat" class="w-100"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="#"><i class="far fa-folder"></i><?= $lang['Garden'] ?> / <?= $lang['field'] ?></a>
                                    <a href="#"><i class="fal fa-user"></i>FPT - Stage 5</a>
                                </div>
                                <h3 class="blog-title h5"><a href="https://www.hattattraktor.com/traktorler">260 G / 280 G - Stage 5</a></h3>
                                <a href="https://www.hattattraktor.com/traktorler" class="link-btn"><?= $lang['detail'] ?><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 ">
                        <div class="vs-blog blog-style4">
                            <div class="blog-img">
                                <a href="https://www.hattattraktor.com/traktorler"><img src="images/tractor/5.jpg" alt="Hattat" class="w-100"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="#"><i class="far fa-folder"></i><?= $lang['field'] ?></a>
                                    <a href="#"><i class="fal fa-user"></i>FPT - Stage 5</a>
                                </div>
                                <h3 class="blog-title h5"><a href="https://www.hattattraktor.com/traktorler">240 G / 255 G - Stage 5</a></h3>
                                <a href="https://www.hattattraktor.com/traktorler" class="link-btn"><?= $lang['detail'] ?><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 ">
                        <div class="vs-blog blog-style4">
                            <div class="blog-img">
                                <a href="https://www.hattattraktor.com/traktorler"><img src="images/tractor/6.jpg" alt="Hattat" class="w-100"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="#"><i class="far fa-folder"></i>50 - 60 Hp <?= $lang['Garden'] ?> / <?= $lang['field'] ?></a>
                                    <a href="#"><i class="fal fa-user"></i>Perkins Stage 3A</a>
                                </div>
                                <h3 class="blog-title h5"><a href="https://www.hattattraktor.com/traktorler">240 G / 255 G</a></h3>
                                <a href="https://www.hattattraktor.com/traktorler" class="link-btn"><?= $lang['detail'] ?><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 ">
                        <div class="vs-blog blog-style4">
                            <div class="blog-img">
                                <a href="https://www.hattattraktor.com/traktorler"><img src="images/tractor/7.jpg" alt="Hattat" class="w-100"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="#"><i class="far fa-folder"></i>92 - 110 Hp <?= $lang['field'] ?></a>
                                    <a href="#"><i class="fal fa-user"></i>Perkins Stage 3A</a>
                                </div>
                                <h3 class="blog-title h5"><a href="https://www.hattattraktor.com/traktorler">295 / 398</a></h3>
                                <a href="https://www.hattattraktor.com/traktorler" class="link-btn"><?= $lang['detail'] ?><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 ">
                        <div class="vs-blog blog-style4">
                            <div class="blog-img">
                                <a href="https://www.hattattraktor.com/traktorler"><img src="images/tractor/8.jpg" alt="Hattat" class="w-100"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="#"><i class="far fa-folder"></i>60 - 76 Hp <?= $lang['Garden'] ?> </a>
                                    <a href="#"><i class="fal fa-user"></i>Perkins Stage 3A</a>
                                </div>
                                <h3 class="blog-title h5"><a href="https://www.hattattraktor.com/traktorler">Hattat B3000</a></h3>
                                <a href="https://www.hattattraktor.com/traktorler" class="link-btn"><?= $lang['detail'] ?><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 ">
                        <div class="vs-blog blog-style4">
                            <div class="blog-img">
                                <a href="https://www.hattattraktor.com/traktorler"><img src="images/tractor/9.jpg" alt="Hattat" class="w-100"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="#"><i class="far fa-folder"></i>68 - 82 Hp <?= $lang['field'] ?></a>
                                    <a href="#"><i class="fal fa-user"></i>Perkins Stage 3A</a>
                                </div>
                                <h3 class="blog-title h5"><a href="https://www.hattattraktor.com/traktorler">266 G / 275 S / 285 S</a></h3>
                                <a href="https://www.hattattraktor.com/traktorler" class="link-btn"><?= $lang['detail'] ?><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 ">
                        <div class="vs-blog blog-style4">
                            <div class="blog-img">
                                <a href="https://www.hattattraktor.com/traktorler"><img src="images/tractor/10.jpg" alt="Hattat" class="w-100"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="#"><i class="far fa-folder"></i>68 - 76 Hp <?= $lang['field'] ?> / Bahçe</a>
                                    <a href="#"><i class="fal fa-user"></i>Perkins Stage 3A</a>
                                </div>
                                <h3 class="blog-title h5"><a href="https://www.hattattraktor.com/traktorler">260 G / 280 G</a></h3>
                                <a href="https://www.hattattraktor.com/traktorler" class="link-btn"><?= $lang['detail'] ?><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>


<section class=" space-top space-extra-bottom">
    <div class="container">

        <div class="tab-content" id="nav-contactTabContent">
            <div class="tab-pane fade show active" id="nav-GermanyAddress" role="tabpanel" aria-labelledby="nav-GermanyAddress-tab">
                <div class="row">
                    <div class="col-lg-6 mb-30">
                        <div class="contact-box">
                            <h3 class="contact-box__title h4"><?= $lang['support'] ?></h3>
                            <p class="contact-box__text"><?= $lang['contactinfo'] ?></p>
                            <div class="contact-box__item">
                                <div class="contact-box__icon"><i class="fal fa-phone-alt"></i></div>
                                <div class="media-body">
                                    <h4 class="contact-box__label"><?= $lang['phone'] ?> & <?= $lang['email'] ?></h4>
                                    <p class="contact-box__info"><a href="tel:+90<?= $lang['phoneNumber'] ?>">0<?= $lang['phoneNumber'] ?></a> <br> <a href="mailto:<?= $lang['emailadress'] ?>"> <?= $lang['emailadress'] ?></a></p>
                                </div>
                            </div>
                            <div class="contact-box__item">
                                <div class="contact-box__icon"><i class="far fa-map-marker-alt"></i></div>
                                <div class="media-body">
                                    <h4 class="contact-box__label"><?= $lang['officeAdress'] ?></h4>
                                    <p class="contact-box__info"><?= $siteInfoAll['adress'] ?></p>
                                </div>
                            </div>
                            <div class="contact-box__item">
                                <div class="contact-box__icon"><i class="far fa-clock"></i></div>
                                <div class="media-body">
                                    <h4 class="contact-box__label"><?= $lang['openhours'] ?></h4>
                                    <p class="contact-box__info"><?= $lang['clock'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-30">
                        <div class="contact-box">
                            <h3 class="contact-box__title h4"><?= $lang['mailus'] ?></h3>
                            <p class="contact-box__text"><?= $lang['filltheform'] ?></p>
                            <form class="" action="panel/settings/contact.php" method="POST">
                                <div class="row gx-20">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" id="name" placeholder="<?= $lang['name'] ?>">
                                        <i class="fal fa-user"></i>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="email" name="email" id="email" placeholder="<?= $lang['email'] ?>">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="col-12 form-group">
                                        <select name="subject" id="subject">
                                            <option selected disabled hidden><?= $lang['subject'] ?></option>
                                            <option value="<?= $lang['subject1'] ?>"><?= $lang['subject1'] ?></option>
                                            <option value="<?= $lang['subject2'] ?>"><?= $lang['subject2'] ?></option>
                                            <option value="<?= $lang['subject3'] ?>"><?= $lang['subject3'] ?></option>

                                        </select>
                                    </div>
                                    <div class="col-12 form-group">
                                        <textarea name="message" id="message" placeholder="<?= $lang['message'] ?>"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button name="tractor" class="vs-btn"><?= $lang['send'] ?><i class="far fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messages mb-0 mt-3"></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--==============================
    CTA Area
    ==============================-->
<hr>
<br>


<?php include "template/footer.php"; ?>