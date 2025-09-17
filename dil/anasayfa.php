<?php include "admin/config.php"; ?>
 <?php

 function getClientIP()
 {
     $ipaddress = 'UNKNOWN';
     $keys=array('HTTP_CLIENT_IP','HTTP_X_FORWARDED_FOR','HTTP_X_FORWARDED','HTTP_FORWARDED_FOR','HTTP_FORWARDED','REMOTE_ADDR');
     foreach($keys as $k)
     {
         if (isset($_SERVER[$k]) && !empty($_SERVER[$k]) && filter_var($_SERVER[$k], FILTER_VALIDATE_IP))
         {
             $ipaddress = $_SERVER[$k];
             break;
         }
     }
     return $ipaddress;
 }

 $ip_adresi = getClientIP();
 $ziyaret =$baglanti->db->prepare("INSERT INTO ziyaretciler (ip_adresi) VALUES (?)");
 $ekle=$ziyaret->execute(array($ip_adresi));

  ?>

<!DOCTYPE html>
<html class="no-js" lang="tr">
<head>
	<title>Robin Tekstil</title>
	<meta charset="utf-8">

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>


</head>

<body>
<!--
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	 search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="">
				<div class="form-group bottommargin_0">
          <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input"> </div>
          <button type="submit" class="theme_button color1 no_bg_button"><?php echo $dil["d25"]; ?></button>
			</form>
		</div>
	</div>
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">

		</div>
	</div>
	<!-- eof .modal -->
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			<!-- template sections -->
			<?php include "template/header.php"; ?>
			<section class="intro_section page_mainslider cs all-scr-cover">
				<div class="flexslider" data-dots="false" data-nav="true">
					<ul class="slides">
						<li>
							<div class="slide-image-wrap"> <img src="images/slide01.jpg" alt="" /> </div>
							<div class="container">
								<div class="row">
									<div class="col-xs-12">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer to_animate" data-animation="fadeInUp">
													<p> <span class="light_bg_color small-text"><?php echo $dil["d26"]; ?></span> </p>
												</div>
												<div class="intro-layer to_animate" data-animation="fadeInUp">
													<p> <span class="hero-text"><?php echo $dil["d27"]; ?> <br> <i><?php echo $dil["d28"]; ?></i></span> </p>
												</div>
												<div class="intro-layer to_animate" data-animation="fadeInUp">
													<p> <span class="small-text big-spacing"> </span> </p>
												</div>
												<div class="intro-layer to_animate" data-animation="fadeInUp">
													<div class="slide_buttons"> <a href="#" class="theme_button min_width_button"><?php echo $dil["d29"]; ?> </a> </div>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
						<li>
							<div class="slide-image-wrap"> <img src="images/slide02.jpg" alt="" /> </div>
							<div class="container">
								<div class="row">
									<div class="col-xs-12">
										<div class="slide_description_wrapper">
											<div class="slide_description">

												<div class="intro-layer to_animate" data-animation="fadeInUp">
													<p> <span class="hero-text"><i></i></span> </p>
												</div>
												<div class="intro-layer to_animate" data-animation="fadeInUp">
													<p> <span class="small-text big-spacing"> </span> </p>
												</div>

											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
						<li>
							<div class="slide-image-wrap"> <img src="images/slide03.jpg" alt="" /> </div>
							<div class="container">
								<div class="row">
									<div class="col-xs-12">
										<div class="slide_description_wrapper">
											<div class="slide_description">

												<div class="intro-layer to_animate" data-animation="fadeInUp">
													<p> <span class="hero-text"><i></i></span> </p>
												</div>


											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
					</ul>
				</div>
				<!-- eof flexslider -->
			</section>
			<section id="about" class="ls section_padding_top_150 section_padding_bottom_150">
				<div class="container">
					<div class="row flex-wrap v-center">
						<div class="col-md-6"> <img src="images/about.png" alt="" class="about-cover"> </div>
						<div class="col-md-6">
							<h2 class="section_header"><?php echo $dil["d30"]; ?></h2>
							<p class="small-text grey"><?php echo $dil["d31"]; ?></p>
							<p><?php echo $dil["d32"]; ?></p>
							<div class="toppadding_40 visible-lg"></div>
							<div class="content-justify v-center v-spacing"> <img src="images/stamps.png" alt=""> <img src="images/signature.png" alt=""> </div>
						</div>
					</div>
				</div>
			</section>


			<section id="products" class="ls fluid_padding_0 columns_padding_0">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h2 class="section_header"><?php echo $dil["d33"]; ?></h2>

							<div class="owl-carousel products-carousel gallery-carousel" data-nav="true" data-dots="false" data-responsive-xlg="5" data-responsive-sm="3" data-responsive-xs="2" data-responsive-xxs="1" data-filters=".carousel_filters"
								data-margin="30">

                    <?php
                    $stmt=$baglanti->db->prepare('SELECT * FROM urun');
                    $stmt->execute();
                    if($stmt->rowCount()>0)
                    {
                      while($urun=$stmt->fetch(PDO::FETCH_ASSOC))
                      {
                        extract($urun);

                        $veri=$baglanti->db->prepare("SELECT * FROM picture where picture_kategori=?");
                        $veri-> execute(array($urun['urun_image']));
                        $islem=$veri->fetch();
                        ?>


								<article class="product vertical-item text-center with-corner-label <?=$urun['urun_yas']?>">
									<div class="item-media-wrap bottommargin_25">
										<div class="item-media"> <a href="shop-product.php?id=<?=$urun['urun_id']?>">
												<img src="images\urunler\<?=$islem['picture_name'] ?>" alt="" />

											</a>

										</div>

									</div>
									<div class="item-content">
										<h3 class="entry-title"> <a href="shop-product.php?id=<?=$urun['urun_id']?>">
                      <?php if ($_SESSION['dil']=="tr"){echo $urun['urun_adi'];}
                            if ($_SESSION['dil']=="en"){echo $urun['urun_en'];}
                            if ($_SESSION['dil']=="ar"){echo $urun['urun_ar'];}
                            if ($_SESSION['dil']=="ru"){echo $urun['urun_ru'];}
                            ?>
                          </a></h3>

									</div>
								</article>
                <?php
              }
            }
                 ?>



							</div>
						</div>
					</div>
				</div>
			</section>


			<section id="contact-form" class="ls section_padding_top_150 section_padding_bottom_150">
				<div class="container">
					<div class="row flex-wrap v-center">
						<div class="col-xs-12 col-md-5 col-md-push-6"> <img src="images/tailoring.jpg" alt="" class="contact-form-cover"> </div>
						<div class="col-xs-12 col-md-7 col-md-pull-5">
							<h2 class="section_header"><?php echo $dil["d34"]; ?></h2>
							<p class="small-text grey"><?php echo $dil["d35"]; ?></p>
							<div class="toppadding_5"></div>
							<form class="contact-form row columns_padding_10" method="POST" >
                <?php

              if (isset($_POST['mail'])) {
                  // gonder var ise

                  $mail_baslik= strip_tags($_POST['mail_baslik']);
                  $email = strip_tags($_POST['email']);
                  $phone = strip_tags($_POST['phone']);
                  $mail_mesajı= strip_tags($_POST['mail_mesajı']);
                  include 'mail/class.phpmailer.php';
                  if ($mail_baslik!=""  and $mail_mesajı!="") {
                    //inputlar boş değifelse

                    //----------- MAİL BAŞLANGICI-----------
                    $mail= new PHPMailer();
                    $mail->Host = 'smtp.google.com';
                    $mail->Port=587;
                    $mail->SMTPSecure= 'tls';
                    $mail->SMTPAuth = true;
                    $mail->Username='info2@robintekstil.com';
                    $mail->Password='rob789tekstil';
                    $mail->IsSMTP();

                    $mail->From ="info2@robintekstil.com";
                    $mail->FromName='lkrwgm';
                    $mail->CharSet="UTF-8";
                    $mail->Subject=$email.$phone;
                    //----------- MAİL BAŞLANGICI-----------

                   $mail->AddBCC('info@robintekstil.com');

                    $mail->MsgHtml($mail_mesajı);
                    if ($mail->Send()){
                      echo "Mail Gönderildi";
                      //unlink($klasor.'/'.$adi);
                    }else{
                      echo "hata oluştu";
                    }

                  }
                }



                 ?>
								<div class="col-xs-12">
									<div class="form-group"> <input type="text" aria-required="true" size="30" value="" name="mail_baslik" id="name" class="form-control with_icon" placeholder="<?php echo $dil["d36"]; ?>"> <i class="qtyler-user grey"></i> </div>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="form-group"> <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control with_icon" placeholder="<?php echo $dil["d37"]; ?>"> <i class="qtyler-envelope grey"></i> </div>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="form-group"> <input type="tel" size="30" value="" name="phone" id="phone" class="form-control with_icon" placeholder="<?php echo $dil["d39"]; ?>"> <i class="qtyler-phone grey"></i> </div>
								</div>
								<div class="col-xs-12">
									<div class="form-group"> <textarea aria-required="true" rows="3" cols="45" name="mail_mesajı" id="message" class="form-control with_icon" placeholder="<?php echo $dil["d38"]; ?>"></textarea> <i class="qtyler-comment grey"></i> </div>
								</div>
								<div class="col-xs-12 bottommargin_0">
									<div class="contact-form-submit"> <button type="submit" id="contact_form_submit" name="mail" class="theme_button min_width_button margin_0"><?php echo $dil["d40"]; ?></button> </div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>







			<section id="section-social" class="ls with_top_border columns_margin_0">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<div class="page_social"> <a class="social-icon socicon-facebook dark-icon" href="#" title="Facebook"></a> <a class="social-icon socicon-googleplus dark-icon" href="#" title="Google Plus"></a> <a
									class="social-icon socicon-linkedin dark-icon" href="#" title="Linkedin"></a> <a class="social-icon socicon-twitter dark-icon" href="#" title="Twitter"></a> <a class="social-icon socicon-instagram dark-icon" href="#"
									title="Instagram"></a> </div>
						</div>
					</div>
				</div>
			</section>


			<section class="ls section_padding_top_150 section_padding_bottom_150">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 text-center">
							<h2 class="section_header small"><?php echo $dil["d41"]; ?></h2>
							<p class="small-text grey"><?php echo $dil["d42"]; ?></p>
							<div class="widget widget_mailchimp">
								<form  method="POST">
                  <?php
                  if (isset($_POST['aboneol'])) {
  // abone ol tıklanıldı

  //prepare methodu ile insert sorgumuzu yazmanın bir diğer yöntemi
  $abonemail=strip_tags($_POST['abonemail']);
  if (!$abonemail=="") {
    // mail inputu boş değil ise

    $sorgu=$baglanti->db->prepare("select * from mail where mail_host= :mail_host");
    $sorgu->bindParam(":mail_host" , $abonemail , PDO::PARAM_STR);
    $sorgu->execute();
    $sayi=$sorgu->rowCount();
    if ($sayi==0) // bu email kontrol ediliyor yoksa yani sıfırsa işlem ypaılıyor
    {

  //yeni abone eklemiş oluyoruz
  $mailekle=$baglanti->db->prepare("INSERT INTO mail (mail_host) VALUES (?)");
  $ekle=$mailekle->execute(array($abonemail));
  echo  "Mailiniz eklendi!";
 //yeni abone eklemiş oluyoruz

  }else {
    echo "Böyle bir mail zaten var";
  }
}else {
 echo "Mail Alanı Eksik";
}
 } ?>
									<div class="form-group">
                    <input class="mailchimp_email form-control" name="abonemail" type="email" placeholder="<?php echo $dil["d44"]; ?>">
                    <button type="submit" name="aboneol" class="theme_button"><?php echo $dil["d43"]; ?></button>
                  </div>

								</form>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section class="ls section_padding_top_50 section_padding_bottom_50">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2><?php echo $dil["d45"]; ?></h2>
							<hr>
						</div>
					</div>


					<div class="row">
						<div class="col-sm-6 col-lg-3">
							<div class="teaser media main_bg_color">
								<div class="media-body">
									<h4 class="counter counted" data-from="0" data-to="2630" data-speed="1800">2630</h4>
									<p><?php echo $dil["d46"]; ?></p>
								</div>
								<div class="media-right media-middle">
									<div class="teaser_icon size_normal"> <i class="fa fa-star-half-o"></i> </div>
								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="col-sm-6 col-lg-3">
							<div class="teaser media with_background">
								<div class="media-body">
									<h4 class="highlight counter-wrap"> <span class="counter counted" data-from="0" data-to="223" data-speed="2500">223</span> </h4>
									<p><?php echo $dil["d47"]; ?></p>
								</div>
								<div class="media-right media-middle">
									<div class="teaser_icon size_normal"> <i class="fa fa-users highlight"></i> </div>
								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="col-sm-6 col-lg-3">
							<div class="teaser media main_bg_color">
								<div class="media-body">
									<h4 class="counter highlight counted" data-from="0" data-to="325" data-speed="2100">325</h4>
									<p><?php echo $dil["d48"]; ?></p>
								</div>
								<div class="media-right media-middle">
									<div class="teaser_icon size_normal"> <i class="fa fa-shopping-cart"></i> </div>
								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="col-sm-6 col-lg-3">
							<div class="teaser media with_background">
								<div class="media-body">
									<h4 class="highlight counter-wrap"> <span class="counter counted" data-from="0" data-to="121" data-speed="2500">121</span><span class="counter-add">K</span> </h4>
									<p><?php echo $dil["d49"]; ?></p>
								</div>
								<div class="media-right media-middle">
									<div class="teaser_icon size_normal"> <i class="fa fa-line-chart highlight"></i> </div>
								</div>
							</div>
						</div>
						<!-- .col-* -->
					</div>


				</div>
			</section>
			<br><br>




			<section id="gallery" class="ls fluid_padding_0 columns_padding_0">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<div class="owl-carousel gallery-carousel framed" data-responsive-xlg="6" data-responsive-lg="5" data-responsive-md="4" data-responsive-sm="3" data-responsive-xs="3" data-responsive-xxs="2" data-loop="true" data-margin="0"
								data-nav="true">
								<div class="vertical-item">
									<div class="item-media"> <img src="images/gallery-square/01.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/02.jpg">
										</a> </div>
								</div>
								<div class="vertical-item">
									<div class="item-media"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/02.jpg">
											<img src="images/gallery-square/02.jpg" alt="">
										</a> </div>
								</div>
								<div class="vertical-item">
									<div class="item-media"> <img src="images/gallery-square/03.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/03.jpg">
										</a> </div>
								</div>
								<div class="vertical-item">
									<div class="item-media"> <img src="images/gallery-square/04.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/04.jpg">
										</a> </div>
								</div>
								<div class="vertical-item">
									<div class="item-media"> <img src="images/gallery-square/05.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/02.jpg">
										</a> </div>
								</div>
								<div class="vertical-item">
									<div class="item-media"> <img src="images/gallery-square/06.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/02.jpg">
										</a> </div>
								</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<?php include "template/footer.php"; ?>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="js/compressed.js"></script>
	<script src="js/selectize.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
