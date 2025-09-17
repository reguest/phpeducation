<?php include "template/header.php"; ?>
<?php
$page = $config->db->prepare("SELECT * from pages where page_name=?");
$page->execute(array("about"));
$pageAll = $page->fetch();

?>
<!-- ==============================
    Breadcumb 
============================== -->
<div class="breadcumb-wrapper " data-bg-src="assets/img/aboutban.png">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title"><?= $lang['about'] ?></h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.php"><?= $lang['home'] ?></a></li>
                    <li><?= $lang['about'] ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--==============================
    Service Area
    ==============================-->

<!--==============================
    About Us
    ==============================-->
<section data-bg-src="assets/img/bg/about-bg-5-1.jpg">
    <div class="container container-style1">
        <div class="row flex-row-reverse align-items-center gx-70">
            <div class="col-lg-6 col-xl">
                <img src="assets/img/logowall.png" alt="about image">
            </div>
            <div class="col-lg-6 col-xl-auto  wow fadeInUp" data-wow-delay="0.2s">
                <div class="about-box2">
                    <span class="sec-subtitle"><i class="fas fa-bring-forward"></i><?= $lang['slogan'] ?></span>
                    <h2 class="sec-title3 h1">Ulusarp</h2>
                    <p> 
                    <?php
                                if ($_SESSION['lang'] == "tr") {  echo $pageAll["page_text"];   } else { echo $pageAll["page_text_en"];  }  ?>
                </p>
                    <div class="row gx-0 align-items-center flex-row-reverse justify-content-end mt-sm-3 pt-sm-3 mb-30 pb-10">

                        <div class="col-sm-auto">
                            <div class="about-call">
                                <div class="about-call__icon"><i class="fas fa-phone-alt"></i></div>
                                <div class="media-body">
                                    <span class="about-call__label"><?= $lang['contact'] ?></span>
                                    <p class="about-call__number"><a href="tel:+90<?= $lang['phoneNumber'] ?>"><?= $lang['phoneNumber'] ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
    Team Area
    ==============================-->


<!--==============================
			Footer Area
	==============================-->
<?php include "template/footer.php"; ?>