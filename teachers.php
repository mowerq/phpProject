<?php 

include_once("connection.php");
include_once("website_settings.php");

session_start(); 

$_SESSION["name"] = "";
$_SESSION["category"] = "";
$_SESSION["orderby"] = "name";
// $_SESSION["teachersPageNumber"] = $_SESSION["teachersPageNumber"] ?? 1;
if(empty($_SESSION["teachersPageNumber"])) $teachersPageNumber = 1; else $teachersPageNumber = $_SESSION["teachersPageNumber"];

$allCategoriesQuery = $databaseConnection->prepare("SELECT * FROM categories");
$allCategoriesQuery->execute();
$categoriesNum = $allCategoriesQuery->rowCount();
$allCategories = $allCategoriesQuery->fetchAll(PDO::FETCH_ASSOC);

$_SESSION["allCategories"] = $allCategories;

$firstPageTeachersQuery = $databaseConnection->prepare("SELECT * FROM teachers ORDER BY name LIMIT " . $displayTeachersPerPage);
$firstPageTeachersQuery->execute();
$teachersData = $firstPageTeachersQuery->fetchAll(PDO::FETCH_ASSOC);

$countTeachersQuery = $databaseConnection->prepare("SELECT COUNT(*) as totalTeachers FROM teachers");
$countTeachersQuery->execute();
$totalTeachers = $countTeachersQuery->fetch(PDO::FETCH_ASSOC)['totalTeachers'];

$maxPageNumber = ceil($totalTeachers / $displayTeachersPerPage);
	
function strtoupper_tr ($word) {
	$word = str_replace("ç","Ç",$word);
	$word = str_replace("ğ","Ğ",$word);
	$word = str_replace("ı","I",$word);
	$word = str_replace("i","İ",$word);
	$word = str_replace("ö","Ö",$word);
	$word = str_replace("ü","Ü",$word);
	$word = str_replace("ş","Ş",$word);

	$word = strtoupper($word);
	$word = trim($word);

	return $word;
}
?>
<!DOCTYPE html>

<!-- Mirrored from www.vasterad.com/themes/listeo_082019/listings-grid-full-width.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 12 Mar 2020 11:51:20 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Listeo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/main-color.css" id="colors">
<script src="data/teachers.js"></script>
</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Header -->
	<div id="header">
        <div class="container">
            <div class="left-side">
                <div id="logo">
                    <a href="index.php"><img src="images/logo.png" data-sticky-logo="images/logo.png"
                            alt=""></a>
                </div>
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <nav id="navigation" class="style-1">
                    <ul id="responsive">

                        <li><a href="index.php">Anasayfa</a></li>

                        <li><a href="#">Ders1 Nedir ?</a></li>

                        <li><a href="#">Dersler</a></li>

                        <li><a class="_current" href="teachers.php">Öğretmenler</a></li>

                    </ul>
                </nav>
                <div class="clearfix"></div>
            </div>
            <div class="right-side">
                <div class="header-widget">
                    <div class="user-menu">
                        <div class="user-name"><span><img src="images/dashboard-avatar.jpg" alt=""></span>Merhaba,
                            Osman!</div>
                        <ul>
                            <li><a href="javascript:"><i class="sl sl-icon-settings"></i> Yönetim paneli</a></li>
                            <!-- <li><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i>
                                    Messages</a></li>
                            <li><a href="dashboard-bookings.html"><i class="fa fa-calendar-check-o"></i>
                                    Bookings</a></li> -->
                            <li><a href="javascript:"><i class="sl sl-icon-power"></i> Çıkış yap</a></li>
                        </ul>
                    </div>
                    <a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i
                            class="sl sl-icon-login"></i> Giriş yap</a>
                </div>

            </div>
            <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

                <div class="small-dialog-header">
                    <h3>Öğretmen girişi</h3>
                </div>
                <div class="sign-in-form style-1">
                    <ul class="tabs-nav">
                        <li class=""><a href="#tab1">Giriş yap</a></li>
                        <li><a href="#tab2">Kayıt ol</a></li>
                    </ul>

                    <div class="tabs-container alt">
                        <!-- Login -->
                        <div class="tab-content" id="tab1" style="display: none;">
                            <form method="post" class="login">

                                <p class="form-row form-row-wide">
                                    <label for="username">Kullanıcı adı:
                                        <i class="im im-icon-Male"></i>
                                        <input type="text" class="input-text" name="username" id="username"
                                            value="" />
                                    </label>
                                </p>

                                <p class="form-row form-row-wide">
                                    <label for="password">Şifre:
                                        <i class="im im-icon-Lock-2"></i>
                                        <input class="input-text" type="password" name="password"
                                            id="password" />
                                    </label>
                                    <span class="lost_password">
                                        <a href="#">Şifrenizi mi unuttunuz ?</a>
                                    </span>
                                </p>

                                <div class="form-row">
                                    <input type="submit" class="button border margin-top-5" name="login"
                                        value="Giriş yap" />
                                    <div class="checkboxes margin-top-10">
                                        <input id="remember-me" type="checkbox" name="check">
                                        <label for="remember-me">Beni Hatırla</label>
                                    </div>
                                </div>

                            </form>
                        </div>

                        <!-- Register -->
                        <div class="tab-content" id="tab2" style="display: none;">

                            <form method="post" class="register">

                                <p class="form-row form-row-wide">
                                    <label for="username2">Kullanıcı adı:
                                        <i class="im im-icon-Male"></i>
                                        <input type="text" class="input-text" name="username" id="username2"
                                            value="" />
                                    </label>
                                </p>

                                <p class="form-row form-row-wide">
                                    <label for="email2">Mail adresi:
                                        <i class="im im-icon-Mail"></i>
                                        <input type="text" class="input-text" name="email" id="email2"
                                            value="" />
                                    </label>
                                </p>

                                <p class="form-row form-row-wide">
                                    <label for="password1">Şifre:
                                        <i class="im im-icon-Lock-2"></i>
                                        <input class="input-text" type="password" name="password1"
                                            id="password1" />
                                    </label>
                                </p>

                                <p class="form-row form-row-wide">
                                    <label for="password2">Tekrar şifre:
                                        <i class="im im-icon-Lock-2"></i>
                                        <input class="input-text" type="password" name="password2"
                                            id="password2" />
                                    </label>
                                </p>

                                <input type="submit" class="button border fw margin-top-10" name="register"
                                    value="Kayıt ol" />

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Öğretmenler</h2><span>Bütün öğretmenleri burada bulabilirsiniz</span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Anasayfa</a></li>
						<li>Öğretmenler</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row">
		
		<!-- Search -->
		<form id="main-search-form" action="teachers_page_filters.php" method="get">
			<div class="col-md-12">
				<div class="main-search-input gray-style margin-top-0 margin-bottom-10">

					<div class="main-search-input-item">
						<input id="main-search-input-name" name="name" type="text" placeholder="İsim giriniz" value=""/>
					</div>

					<div class="main-search-input-item">
						<select id="chosen-select" name="category" data-placeholder="All Categories" class="chosen-select">
							<option value="">Bütün Kategoriler</option>
							<?php
							
								foreach ($_SESSION["allCategories"] as $aCategory) {
									?>
									<option value=<?php echo $aCategory["id"] ?>><?php echo $aCategory["category_name"] ?></option>
									<?php
								}

							?>
						</select>
					</div>


					<button type="submit" class="button">Ara</button>
				</div>
			</div>
		</form>
		<!-- Search Section / End -->


		<div class="col-md-12">

			<!-- Sorting - Filtering Section -->
			<div class="row margin-bottom-25 margin-top-30">

				<div class="col-md-6">
					<!-- Layout Switcher
					<div class="layout-switcher">
						<a href="#" class="grid active"><i class="fa fa-th"></i></a>
						<a href="listings-list-full-width.html" class="list"><i class="fa fa-align-justify"></i></a>
					</div>
									-->
				</div>

				<div class="col-md-6">
					<div class="fullwidth-filters">
					

						<!-- Sort by -->
						<div class="sort-by">
							<div class="sort-by-select">
								<select data-placeholder="Default order" class="chosen-select-no-single">
									<option>Alfabetik Sıralama</option>	
									<option>En Yüksek Puanlı</option>
									<option>En Çok Puanlanmış</option>
									<option>En Yeni Katılanlar</option>
								</select>
							</div>
						</div>
						<!-- Sort by / End -->

					</div>
				</div>

			</div>
			<!-- Sorting - Filtering Section / End -->
			<div class="row">
				<div id="list-teachers-div">
					<?php
					if (count($teachersData) > 0) {
						foreach ($teachersData as $aTeacher) {
							?>
							<div class="col-lg-4 col-md-6">
								<a href="#" class="listing-item-container compact">
									<div class="listing-item">
									<img src=<?php echo $aTeacher["image_url"] ?> alt="Teachers image">
									<div class="listing-item-content">
										<div class="numerical-rating" data-rating=<?php echo $aTeacher["star_rating"] ?>></div>
										<h3>
										<?php echo $aTeacher["name"]?>
										<i class="verified-icon"></i>
										</h3>
										<span><?php echo $allCategories[$aTeacher["category"] - 1]["category_name"] ?></span>
									</div>
									<span class="like-icon"></span>
									</div>
								</a>
							</div>
							<?php
						};
					} else {
						echo "Maalesef böyle bir öğretmen bulunamadı :(";
					}
					?>
					
				</div>
			</div>

			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12">
					<!-- Pagination -->
					<div class="pagination-container margin-top-20 margin-bottom-40">
						<nav class="pagination">
							<ul>

								<?php // DÜZELTİLECEK
								if($teachersPageNumber > 2){ ?>
									<li><button onclick=<?php echo 'changePage("teachersPageNumber=1")' ?>><i style="font-weight:bold" class="sl sl-icon-arrow-left"></i><i style="margin-left:-6px;font-weight:bold" class="sl sl-icon-arrow-left"></i></button></li>
									<li><button onclick=<?php echo '"changePage("teachersPageNumber=' . ($teachersPageNumber - 1) . '")"' ?> href="#"><i style="font-weight:bold" class="sl sl-icon-arrow-left"></i></button></li>
								<?php } else if($teachersPageNumber > 1){ ?>
									<li><button onclick=<?php echo '"changePage("teachersPageNumber=' . ($teachersPageNumber - 1) . '")"' ?> href="#"><i style="font-weight:bold" class="sl sl-icon-arrow-left"></i></button></li>
								<?php }

								for ($i= $teachersPageNumber - 2; $i <= $teachersPageNumber + 2; $i++) { 
									if ($i > 0 && $i <= $maxPageNumber) {
										if ($i == $teachersPageNumber) {?>
											<li><button href="#" class="current-page"><?php echo $i ?></button></li><?php
										} else { ?>
											<li><button href="#"><?php echo $i ?></button></li> <?php
										}
									}
								}

								if($teachersPageNumber <= $maxPageNumber - 2){ ?>
									<li><button href="#"><i style="font-weight:bold" class="sl sl-icon-arrow-right"></i></button></li>
									<li><button onclick=<?php echo 'changePage("teachersPageNumber=' . $maxPageNumber . '")' ?>><i style="font-weight:bold" class="sl sl-icon-arrow-right"></i><i style="margin-left:-6px;font-weight:bold" class="sl sl-icon-arrow-right"></i></button></li>
								<?php } else if($teachersPageNumber <= $maxPageNumber - 1){ ?>
									<li><button onclick=<?php echo 'changePage("teachersPageNumber=' . $maxPageNumber . '")' ?>><i style="font-weight:bold" class="sl sl-icon-arrow-right"></i></button></li>
								<?php }
								?>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- Pagination / End -->

		</div>

	</div>
</div>


<!-- Footer
================================================== -->
<div id="footer" class="margin-top-15">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img class="footer-logo" src="images/logo.png" alt="">
				<br><br>
				<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
			</div>

			<div class="col-md-4 col-sm-6 ">
				<h4>Helpful Links</h4>
				<ul class="footer-links">
					<li><a href="#">Login</a></li>
					<li><a href="#">Sign Up</a></li>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Add Listing</a></li>
					<li><a href="#">Pricing</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>

				<ul class="footer-links">
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Our Partners</a></li>
					<li><a href="#">How It Works</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>		

			<div class="col-md-3  col-sm-12">
				<h4>Contact Us</h4>
				<div class="text-widget">
					<span>12345 Little Lonsdale St, Melbourne</span> <br>
					Phone: <span>(123) 123-456 </span><br>
					E-Mail:<span> <a href="#"><span class="__cf_email__" data-cfemail="e78881818e8482a7829f868a978b82c984888a">[email&#160;protected]</span></a> </span><br>
				</div>

				<ul class="social-icons margin-top-20">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
				</ul>

			</div>

		</div>
		
		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">© 2019 Listeo. All Rights Reserved.</div>
			</div>
		</div>

	</div>

</div>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->



<!-- Scripts
================================================== -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="scripts/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-migrate-3.1.0.min.js"></script>
<script type="text/javascript" src="scripts/mmenu.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/waypoints.min.js"></script>
<script type="text/javascript" src="scripts/counterup.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
<script type="text/javascript" src="scripts/app.js"></script>

<!-- Google Autocomplete -->
<script>
  function initAutocomplete() {
    var input = document.getElementById('autocomplete-input');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function() {
      var place = autocomplete.getPlace();
      if (!place.geometry) {
        window.alert("No details available for input: '" + place.name + "'");
        return;
      }
    });

	if ($('.main-search-input-item')[0]) {
	    setTimeout(function(){ 
	        $(".pac-container").prependTo("#autocomplete-container");
	    }, 300);
	}
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places&amp;callback=initAutocomplete"></script>

<!-- Style Switcher
================================================== -->
<script src="scripts/switcher.js"></script>

<div id="style-switcher">
	<h2>Color Switcher <a href="#"><i class="sl sl-icon-settings"></i></a></h2>
	
	<div>
		<ul class="colors" id="color1">
			<li><a href="#" class="main" title="Main"></a></li>
			<li><a href="#" class="blue" title="Blue"></a></li>
			<li><a href="#" class="green" title="Green"></a></li>
			<li><a href="#" class="orange" title="Orange"></a></li>
			<li><a href="#" class="navy" title="Navy"></a></li>
			<li><a href="#" class="yellow" title="Yellow"></a></li>
			<li><a href="#" class="peach" title="Peach"></a></li>
			<li><a href="#" class="beige" title="Beige"></a></li>
			<li><a href="#" class="purple" title="Purple"></a></li>
			<li><a href="#" class="celadon" title="Celadon"></a></li>
			<li><a href="#" class="red" title="Red"></a></li>
			<li><a href="#" class="brown" title="Brown"></a></li>
			<li><a href="#" class="cherry" title="Cherry"></a></li>
			<li><a href="#" class="cyan" title="Cyan"></a></li>
			<li><a href="#" class="gray" title="Gray"></a></li>
			<li><a href="#" class="olive" title="Olive"></a></li>
		</ul>
	</div>
		
</div>
<!-- Style Switcher / End -->


</body>

<!-- Mirrored from www.vasterad.com/themes/listeo_082019/listings-grid-full-width.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 12 Mar 2020 11:51:20 GMT -->
</html>