<?php include "template/header.php"; ?>
<?php
$page = $config->db->prepare("SELECT * from pages where page_name=?");
$page->execute(array("pdpl"));
$pageAll = $page->fetch();

?>

<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="assets/img/carrierban.png">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title"><?= $lang['kvkk'] ?></h1> 
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.php"><?= $lang['home'] ?></a></li>
                    <li><?= $lang['kvkk'] ?></li>
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
                        <div >

                            <p >

                            <?php  if ($_SESSION['lang'] == "tr") {  echo $pageAll["page_text"];   } else { echo $pageAll["page_text_en"];  }  ?>
                            </p>


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