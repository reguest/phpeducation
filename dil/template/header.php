<?php





include "dil/index.php";

//error_reporting(0);

if (!isset($_SESSION["dil"])) {

	// echo "orhan2";

	// print_r($_SESSION["dil"]);

	$_SESSION["dil"] = "tr";

} else {

	// echo "orhan";



	// print_r($_SESSION["dil"]);



}



?>
<SCRIPT LANGUAGE="Javascript">
/*
<!--
// ***********************************************
// Bu kodu www.incecode.com adresinden aldınız..
// ***********************************************
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
var EnableRightClick = 0;
if(isNS)
document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
function mischandler(){
if(EnableRightClick==1){ return true; }
else {return false; }
}
function mousehandler(e){
if(EnableRightClick==1){ return true; }
var myevent = (isNS) ? e : event;
var eventbutton = (isNS) ? myevent.which : myevent.button;
if((eventbutton==2)||(eventbutton==3)) return false;
}
function keyhandler(e) {
var myevent = (isNS) ? e : window.event;
if (myevent.keyCode==96)
EnableRightClick = 1;
return;
}
document.oncontextmenu = mischandler;
document.onkeypress = keyhandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
//-->
*/
</script>
<!--<div class="header-menu-bg top-menu-position-default">
		<div class="header-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<div class="header-info-text">
							Hedefiniz kaliteyse mutlaka karşılaşırız. </div>
						<div class="social-icons-top">
							<ul>

								<li><a href="https://www.facebook.com/aksaraydacambalkon" target="_blank" class="a-facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/" target="_blank" class="a-twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.instagram.com/aksaraycambalkon/" target="_blank" class="a-instagram"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
						<div class="menu-top-menu-container-toggle"></div>
						<div class="top-menu-container">
							<ul id="menu-top-menu" class="top-menu">
								<li id="menu-item-2683" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2683"><a href="#">40 m'lik yol üzeri Çağlayan Apartmanı</a></li>
								<li id="menu-item-2426" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2426"><a target="#" href="">aksaraycambalkon/</a></li>


							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->
<header class="sticky-header main-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="header-left logo">
					<a class="logo-link" href="http://localhost/aksaraycam/index.php"><img width="200px"
							src="http://localhost/aksaraycam/wp-content/uploads/2016/06/logo2.png"
							alt="Aksaray Cam Balkon" class="regular-logo">
						<img src="http://localhost/aksaraycam/wp-content/uploads/2016/06/logo2.png"
							alt="Aksaray Cam Balkon" class="light-logo"></a>
				</div>

				<div class="header-center">
					<div id="navbar" class="navbar navbar-default clearfix mgt-mega-menu menu-uppercase">
						<div class="navbar-inner">

							<div class="navbar-toggle" data-toggle="collapse" data-target=".collapse">
								Menü </div>

							<div class="navbar-collapse collapse">
								<ul id="menu-main-menu-1" class="nav">
									<li id="mgt-menu-item-465"
										class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-11 current_page_item current-menu-ancestor current_page_ancestor menu-item-multicolumn">
										<a href="http://localhost/aksaraycam/"><strong><?= $dil['home'] ?></strong></a>
									</li>
									<li id="mgt-menu-item-463"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-multicolumn">
										<a href="http://localhost/aksaraycam/shop/"><strong>Neden biz?</strong></a>
									</li>
									<li id="mgt-menu-item-914"
										class="menu-item menu-item-type-post_type menu-item-object-page "><a
											href="http://localhost/aksaraycam/portfolio/"><strong>Galeri</strong></a>
									</li>
									<li id="mgt-menu-item-1338"
										class="menu-item menu-item-type-post_type menu-item-object-page "><a
											href="http://localhost/aksaraycam/about-us-classic/"><strong>Kurumsal</strong></a>
									</li>
									<li id="mgt-menu-item-1732"
										class="menu-item menu-item-type-post_type menu-item-object-page mgt-menu-fullwidth-inside menu-item-multicolumn  menu-item-multicolumn">
										<a href="http://localhost/aksaraycam/contact-us/"><strong>İletişim</strong></a>
									</li>

									<li id="mgt-menu-item-1732"
										class="menu-item menu-item-type-post_type menu-item-object-page mgt-menu-fullwidth-inside menu-item-multicolumn  menu-item-multicolumn">
										<a
											href="http://localhost/aksaraycam/dil.php?dil=<?php if ($_SESSION['dil'] == "tr") {
												echo "en";
											} elseif ($_SESSION['dil'] == "en") {
												echo "de";
											} elseif ($_SESSION['dil'] == "de") {
												echo "tr";
											} ?>">
											<img style="margin-right: 6px;" width="20px"
												src="dil/<?= $_SESSION['dil'] ?>.png" alt="">
											<strong>
												<table><?= $_SESSION['dil'] ?></table>
											</strong></a>
									</li>


								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="header-right">
					<ul class="header-nav">
						<li class="float-sidebar-toggle">
							<div id="st-sidebar-trigger-effects"><a class="float-sidebar-toggle-btn"
									data-effect="st-sidebar-effect-2"><i class="fa fa-bars"></i></a></div>
						</li>


					</ul>
				</div>
			</div>
		</div>

	</div>
</header>









<header class="sticky-header main-header" style="background-color:#2a2f35;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="header-left logo">
					<a class="logo-link" href="http://wp.magnium-themes.com/thebuilt/thebuilt-3"><img
							src="wp-content/uploads/2016/06/logo.png" alt="TheBuilt" class="regular-logo"><img
							src="../thebuilt-1/wp-content/uploads/2016/06/TheBuiltLogoRetinaLight.png" alt="TheBuilt"
							class="light-logo"></a>
				</div>

				<style media="screen">
					.white {
						color: white;
					}
				</style>

				<div class="header-center">
					<div class="header-info-2-text">
						<div class="header-info-half">
							<div class="header-info-content-icon white"><i class="fa fa-phone-square"></i></div>
							<div class="header-info-content-title white">Customer Support &amp; Sales</div>
							<div class="header-info-content-text">646-325-0357</div>
						</div>
						<div class="header-info-half">
							<div class="header-info-content-icon white"><i class="fa fa-clock-o"></i></div>
							<div class="header-info-content-title white">Working time</div>
							<div class="header-info-content-text white">Mon - Sat : 08:00 - 18:00</div>
						</div>
					</div>
				</div>

				<div class="header-right">
					<ul class="header-nav">
						<li class="search-toggle">
							<div id="trigger-search"><a class="search-toggle-btn"><i class="fa fa-search white"></i></a>
							</div>
						</li>
						<li class="float-sidebar-toggle">
							<div id="st-sidebar-trigger-effects"><a class="float-sidebar-toggle-btn"
									data-effect="st-sidebar-effect-2"><i class="fa fa-bars white"></i></a></div>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>
	<div class="mainmenu-belowheader mainmenu-dark menu-center menu-uppercase container">
		<div id="navbar" class="navbar navbar-default clearfix mgt-mega-menu" style="background-color:white;">
			<div class="navbar-inner">
				<div class="container">

					<div class="navbar-toggle" data-toggle="collapse" data-target=".collapse">
						Menu </div>

					<div class="navbar-collapse collapse">
						<ul id="menu-main-menu-1" class="nav">
							<li id="mgt-menu-item-465"
								class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-11 current_page_item current-menu-ancestor current_page_ancestor menu-item-has-children menu-item-multicolumn">
								<a href="index.html"><strong>Anasayfa</strong></a>
								<ul class="sub-menu  megamenu-column-2 level-0">
									<li id="mgt-menu-item-2966"
										class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children">
										<a href="#">Homepages</a>
										<ul class="sub-menu  level-1">
											<li id="mgt-menu-item-2967"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-1">Homepage
													&#8211; Main</a></li>
											<li id="mgt-menu-item-2968"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-2">Homepage
													&#8211; Business</a></li>
											<li id="mgt-menu-item-2969"
												class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home">
												<a target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-3">Homepage
													&#8211; Creative</a></li>
											<li id="mgt-menu-item-2970"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-4">Homepage
													&#8211; Corporate</a></li>
											<li id="mgt-menu-item-2971"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-5">Homepage
													&#8211; Modern</a></li>
											<li id="mgt-menu-item-2972"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-onepage">Homepage
													&#8211; Onepage</a></li>
											<li id="mgt-menu-item-2998"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-7/">Homepage
													&#8211; Shop</a></li>
											<li id="mgt-menu-item-2999"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-8/">Homepage
													&#8211; Fullscreen</a></li>
										</ul>
									</li>
									<li id="mgt-menu-item-2973"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
										<a href="#">Theme Headers</a>
										<ul class="sub-menu  level-1">
											<li id="mgt-menu-item-2974"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-headers/?header_menu_layout=menu_below_header&amp;header_menu_color_scheme=menu_dark">Menu
													Below Header 1</a></li>
											<li id="mgt-menu-item-2975"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-headers/?header_menu_layout=menu_below_header&amp;header_menu_color_scheme=menu_light">Menu
													Below Header 2</a></li>
											<li id="mgt-menu-item-2976"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-headers/?header_menu_layout=menu_below_header&amp;header_menu_color_scheme=menu_dark&amp;header_menu_align=menu_center&amp;header_menu_text_transform=menu_regular">Menu
													Below Header 3</a></li>
											<li id="mgt-menu-item-2977"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-headers/?header_menu_layout=menu_in_header">Menu
													In Header
													1</a></li>
											<li id="mgt-menu-item-2978"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-headers/?header_menu_layout=menu_in_header&amp;header_menu_text_transform=menu_regular&amp;header_logo_position=center">Menu
													In Header 2</a></li>
											<li id="mgt-menu-item-2979"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-headers/?header_menu_layout=menu_in_header&amp;top_menu_position=header">Top
													Menu in Header 1</a></li>
											<li id="mgt-menu-item-2980"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-headers/?header_menu_layout=menu_in_header&amp;top_menu_position=header&amp;header_menu_text_transform=menu_regular">Top
													Menu in Header 2</a></li>
											<li id="mgt-menu-item-2981"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-headers/?header_menu_layout=menu_below_header&amp;header_fullwidth=1">Fullwidth
													Header 1</a></li>
											<li id="mgt-menu-item-2982"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-headers/?header_menu_layout=menu_in_header&amp;header_fullwidth=1">Fullwidth
													Header 2</a></li>
											<li id="mgt-menu-item-2983"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-headers/?header_menu_layout=menu_in_header&amp;header_menu_text_transform=menu_regular&amp;header_logo_position=center&amp;header_fullwidth=1">Fullwidth
													Header 3</a>
											</li>
											<li id="mgt-menu-item-2984"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-headers/?disable_top_menu=1">Top
													Menu Disabled</a></li>
											<li id="mgt-menu-item-2985"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-headers/?header_logo_position=center&amp;header_menu_align=menu_center&amp;header_menu_color_scheme=menu_light&amp;header_menu_text_transform=menu_regular">Logo
													in
													Center</a></li>
											<li id="mgt-menu-item-2986"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													target="_blank"
													href="http://wp.magnium-themes.com/thebuilt/thebuilt-headers/?header_menu_layout=menu_below_header&amp;header_menu_width=menu_boxed">Boxed
													Menu</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li id="mgt-menu-item-463"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-multicolumn">
								<a href="our-services/index.html"><strong>Services</strong></a>
								<ul class="sub-menu mgt-menu-bg-image megamenu-column-3 level-0"
									data-style="background-image:url(http://wp.magnium-themes.com/thebuilt/thebuilt-3/wp-content/uploads/2016/06/Secretar-small.jpg); background-repeat: no-repeat; background-position: right center;">
									<li id="mgt-menu-item-1729"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
										<a href="#"><i class="fa fa-file-text-o"></i>SERVICES STYLE</a>
										<ul class="sub-menu  level-1">
											<li id="mgt-menu-item-601"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="our-services/index.html">Our services</a></li>
											<li id="mgt-menu-item-1915"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="our-services-2/index.html">Our services – Image</a></li>
											<li id="mgt-menu-item-1934"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="our-services-3/index.html">Our services – Color</a></li>
											<li id="mgt-menu-item-600"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="our-services-modern/index.html">Our services – Modern</a></li>
											<li id="mgt-menu-item-2075"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="our-services-icon/index.html">Our services – Icon</a></li>
											<li id="mgt-menu-item-2148"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="our-services-icon-box/index.html">Our services – Icon Box</a>
											</li>
											<li id="mgt-menu-item-2546"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="our-services-custom-icon/index.html">Our services – Custom
													Icon</a></li>
										</ul>
									</li>
									<li id="mgt-menu-item-2684"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
										<a href="#"><i class="fa fa-building-o"></i>OUR SERVICES</a>
										<ul class="sub-menu  level-1">
											<li id="mgt-menu-item-1482"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="our-services/construction-consultant/index.html">Construction
													Consultant</a></li>
											<li id="mgt-menu-item-1485"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="our-services/preconstruction-planning/index.html">Preconstruction
													Planning</a></li>
											<li id="mgt-menu-item-1483"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="our-services/house-renovation/index.html">House Renovation</a>
											</li>
											<li id="mgt-menu-item-1484"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="our-services/interior-design/index.html">Interior Design</a>
											</li>
											<li id="mgt-menu-item-1480"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="our-services/architecture-building/index.html">Architecture
													&#038; Building</a></li>
											<li id="mgt-menu-item-1481"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="our-services/building-engineering/index.html">Building
													Engineering</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li id="mgt-menu-item-914"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
								<a href="portfolio/index.html"><strong>Galeri</strong></a>
								<ul class="sub-menu  megamenu-column-1 level-0">
									<li id="mgt-menu-item-1086"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
										<a href="#">Grid Boxed</a>
										<ul class="sub-menu  level-1">
											<li id="mgt-menu-item-1062"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-masonry-1-animation-1-boxed-no-space/index.html">Masonry
													1 / Animation 1</a></li>
											<li id="mgt-menu-item-1079"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-masonry-2-animation-2-boxed-no-space/index.html">Masonry
													2 / Animation 2</a></li>
											<li id="mgt-menu-item-1082"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-masonry-3-animation-3-boxed-no-space/index.html">Masonry
													3 / Animation 3</a></li>
											<li id="mgt-menu-item-1070"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-grid-large-animation-4-boxed-no-space/index.html">Grid
													Large / Animation 4</a></li>
											<li id="mgt-menu-item-1073"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-grid-medium-animation-5-boxed-no-space/index.html">Grid
													Medium / Animation 5</a></li>
											<li id="mgt-menu-item-1076"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-grid-small-animation-6-boxed-no-space/index.html">Grid
													Small / Animation 6</a></li>
											<li id="mgt-menu-item-1056"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-compact-list-animation-7-boxed-no-space/index.html">Compact
													List / Animation 7</a></li>
											<li id="mgt-menu-item-1059"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-compact-list-animation-8-boxed-no-space/index.html">Compact
													List / Animation 8</a></li>
											<li id="mgt-menu-item-1064"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-medium-list-animation-3-boxed-no-space/index.html">Medium
													List / Animation 3</a></li>
											<li id="mgt-menu-item-1067"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-medium-list-animation-8-boxed-no-space/index.html">Medium
													List / Animation 8</a></li>
											<li id="mgt-menu-item-2110"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-boxed-images-lightbox/index.html">Boxed
													Images Lightbox</a></li>
										</ul>
									</li>
									<li id="mgt-menu-item-1087"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
										<a href="#">Grid Fullwidth</a>
										<ul class="sub-menu  level-1">
											<li id="mgt-menu-item-1063"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-masonry-1-animation-2-fullwidth-no-space/index.html">Masonry
													1 / Animation 2</a></li>
											<li id="mgt-menu-item-1081"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-masonry-2-animation-4-fullwidth-no-space/index.html">Masonry
													2 / Animation 4</a></li>
											<li id="mgt-menu-item-1083"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-masonry-3-animation-3-fullwidth-no-space/index.html">Masonry
													3 / Animation 3</a></li>
											<li id="mgt-menu-item-1072"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-grid-large-animation-4-fullwidth-no-space/index.html">Grid
													Large / Animation 4</a></li>
											<li id="mgt-menu-item-1075"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-grid-medium-animation-5-fullwidth-no-space/index.html">Grid
													Medium / Animation 5</a></li>
											<li id="mgt-menu-item-1077"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-grid-small-animation-6-fullwidth-no-space/index.html">Grid
													Small / Animation 6</a></li>
											<li id="mgt-menu-item-1058"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-compact-list-animation-7-fullwidth-no-space/index.html">Compact
													List / Animation 7</a></li>
											<li id="mgt-menu-item-1061"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-compact-list-animation-8-fullwidth-no-space/index.html">Compact
													List / Animation 8</a></li>
											<li id="mgt-menu-item-1066"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-medium-list-animation-3-fullwidth-no-space/index.html">Medium
													List / Animation 3</a></li>
											<li id="mgt-menu-item-1069"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-medium-list-animation-8-fullwidth-no-space/index.html">Medium
													List / Animation 8</a></li>
											<li id="mgt-menu-item-2115"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-fullwidth-images-lightbox/index.html">Fullwidth
													Images Lightbox</a></li>
										</ul>
									</li>
									<li id="mgt-menu-item-1088"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
										<a href="#">Grid Spaced</a>
										<ul class="sub-menu  level-1">
											<li id="mgt-menu-item-1080"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-masonry-2-animation-2-boxed-spaced/index.html">Masonry
													2 / Animation 2</a></li>
											<li id="mgt-menu-item-1084"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-masonry-3-animation-3-fullwidth-spaced/index.html">Masonry
													3 / Animation 3</a></li>
											<li id="mgt-menu-item-1085"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-masonry-3-animation-7-boxed-spaced/index.html">Masonry
													3 / Animation 7</a></li>
											<li id="mgt-menu-item-1071"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-grid-large-animation-4-boxed-spaced/index.html">Grid
													Large / Animation 4</a></li>
											<li id="mgt-menu-item-1074"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-grid-medium-animation-5-boxed-spaced/index.html">Grid
													Medium / Animation 5</a></li>
											<li id="mgt-menu-item-1078"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-grid-small-animation-8-fullwidth-spaced/index.html">Grid
													Small / Animation 8</a></li>
											<li id="mgt-menu-item-1065"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-medium-list-animation-3-boxed-spaced/index.html">Medium
													List / Animation 3</a></li>
											<li id="mgt-menu-item-1068"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-medium-list-animation-8-boxed-spaced/index.html">Medium
													List / Animation 8</a></li>
											<li id="mgt-menu-item-1057"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-compact-list-animation-7-boxed-spaced/index.html">Compact
													List / Animation 7</a></li>
											<li id="mgt-menu-item-1060"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-compact-list-animation-8-boxed-spaced/index.html">Compact
													List / Animation 8</a></li>
											<li id="mgt-menu-item-2118"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="portfolio/portfolio-spaced-images-lightbox/index.html">Spaced
													Images Lightbox</a></li>
										</ul>
									</li>
									<li id="mgt-menu-item-1147"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
										<a href="gallery/index.html">Gallery Boxed</a>
										<ul class="sub-menu  level-1">
											<li id="mgt-menu-item-1155"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="gallery/gallery-boxed-style-1/index.html">Gallery – Boxed –
													Style 1</a></li>
											<li id="mgt-menu-item-1154"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="gallery/gallery-boxed-style-2/index.html">Gallery – Boxed –
													Style 2</a></li>
											<li id="mgt-menu-item-1153"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="gallery/gallery-boxed-style-3/index.html">Gallery – Boxed –
													Style 3</a></li>
											<li id="mgt-menu-item-1152"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="gallery/gallery-boxed-style-4/index.html">Gallery – Boxed –
													Style 4</a></li>
											<li id="mgt-menu-item-1151"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="gallery/gallery-boxed-style-5/index.html">Gallery – Boxed –
													Style 5</a></li>
											<li id="mgt-menu-item-1150"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="gallery/gallery-boxed-style-6/index.html">Gallery – Boxed –
													Style 6</a></li>
											<li id="mgt-menu-item-1149"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="gallery/gallery-boxed-style-7/index.html">Gallery – Boxed –
													Style 7</a></li>
											<li id="mgt-menu-item-1148"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="gallery/gallery-boxed-style-8/index.html">Gallery – Boxed –
													Style 8</a></li>
											<li id="mgt-menu-item-2123"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="gallery/gallery-boxed-images-lightbox/index.html">Boxed Images
													Lightbox</a></li>
										</ul>
									</li>
									<li id="mgt-menu-item-1189"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
										<a href="gallery/gallery-fullwidth-style-1/index.html">Gallery Fullwidth</a>
										<ul class="sub-menu  level-1">
											<li id="mgt-menu-item-1184"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="gallery/gallery-fullwidth-style-1/index.html">Gallery –
													Fullwidth – Style 1</a></li>
											<li id="mgt-menu-item-1183"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="gallery/gallery-fullwidth-style-2/index.html">Gallery –
													Fullwidth – Style 2</a></li>
											<li id="mgt-menu-item-1182"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="gallery/gallery-fullwidth-style-3/index.html">Gallery –
													Fullwidth – Style 3</a></li>
											<li id="mgt-menu-item-1181"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="gallery/gallery-fullwidth-style-4/index.html">Gallery –
													Fullwidth – Style 4</a></li>
											<li id="mgt-menu-item-1180"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="gallery/gallery-fullwidth-style-5/index.html">Gallery –
													Fullwidth – Style 5</a></li>
											<li id="mgt-menu-item-1179"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="gallery/gallery-fullwidth-style-6/index.html">Gallery –
													Fullwidth – Style 6</a></li>
											<li id="mgt-menu-item-1178"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="gallery/gallery-fullwidth-style-7/index.html">Gallery –
													Fullwidth – Style 7</a></li>
											<li id="mgt-menu-item-1177"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="gallery/gallery-fullwidth-style-8/index.html">Gallery –
													Fullwidth – Style 8</a></li>
											<li id="mgt-menu-item-2126"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="gallery/gallery-fullwidth-images-lightbox/index.html">Fullwidth
													Images Lightbox</a></li>
										</ul>
									</li>
									<li id="mgt-menu-item-1089"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
										<a href="#">Project examples (8 styles)</a>
										<ul class="sub-menu  level-1">
											<li id="mgt-menu-item-1101"
												class="menu-item menu-item-type-post_type menu-item-object-mgt_portfolio">
												<a href="project/green-house/index.html">Green House</a></li>
											<li id="mgt-menu-item-1098"
												class="menu-item menu-item-type-post_type menu-item-object-mgt_portfolio">
												<a href="project/architecture-and-design/index.html">Architecture and
													Design</a></li>
											<li id="mgt-menu-item-1099"
												class="menu-item menu-item-type-post_type menu-item-object-mgt_portfolio">
												<a href="project/construction-consulting/index.html">Construction
													consulting</a></li>
											<li id="mgt-menu-item-1100"
												class="menu-item menu-item-type-post_type menu-item-object-mgt_portfolio">
												<a href="project/family-house/index.html">Family house</a></li>
											<li id="mgt-menu-item-1102"
												class="menu-item menu-item-type-post_type menu-item-object-mgt_portfolio">
												<a href="project/hotel/index.html">Hotel</a></li>
											<li id="mgt-menu-item-1103"
												class="menu-item menu-item-type-post_type menu-item-object-mgt_portfolio">
												<a href="project/house-in-florida/index.html">House in Florida</a></li>
											<li id="mgt-menu-item-1104"
												class="menu-item menu-item-type-post_type menu-item-object-mgt_portfolio">
												<a href="project/modern-house/index.html">Modern House</a></li>
											<li id="mgt-menu-item-1105"
												class="menu-item menu-item-type-post_type menu-item-object-mgt_portfolio">
												<a href="project/office-interior/index.html">Office interior</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li id="mgt-menu-item-1190"
								class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
								<a href="#"><strong>Features</strong></a>
								<ul class="sub-menu  megamenu-column-1 level-0">
									<li id="mgt-menu-item-2403"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
										<a href="#"><i class="fa fa-bookmark"></i>Advanced Elements</a>
										<ul class="sub-menu  level-1">
											<li id="mgt-menu-item-1280"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/promo-block/index.html">Promo Block</a></li>
											<li id="mgt-menu-item-1282"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/pricing-table/index.html">Pricing Table</a></li>
											<li id="mgt-menu-item-1265"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/call-to-action-block/index.html">Call To Action
													Block</a></li>
											<li id="mgt-menu-item-1283"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/posts-list-posts-slider/index.html">Posts List /
													Posts Slider</a></li>
											<li id="mgt-menu-item-1266"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/client-reviews/index.html">Client Reviews</a></li>
											<li id="mgt-menu-item-1269"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/counters/index.html">Counters</a></li>
											<li id="mgt-menu-item-1268"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/countdown-timer/index.html">Countdown Timer</a></li>
											<li id="mgt-menu-item-1272"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/icon-box/index.html">Icon Box</a></li>
											<li id="mgt-menu-item-1279"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/signupsubscribe-block/index.html">Signup/Subscribe
													Block</a></li>
											<li id="mgt-menu-item-1271"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/header-block/index.html">Header block</a></li>
											<li id="mgt-menu-item-1275"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/parallax-and-fullwidth-sections/index.html">Parallax
													and fullwidth sections</a></li>
											<li id="mgt-menu-item-1264"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/buttons/index.html">Buttons</a></li>
										</ul>
									</li>
									<li id="mgt-menu-item-1194"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
										<a href="#"><i class="fa fa-bookmark-o"></i>Basic Elements</a>
										<ul class="sub-menu  level-1">
											<li id="mgt-menu-item-1267"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/columns/index.html">Columns</a></li>
											<li id="mgt-menu-item-2104"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/tables/index.html">Tables</a></li>
											<li id="mgt-menu-item-1273"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/icons/index.html">Icons</a></li>
											<li id="mgt-menu-item-1274"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/message-box/index.html">Message Box</a></li>
											<li id="mgt-menu-item-1277"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/tabs-toggles-and-accordion/index.html">Tabs, Toggles
													and Accordion</a></li>
											<li id="mgt-menu-item-1278"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/social-share-buttons/index.html">Social Share
													Buttons</a></li>
											<li id="mgt-menu-item-1281"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/progress-bars-and-pie-charts/index.html">Progress
													bars and Pie charts</a></li>
											<li id="mgt-menu-item-1276"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/youtubevimeo-videos/index.html">Youtube/Vimeo
													Videos</a></li>
											<li id="mgt-menu-item-1270"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="features/google-maps/index.html">Google Maps</a></li>
										</ul>
									</li>
									<li id="mgt-menu-item-2595"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
										<a href="shop/index.html"><i class="fa fa-shopping-cart"></i>Shop</a>
										<ul class="sub-menu  level-1">
											<li id="mgt-menu-item-2645"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													href="shop/indexa534.html?woocommerce_sidebar_position=disable">Shop
													Fullwidth</a></li>
											<li id="mgt-menu-item-2646"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													href="shop/indexd3bb.html?woocommerce_sidebar_position=left">Shop
													Left Sidebar</a></li>
											<li id="mgt-menu-item-2647"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													href="shop/index2ed1.html?woocommerce_sidebar_position=right">Shop
													Right Sidebar</a></li>
											<li id="mgt-menu-item-2651"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													href="product/wx254-cordless-screwdriver/index65e3.html?woocommerce_product_sidebar_position=disable">Product
													Fullwidth</a></li>
											<li id="mgt-menu-item-2652"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													href="product/wx254-cordless-screwdriver/indexb9ec.html?woocommerce_product_sidebar_position=left">Product
													Left Sidebar</a></li>
											<li id="mgt-menu-item-2653"
												class="menu-item menu-item-type-custom menu-item-object-custom"><a
													href="product/wx254-cordless-screwdriver/indexebe9.html?woocommerce_product_sidebar_position=right">Product
													Right Sidebar</a></li>
											<li id="mgt-menu-item-2614"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="my-account/index.html"><i class="fa fa-users"></i>My
													Account</a></li>
											<li id="mgt-menu-item-2612"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="cart/index.html"><i class="fa fa-suitcase"></i>Cart</a></li>
											<li id="mgt-menu-item-2613"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="checkout/index.html"><i
														class="fa fa-credit-card"></i>Checkout</a></li>
										</ul>
									</li>
									<li id="mgt-menu-item-2772"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
										<a href="#"><i class="fa fa-copy (alias)"></i>Page styles</a>
										<ul class="sub-menu  level-1">
											<li id="mgt-menu-item-2776"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="core-values-2/index.html"><i class="fa fa-book"></i>Default
													Header</a></li>
											<li id="mgt-menu-item-2774"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="our-services/preconstruction-planning/index.html"><i
														class="fa fa-file-text-o"></i>Transparent Header</a></li>
											<li id="mgt-menu-item-2773"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="our-services/house-renovation/index.html"><i
														class="fa fa-eyedropper"></i>Header Custom color</a></li>
											<li id="mgt-menu-item-2777"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="our-services-modern/index.html"><i
														class="fa fa-file-picture-o (alias)"></i>Header Image</a></li>
											<li id="mgt-menu-item-2662"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="about-us/index.html"><i class="fa fa-align-justify"></i>Page
													Fullwidth</a></li>
											<li id="mgt-menu-item-2663"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="our-services/construction-consultant/index.html"><i
														class="fa fa-align-left"></i>Page Left Sidebar</a></li>
											<li id="mgt-menu-item-2664"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="about-us-alt-style/index.html"><i
														class="fa fa-align-right"></i>Page Right Sidebar</a></li>
										</ul>
									</li>
									<li id="mgt-menu-item-2665"
										class="menu-item menu-item-type-post_type menu-item-object-page"><a
											href="coming-soon/index.html">Coming Soon / Maintenance</a></li>
									<li id="mgt-menu-item-2656"
										class="menu-item menu-item-type-custom menu-item-object-custom"><a
											href="404/index.html">404 Page Not Found</a></li>
								</ul>
							</li>
							<li id="mgt-menu-item-1338"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
								<a href="about-us-classic/index.html"><strong>Kurumsal</strong></a>
								<ul class="sub-menu mgt-menu-bg-image megamenu-column-1 level-0"
									data-style="background-image:url(http://wp.magnium-themes.com/thebuilt/thebuilt-3/wp-content/uploads/2016/06/MenuBackver2.jpg); background-repeat: no-repeat; background-position: center center;">
									<li id="mgt-menu-item-2042"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
										<a href="#">About us</a>
										<ul class="sub-menu  level-1">
											<li id="mgt-menu-item-1528"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="about-us/index.html">About us</a></li>
											<li id="mgt-menu-item-2041"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="about-us-classic/index.html">About us – classic</a></li>
											<li id="mgt-menu-item-1403"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="about-us-alt-style/index.html">About us – alt style</a></li>
											<li id="mgt-menu-item-2054"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="about-us-minimal/index.html">About us – minimal</a></li>
										</ul>
									</li>
									<li id="mgt-menu-item-1402"
										class="menu-item menu-item-type-post_type menu-item-object-page"><a
											href="company-history/index.html">Company history</a></li>
									<li id="mgt-menu-item-1401"
										class="menu-item menu-item-type-post_type menu-item-object-page"><a
											href="partners/index.html">Partners</a></li>
									<li id="mgt-menu-item-1589"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
										<a href="career/index.html">Career</a>
										<ul class="sub-menu  level-1">
											<li id="mgt-menu-item-2525"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="career/index.html">Career</a></li>
											<li id="mgt-menu-item-2524"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="job-description/index.html">Job Description</a></li>
											<li id="mgt-menu-item-2536"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="send-a-cv/index.html">Send a CV</a></li>
										</ul>
									</li>
									<li id="mgt-menu-item-1434"
										class="menu-item menu-item-type-post_type menu-item-object-page"><a
											href="core-values-2/index.html">Core values</a></li>
									<li id="mgt-menu-item-1667"
										class="menu-item menu-item-type-post_type menu-item-object-page"><a
											href="certifications/index.html">Certifications</a></li>
									<li id="mgt-menu-item-1669"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
										<a href="our-team-list/index.html">Our Team</a>
										<ul class="sub-menu  level-1">
											<li id="mgt-menu-item-1478"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="our-team-list/index.html">Our Team – List</a></li>
											<li id="mgt-menu-item-1479"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="our-team-grid/index.html">Our Team – Grid</a></li>
											<li id="mgt-menu-item-1668"
												class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="team-member/index.html">Team member</a></li>
										</ul>
									</li>
									<li id="mgt-menu-item-1625"
										class="menu-item menu-item-type-post_type menu-item-object-page"><a
											href="pricing/index.html">Pricing</a></li>
									<li id="mgt-menu-item-1614"
										class="menu-item menu-item-type-post_type menu-item-object-page"><a
											href="faq/index.html">FAQ</a></li>
								</ul>
							</li>
							<li id="mgt-menu-item-1293"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
								<a href="news/index.html"><strong>News</strong></a>
								<ul class="sub-menu  megamenu-column-1 level-0">
									<li id="mgt-menu-item-1303"
										class="menu-item menu-item-type-custom menu-item-object-custom"><a
											href="blog-grid/indexedc6.html?blog_sidebar_position=disable">Blog Grid
											Fullwidth</a></li>
									<li id="mgt-menu-item-1305"
										class="menu-item menu-item-type-custom menu-item-object-custom"><a
											href="blog-grid/indexbb2e.html?blog_sidebar_position=left">Blog Grid Left
											Sidebar</a></li>
									<li id="mgt-menu-item-1306"
										class="menu-item menu-item-type-custom menu-item-object-custom"><a
											href="blog-grid/indexe34f.html?blog_sidebar_position=right">Blog Grid Right
											Sidebar</a></li>
									<li id="mgt-menu-item-1295"
										class="menu-item menu-item-type-custom menu-item-object-custom"><a
											href="news/indexedc6.html?blog_sidebar_position=disable">Blog Simple
											Fullwidth</a></li>
									<li id="mgt-menu-item-1298"
										class="menu-item menu-item-type-custom menu-item-object-custom"><a
											href="news/indexbb2e.html?blog_sidebar_position=left">Blog Simple Left
											Sidebar</a></li>
									<li id="mgt-menu-item-1299"
										class="menu-item menu-item-type-custom menu-item-object-custom"><a
											href="news/indexe34f.html?blog_sidebar_position=right">Blog Simple Right
											Sidebar</a></li>
									<li id="mgt-menu-item-2659"
										class="menu-item menu-item-type-custom menu-item-object-custom"><a
											href="2016/06/01/germany-construction-company-eye-investment/indexa9bb.html?post_sidebar_position=disable">Post
											Fullwidth</a></li>
									<li id="mgt-menu-item-2660"
										class="menu-item menu-item-type-custom menu-item-object-custom"><a
											href="2016/06/01/germany-construction-company-eye-investment/index5b33.html?post_sidebar_position=left">Post
											Left Sidebar</a></li>
									<li id="mgt-menu-item-2661"
										class="menu-item menu-item-type-custom menu-item-object-custom"><a
											href="2016/06/01/germany-construction-company-eye-investment/indexfce9.html?post_sidebar_position=right">Post
											Right Sidebar</a></li>
								</ul>
							</li>
							<li id="mgt-menu-item-1732"
								class="menu-item menu-item-type-post_type menu-item-object-page mgt-menu-fullwidth-inside menu-item-multicolumn menu-item-has-children menu-item-multicolumn">
								<a href="contact-us/index.html"><strong>İletişim</strong></a>
								<ul class="sub-menu sidebar-inside  megamenu-column-4 mgt-menu-fullwidth level-0">
									<div class="sidebar">
										<li id="nav_menu-9" class="widget widget_nav_menu">
											<h2 class="widgettitle">Navigation</h2>
											<div class="menu-contact-menu-sidebar-container">
												<ul id="menu-contact-menu-sidebar" class="menu">
													<li id="menu-item-2764"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2764">
														<a href="contact-us/index.html">Contact us</a></li>
													<li id="menu-item-2763"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2763">
														<a href="contact-us-2/index.html">Contact us – 2</a></li>
													<li id="menu-item-2762"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2762">
														<a href="contact-us-3/index.html">Contact us – 3</a></li>
													<li id="menu-item-2761"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2761">
														<a href="contact-us-4/index.html">Contact us – 4</a></li>
													<li id="menu-item-2765"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2765">
														<a href="send-a-cv/index.html">Send a CV</a></li>
													<li id="menu-item-2766"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2766">
														<a href="get-a-quote/index.html">Get a quote</a></li>
												</ul>
											</div>
										</li>
										<li id="thebuilt-recent-posts-3" class="widget widget_thebuilt_recent_entries">
											<h2 class="widgettitle">Recent News</h2>
											<ul>
												<li class="clearfix">
													<div class="widget-post-thumb-wrapper">
														<a
															href="2016/06/01/results-of-annual-general-meeting/index.html">
															<img width="270" height="152"
																src="wp-content/uploads/2016/05/photodune-14944148-secretary-in-office-m-270x152.jpg"
																class="attachment-thebuilt-blog-thumb-widget size-thebuilt-blog-thumb-widget wp-post-image"
																alt="photodune-14944148-secretary-in-office-m"
																srcset="http://wp.magnium-themes.com/thebuilt/thebuilt-3/wp-content/uploads/2016/05/photodune-14944148-secretary-in-office-m-270x152.jpg 270w, http://wp.magnium-themes.com/thebuilt/thebuilt-3/wp-content/uploads/2016/05/photodune-14944148-secretary-in-office-m-1170x660.jpg 1170w"
																sizes="(max-width: 270px) 100vw, 270px" /> </a>
													</div>
													<div class="widget-post-details-wrapper">
														<div class="post-title"><a
																href="2016/06/01/results-of-annual-general-meeting/index.html">Results
																of Annual General Meeting</a></div>
														<div class="post-date">June 1, 2016</div>
													</div>
												</li>
											</ul>
										</li>
										<li id="text-18" class="widget widget_text">
											<h2 class="widgettitle">Our Brochures</h2>
											<div class="textwidget">
												<div class="widget-download-link-wrapper">
													<div class="widget-download-icon"><i class="fa fa-file-pdf-o"></i>
													</div>
													<div class="widget-download-details">
														<div class="widget-download-title"><a href="#">Company
																Brochure</a></div>
														<div class="widget-download-subtitle">2.3 mb, PDF</div>
													</div>
												</div>
												<div class="widget-download-link-wrapper">
													<div class="widget-download-icon"><i class="fa fa-file-pdf-o"></i>
													</div>
													<div class="widget-download-details">
														<div class="widget-download-title"><a href="#">Price List</a>
														</div>
														<div class="widget-download-subtitle">2.3 mb, PDF</div>
													</div>
												</div>
											</div>
										</li>
										<li id="text-19" class="widget widget_text">
											<h2 class="widgettitle">Services</h2>
											<div class="textwidget">
												<style scoped='scoped'>
													.mgt-promo-block-47015338664.mgt-promo-block.darken .mgt-promo-block-content {
														background-color: rgba(10, 10, 10, 0.38) !important;
													}

													.mgt-promo-block-47015338664.mgt-promo-block.animated:hover .mgt-promo-block-content {
														background-color: rgba(0, 0, 0, 0.5) !important;
													}
												</style>
												<div class="mgt-promo-block animated white-text cover-image text-size-normal darken mgt-promo-block-47015338664 wpb_content_element"
													data-style="background-image: url(http://wp.magnium-themes.com/thebuilt/thebuilt-3/wp-content/uploads/2016/03/photodune-842080-yellow-excavator-m.jpg);background-repeat: no-repeat;width: 100%; height: 240px;">
													<div class="mgt-promo-block-content va-middle">
														<div class="mgt-promo-block-content-inside">

															<h2 align="center">OUR
																SERVICES</h2>

															<div
																class="mgt-button-wrapper mgt-button-wrapper-align-center mgt-button-wrapper-display-newline mgt-button-top-margin-disable">
																<a class="btn hvr-default mgt-button mgt-style-default mgt-size-small mgt-align-center mgt-display-newline mgt-text-size-small mgt-button-icon-position-left mgt-text-transform-uppercase "
																	href="our-services-modern/index.html">read more</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</div>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	</div>
</header>