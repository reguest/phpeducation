<?php include "template/header.php"; ?>

<!--==============================
    Breadcumb 
============================== -->
<div class="breadcumb-wrapper " data-bg-src="assets/img/carrierban.png">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title"><?= $lang['carrier'] ?></h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.php"><?= $lang['home'] ?></a></li>
                    <li><?= $lang['carrier'] ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--==============================
      Contact Form Area
    ==============================-->
<section class=" space-top space-extra-bottom">
    <div class="container">

        <div class="tab-content" id="nav-contactTabContent">
            <div class="tab-pane fade show active" id="nav-GermanyAddress" role="tabpanel" aria-labelledby="nav-GermanyAddress-tab">
                <div class="row">

                    <div class="col-lg-12 mb-15">
                        <div class="contact-box">
                            <h3 class="contact-box__title h4"><?= $lang['carrier'] ?></h3>
                            <p class="contact-box__text"><?= $lang['workwithusText'] ?></p>
                            <form class="" action="panel/settings/carrier.php" method="POST" enctype="multipart/form-data">
                                <div class="row gx-20">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="ad" placeholder="<?= $lang['name'] ?>">
                                        <i class="fal fa-user"></i>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="email" name="email"  placeholder="<?= $lang['email'] ?>">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="col-12 form-group">
                                    <input type="file" style="padding-top: 8px;" name="cv"  placeholder="<?= $lang['cv'] ?>">
                                        <i class="fal fa-file"></i>
                                    </div>
                                    <!-- <div class="col-md-6 form-group">
                                        <input type="file" name="cv">
                                        <i class="fal fa-file"></i>
                                    </div> -->
                                    <div class="col-12 form-group">
                                        <textarea name="message" id="message" placeholder="<?= $lang['message'] ?>"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="carrier" class="vs-btn"><?= $lang['send'] ?><i class="far fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--==============================
			Footer Area
	==============================-->
<?php include "template/footer.php"; ?>