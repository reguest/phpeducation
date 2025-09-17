<?php include "template/header.php"; ?>

    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/contactban.png">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?= $lang['contact'] ?></h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.php"><?= $lang['home'] ?></a></li>
                        <li><?= $lang['contact'] ?></li>
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
                        <div class="col-lg-6 mb-30">
                            <div class="contact-box">
                                <h3 class="contact-box__title h4">Amasya Merzifon</h3>
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
                                <form class="contact-box__form ajax-contact" action="" method="POST">
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
                                            <button class="vs-btn"><?= $lang['send'] ?><i class="far fa-arrow-right"></i></button>
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
			Footer Area
	==============================-->
    <?php include "template/footer.php"; ?>