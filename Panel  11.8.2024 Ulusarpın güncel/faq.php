<?php include "template/header.php"; ?>


<!--======= =======================
    Breadcumb 
============================== -->

<div class="breadcumb-wrapper " data-bg-src="images/banfaq.png">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title"><?= $lang['sss'] ?></h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.php"><?= $lang['home'] ?></a></li>
                    <li><?= $lang['sss'] ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--==============================
    Service Area
    ==============================-->

<section class=" space-top space-extra-bottom">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
               
                
                <!-- FAQ Area -->
                <div class="accordion accordion-style1 layout2   wow fadeInUp" data-wow-delay="0.2s" id="faqVersion1">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <?= $lang['sss1'] ?>
                            </button>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqVersion1">
                            <div class="accordion-body">
                                <p><?= $lang['sssa'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <?= $lang['sss2'] ?>
                            </button>
                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqVersion1">
                            <div class="accordion-body">
                                <p> <?= $lang['sssb'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <?= $lang['sss3'] ?>
                            </button>
                        </div>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqVersion1">
                            <div class="accordion-body">
                                <p> <?= $lang['sssc'] ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header" id="headingfour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <?= $lang['sss4'] ?>
                            </button>
                        </div>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#faqVersion1">
                            <div class="accordion-body">
                                <p> <?= $lang['sssd'] ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <?= $lang['sss5'] ?>
                            </button>
                        </div>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqVersion1">
                            <div class="accordion-body">
                                <p><?= $lang['ssse'] ?></p>
                            </div>
                        </div>
                    </div>


                </div>




            </div>
        </div>
    </div>
</section>
<br><br>
<!--==============================
			Footer Area
	==============================-->


<?php include "template/footer.php"; ?>