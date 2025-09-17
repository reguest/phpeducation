<div class="telefon">
    <a href="tel:<?php echo "+90" . $siteInfoAll['phone']; ?>" title="<?= $lang['phone'] ?>" alt="<?= $lang['phone'] ?>"><i class="fa fa-phone"></i></a>
    <span class="tooltiptext"><?php echo $siteInfoAll['phone']; ?></span>
</div>

<div class="whatsapp">
    <a href="https://wa.me/<?php echo "+90" . $siteInfoAll['phone']; ?>?text=" title="<?= $lang['whatsapp'] ?>" alt="<?= $lang['whatsapp'] ?>"><i class="fab fa-whatsapp"></i></a>
    <span class="tooltiptext"><?= $lang['whatsapp'] ?></span>
</div>

<footer class="footer-wrapper footer-layout6" data-bg-src="assets/img/shape/bg-footer-1-2.jpg">
    <div class="footer-top">
        <div class="vs-container2">
            <div class="row g-5">
                <div class="col-sm footer-info_group">
                    <div class="footer-info">
                        <div class="footer-info_icon"><i class="fal fa-map-marker-alt"></i></div>
                        <div class="media-body">
                            <span class="footer-info_label"><?= $lang['address'] ?></span>
                            <div class="footer-info_link"><?= $lang['myAddress'] ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm footer-info_group">
                    <div class="footer-info">
                        <div class="footer-info_icon"><i class="fal fa-clock"></i></div>
                        <div class="media-body">
                            <span class="footer-info_label"><?= $lang['openhours'] ?></span>
                            <div class="footer-info_link"><?= $lang['Mon'] ?> - <?= $lang['Fri'] ?> 8:00 - 18:00 <br> <?= $lang['Sat'] ?> - <?= $lang['Sun'] ?> 10:00 - 17:00</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm footer-info_group">
                    <div class="footer-info">
                        <div class="footer-info_icon"><i class="fal fa-phone-volume"></i></div>
                        <div class="media-body">
                            <span class="footer-info_label"><?= $lang['contact'] ?></span>
                            <div class="footer-info_link"><a href="mailto:<?= $lang['emailadress'] ?>"><?= $lang['emailadress'] ?> </a><br><a href="tel:+2597462153">0<?= $lang['phoneNumber'] ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-md-6 col-lg-4 col-xl-auto">
                    <div class="copyright-logo">
                        <a href="index.php"><img width="200px" src="images/<?= $siteInfoAll['logo_footer'] ?>" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-auto text-center">
                    <nav class="footer-menu">
                        <ul>
                            <li class="menu-item">
                                <a href="index.php"><?= $lang['home'] ?> </a>
                            </li>
                            <li class="menu-item">
                                <a href="about.php"><?= $lang['about'] ?> </a>
                            </li>
                            <li class="menu-item">
                                <a href="service.php"><?= $lang['services'] ?> </a>
                            </li>
                            <li class="menu-item">
                                <a href="blog"><?= $lang['blog'] ?> </a>
                            </li>
                            <li class="menu-item">
                                <a href="dealer.php"><?= $lang['dealer'] ?> </a>
                            </li>
                            <li class="menu-item">
                                <a href="support.php"><?= $lang['support'] ?> </a>
                            </li>
                            <li class="menu-item">
                                <a href="carrier.php"><?= $lang['carrier'] ?> </a>
                            </li>
                            <li class="menu-item">
                                <a href="contact.php"><?= $lang['contact'] ?> </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright-wrap">
            <div class="d-flex align-items-center justify-content-between">
                <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> <?= Date('Y') ?> <a class="text-white" href="index.php">Ulusarp</a>. <?= $lang['copyright'] ?> <a class="text-white" href=""></a>.</p>
                <div class="footer-social">
                    <a href="<?= $siteInfoAll['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?= $siteInfoAll['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                    <a href="<?= $siteInfoAll['instagram'] ?>"><i class="fab fa-instagram"></i></a>

                    <a href="<?= $siteInfoAll['youtube'] ?>"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Scroll To Top -->
<a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>



<!--********************************
			Code End  Here 
	******************************** -->

  
<!--==============================
        All Js File
    ============================== -->
<!-- Jquery -->
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<!-- Slick Slider -->
<!-- <script src="assets/js/app.min.js"></script> -->
<script src="assets/js/slick.min.js"></script>
<!-- Layerslider -->
<script src="assets/js/layerslider.utils.js"></script>
<script src="assets/js/layerslider.transitions.js"></script>
<script src="assets/js/layerslider.kreaturamedia.jquery.js"></script>
<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- WOW.js Animation -->
<script src="assets/js/wow.min.js"></script>
<!-- Magnific Popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Isotope Filter -->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<!-- Main Js File -->
<script src="assets/js/main.js"></script>



</body>

</html>