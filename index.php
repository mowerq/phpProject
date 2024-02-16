<!DOCTYPE html>

<head>
	<title>Samsun Özel Ders</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/main-color.css" id="colors">
</head>

<body class="transparent-header">
	<div id="wrapper">
		<header id="header-container">
			<div id="header">
				<div class="container">
					<div class="left-side">
						<div id="logo">
							<a href="index.php"><img src="images/logo2.png" data-sticky-logo="images/logo.png"
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

								<li><a class="_current" href="#">Anasayfa</a></li>

								<li><a href="#">Ders1 Nedir ?</a></li>

								<li><a href="#">Dersler</a></li>

								<li><a href="teachers.php">Öğretmenler</a></li>

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
		</header>
		<div class="clearfix"></div>
		<div class="main-search-container centered full-height"
			data-background-image="images/main-search-background-01.jpg">
			<div class="main-search-inner">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2>
								<span class="typed-words"></span>dersi al
							</h2>
							<h4>Öğrenmeyi Özelleştir, Başarıyı Yakala</h4>

							<div class="main-search-input">

								<div class="main-search-input-item">
									<input type="text" placeholder="Ne arıyorsunuz?" value="" />
								</div>
								<button class="button" onclick="window.location.href='javascript:'">Ara</button>

							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<h5 class="highlighted-categories-headline">veya öne çıkan kategorilere göz atın:</h5>

							<div class="highlighted-categories">
								<a href="javascript:" class="highlighted-category">
									<i class="im im-icon-Book"></i>
									<h4>Matematik</h4>
								</a>
								<a href="javascript:" class="highlighted-category">
									<i class="im im-icon-Laptop"></i>
									<h4>Yazılım</h4>
								</a>

								<a href="javascript:" class="highlighted-category">
									<i class="im im-icon-Photo"></i>
									<h4>Grafik Tasarım</h4>
								</a>
								<a href="javascript:" class="highlighted-category">
									<i class="im im-icon-Book"></i>
									<h4>Fizik</h4>
								</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="fullwidth padding-top-75 padding-bottom-70">

			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<h3 class="headline centered margin-bottom-45">
							<strong class="headline-with-separator">Popüler Dersler</strong>
							<!-- <span>Discover Top-Rated Local Businesses</span> -->
						</h3>
					</div>

					<div class="col-md-12">
						<div class="simple-slick-carousel dots-nav">




							<div class="carousel-item">
								<a href="javascript:" class="listing-item-container">
									<div class="listing-item">
										<img src="images/listing-item-01.jpg" alt="">

										<div class="listing-badge now-open">%35 indirim</div>

										<div class="listing-item-content">
											<span class="tag">Matematik</span>
											<h3>Özel matematik dersi <i class="verified-icon"></i></h3>
										</div>
										<!-- <span class="like-icon"></span> -->
									</div>
									<div class="star-rating" data-rating="4">
										<div class="rating-counter">(12 yorum)</div>
									</div>
								</a>
							</div>
							<div class="carousel-item">
								<a href="javascript:" class="listing-item-container">
									<div class="listing-item">
										<img src="images/listing-item-02.jpg" alt="">

										<div class="listing-badge now-open">%15 indirim</div>

										<div class="listing-item-content">
											<span class="tag">Yazılım</span>
											<h3>Özel php dersi <i class="verified-icon"></i></h3>
										</div>
										<!-- <span class="like-icon"></span> -->
									</div>
									<div class="star-rating" data-rating="4.5">
										<div class="rating-counter">(26 yorum)</div>
									</div>
								</a>
							</div>
							<div class="carousel-item">
								<a href="javascript:" class="listing-item-container">
									<div class="listing-item">
										<img src="images/listing-item-03.jpg" alt="">

										<div class="listing-badge now-open">%55 indirim</div>

										<div class="listing-item-content">
											<span class="tag">Fizik</span>
											<h3>Özel fizik dersi <i class="verified-icon"></i></h3>
										</div>
										<!-- <span class="like-icon"></span> -->
									</div>
									<div class="star-rating" data-rating="3.5">
										<div class="rating-counter">(5 yorum)</div>
									</div>
								</a>
							</div>

							
							<div class="carousel-item">
								<a href="javascript:" class="listing-item-container">
									<div class="listing-item">
										<img src="images/listing-item-01.jpg" alt="">

										<div class="listing-badge now-open">%35 indirim</div>

										<div class="listing-item-content">
											<span class="tag">Matematik</span>
											<h3>Özel matematik dersi <i class="verified-icon"></i></h3>
										</div>
										<!-- <span class="like-icon"></span> -->
									</div>
									<div class="star-rating" data-rating="4">
										<div class="rating-counter">(12 yorum)</div>
									</div>
								</a>
							</div>
							<div class="carousel-item">
								<a href="javascript:" class="listing-item-container">
									<div class="listing-item">
										<img src="images/listing-item-02.jpg" alt="">

										<div class="listing-badge now-open">%15 indirim</div>

										<div class="listing-item-content">
											<span class="tag">Yazılım</span>
											<h3>Özel php dersi <i class="verified-icon"></i></h3>
										</div>
										<!-- <span class="like-icon"></span> -->
									</div>
									<div class="star-rating" data-rating="4.5">
										<div class="rating-counter">(26 yorum)</div>
									</div>
								</a>
							</div>
							<div class="carousel-item">
								<a href="javascript:" class="listing-item-container">
									<div class="listing-item">
										<img src="images/listing-item-03.jpg" alt="">

										<div class="listing-badge now-open">%55 indirim</div>

										<div class="listing-item-content">
											<span class="tag">Fizik</span>
											<h3>Özel fizik dersi <i class="verified-icon"></i></h3>
										</div>
										<!-- <span class="like-icon"></span> -->
									</div>
									<div class="star-rating" data-rating="3.5">
										<div class="rating-counter">(5 yorum)</div>
									</div>
								</a>
							</div>

							

							





						</div>

					</div>

				</div>
			</div>

		</section>

		<div class="parallax" data-background="images/slider-bg-02.jpg" data-color="#36383e" data-color-opacity="0.6"
			data-img-width="800" data-img-height="505">

			<div class="text-content white-font">
				<div class="container">

					<div class="row">
						<div class="col-lg-6 col-sm-8">
							<h2>Samsun Özel Ders</h2>
							<p>Öğrenmenin Gücü Elinin Altında! Samsun Özel Ders, Başarıya Giden Yolda Yanında.</p>
							<a href="javascript:" class="button margin-top-25">Dersleri incele</a>
						</div>
					</div>

				</div>
			</div>
		</div>



		<div class="container">
			<div class="row">

				<div class="col-md-12">
					<h3 class="headline centered margin-bottom-35 margin-top-70">
						<strong class="headline-with-separator">Popüler Kategoriler</strong>
						<!-- <span>Top Destinations to Visit in 2019</span> -->
					</h3>
				</div>

				<div class="col-md-6">
					<a href="javascript:" class="img-box alternative-imagebox"
						data-background-image="images/popular-location-01.jpg">
						<div class="img-box-content visible">
							<h4>Matematik</h4>
							<span>26 Ders</span>
						</div>
					</a>

				</div>

				<div class="col-md-6">
					<a href="javascript:" class="img-box alternative-imagebox"
						data-background-image="images/popular-location-02.jpg">
						<div class="img-box-content visible">
							<h4>Yazılım</h4>
							<span>14 Ders</span>
						</div>
					</a>

				</div>

				<div class="col-md-4">
					<a href="javascript:" class="img-box alternative-imagebox"
						data-background-image="images/popular-location-03.jpg">
						<div class="img-box-content visible">
							<h4>Fizik </h4>
							<span>12 Ders</span>
						</div>
					</a>
				</div>

				<div class="col-md-4">
					<a href="javascript:" class="img-box alternative-imagebox"
						data-background-image="images/popular-location-04.jpg">
						<div class="img-box-content visible">
							<h4>Grafik Tasarım</h4>
							<span>9 Ders</span>
						</div>
					</a>
				</div>

				<div class="col-md-4">
					<a href="javascript:" class="img-box alternative-imagebox"
						data-background-image="images/popular-location-05.jpg">
						<div class="img-box-content visible">
							<h4>Yüzme</h4>
							<span>5 Ders</span>
						</div>
					</a>
				</div>

			</div>
		</div>


		<div class="container">
			<div class="row">

				<div class="col-md-12">
					<h3 class="headline centered margin-top-75">
						Samsun Özel Ders
						<span>Sizin için bazı <i>özel dersler</i></span>
					</h3>
				</div>

			</div>
		</div>


		<!-- Categories Carousel -->
		<div class="fullwidth-carousel-container margin-top-25">
			<div class="fullwidth-slick-carousel category-carousel">

			

				
				<div class="fw-carousel-item">
					<div class="category-box-container">
						<a href="javascript:" class="category-box"
							data-background-image="images/teachers-photos/teacher_2.jpg">
							<div class="category-box-content">
									<span class="tag">Kimya</span>
									<h3>Ahmet Yılmaz<i class="verified-icon"></i></h3>
									<div class="star-rating" data-rating="3.5">
										<div class="rating-counter">(5 yorum)</div>
									</div>
							</div>
							<!-- <span class="category-box-btn">Browse</span> -->
						</a>
					</div>
				</div>
				<div class="fw-carousel-item">
					<div class="category-box-container">
						<a href="javascript:" class="category-box"
							data-background-image="images/teachers-photos/teacher_3.jpg">
							<div class="category-box-content">
									<span class="tag">Yazılım</span>
									<h3>Mehmet Arslan<i class="verified-icon"></i></h3>
									<div class="star-rating" data-rating="4">
										<div class="rating-counter">(12 yorum)</div>
									</div>
							</div>
							<!-- <span class="category-box-btn">Browse</span> -->
						</a>
					</div>
				</div>
				<div class="fw-carousel-item">
					<div class="category-box-container">
						<a href="javascript:" class="category-box"
							data-background-image="images/teachers-photos/teacher_4.jpg">
							<div class="category-box-content">
									<span class="tag">Matematik</span>
									<h3>Zeynep Özcan<i class="verified-icon"></i></h3>
									<div class="star-rating" data-rating="4.5">
										<div class="rating-counter">(26 yorum)</div>
									</div>
							</div>
							<!-- <span class="category-box-btn">Browse</span> -->
						</a>
					</div>
				</div>
				<div class="fw-carousel-item">
					<div class="category-box-container">
						<a href="javascript:" class="category-box"
							data-background-image="images/teachers-photos/teacher_5.jpg">
							<div class="category-box-content">
									<span class="tag">Tarih</span>
									<h3>Elif Şahin<i class="verified-icon"></i></h3>
									<div class="star-rating" data-rating="3.5">
										<div class="rating-counter">(5 yorum)</div>
									</div>
							</div>
							<!-- <span class="category-box-btn">Browse</span> -->
						</a>
					</div>
				</div>
				<div class="fw-carousel-item">
					<div class="category-box-container">
						<a href="javascript:" class="category-box"
							data-background-image="images/teachers-photos/teacher_1.jpg">
							<div class="category-box-content">
									<span class="tag">Yazılım</span>
									<h3>Ayşe Kaya<i class="verified-icon"></i></h3>
									<div class="star-rating" data-rating="4.5">
										<div class="rating-counter">(26 yorum)</div>
									</div>
							</div>
							<!-- <span class="category-box-btn">Browse</span> -->
						</a>
					</div>
				</div>
				<div class="fw-carousel-item">
					<div class="category-box-container">
						<a href="javascript:" class="category-box"
							data-background-image="images/teachers-photos/teacher_6.jpg">
							<div class="category-box-content">
									<span class="tag">İngilizce</span>
									<h3>Emily Johnson<i class="verified-icon"></i></h3>
									<div class="star-rating" data-rating="3.5">
										<div class="rating-counter">(5 yorum)</div>
									</div>
							</div>
							<!-- <span class="category-box-btn">Browse</span> -->
						</a>
					</div>
				</div>
				<div class="fw-carousel-item">
					<div class="category-box-container">
						<a href="javascript:" class="category-box"
							data-background-image="images/teachers-photos/teacher_8.jpg">
							<div class="category-box-content">
									<span class="tag">Felsefe</span>
									<h3>Ali Demir<i class="verified-icon"></i></h3>
									<div class="star-rating" data-rating="3.5">
										<div class="rating-counter">(5 yorum)</div>
									</div>
							</div>
							<!-- <span class="category-box-btn">Browse</span> -->
						</a>
					</div>
				</div>
				<div class="fw-carousel-item">
					<div class="category-box-container">
						<a href="javascript:" class="category-box"
							data-background-image="images/teachers-photos/teacher_9.jpg">
							<div class="category-box-content">
									<span class="tag">Aşçılık</span>
									<h3>Mustafa Aksoy<i class="verified-icon"></i></h3>
									<div class="star-rating" data-rating="3.5">
										<div class="rating-counter">(5 yorum)</div>
									</div>
							</div>
							<!-- <span class="category-box-btn">Browse</span> -->
						</a>
					</div>
				</div>
				





			</div>
		</div>


		<a href="javascript:" class="flip-banner parallax margin-top-65"
			data-background="images/slider-bg-02.jpg" data-color="#f91942" data-color-opacity="0.85"
			data-img-width="2500" data-img-height="1666">
			<div class="flip-banner-content">
				<h2 class="flip-visible">Samsun özel ders, bilgiyle buluşmanın en güzel yolu</h2>
				<h2 class="flip-hidden">Tüm dersler <i class="sl sl-icon-arrow-right"></i></h2>
			</div>
		</a>


		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<img class="footer-logo" src="images/logo.png" alt="">
						<br><br>
						<p>Samsun Özel Ders olarak, öğrencilerimize bireysel öğrenme deneyimi sunmak ve onların potansiyellerini en üst düzeye çıkarmak için buradayız. Eğitimdeki zorlukları birlikte aşalım ve başarıya ulaşmak için birlikte çalışalım.

							<ul class="social-icons margin-top-20">
								<li><a class="instagram" href="javascript:"><i class="icon-instagram"></i></a></li>
								<li><a class="facebook" href="javascript:"><i class="icon-facebook"></i></a></li>
								<li><a class="twitter" href="javascript:"><i class="icon-twitter"></i></a></li>
							</ul>
						</p>
					</div>
					<br>
					<div class="col-md-6 col-sm-6">
						<h4>Bağlantılar</h4>
						<ul class="footer-links">
							<li><a href="#">Gizlilik Politikası</a></li>
							<li><a href="#">Şartlar ve Koşullar</a></li>
							<li><a href="#">Öğretmen olarak kayıt ol</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="copyrights">© 2024 Samsun özel ders | web design by <a href="https://webbeyaz.com/" target="_blank" rel="nofollow"><i class="fa-solid fa-laptop fa-spin"></i> <b>web</b>beyaz</a></div>
					</div>
				</div>

			</div>

		</div>
		<div id="backtotop"><a href="#"></a></div>
	</div>
	<!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script type="text/javascript" src="scripts/jquery-3.4.1.min.js"></script>
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
	<script src="scripts/leaflet.min.js"></script>
	<script src="scripts/leaflet-markercluster.min.js"></script>
	<script src="scripts/leaflet-gesture-handling.min.js"></script>
	<script src="scripts/leaflet-listeo.js"></script>
	<script src="scripts/leaflet-autocomplete.js"></script>
	<script src="scripts/leaflet-control-geocoder.js"></script>
	<script type="text/javascript" src="scripts/typed.js"></script> -->
	<script src="app.js"></script>
	<script>
		var typed = new Typed('.typed-words', {
			strings: ["Matematik", "Yazılım", "Grafik"],
			typeSpeed: 80,
			backSpeed: 80,
			backDelay: 4000,
			startDelay: 1000,
			loop: true,
			showCursor: true
		});
	</script>
</body>
</html>