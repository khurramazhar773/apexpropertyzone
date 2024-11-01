<?php
include "config.php";
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Service Details</title>

	<!-- Stylesheets -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="quote.css">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
		rel="stylesheet">
	<link href="AIzaSyDs97brJ-t3CvW7pbrq2ZmEliTZVEHf6PM" rel="stylesheet">
	<!-- TAB ICON -->
	<link rel="icon" href="assets/images/Layer 2.png" type="image/x-icon">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

	<div class="page-wrapper">

		<!-- Cursor -->
		<div class="cursor"></div>
		<div class="cursor-follower"></div>
		<!-- Cursor End -->

		<!-- Preloader -->
		<div class="preloader">
			<div class="box"></div>
		</div>

		<!-- Main Header / Header Style Four -->
		<header class="main-header header-style-four">

			<!-- Header Lower -->
			<div class="header-lower">
				<div class="auto-container">
					<div class="inner-container">
						<div class="d-flex justify-content-between align-items-center flex-wrap">

							<!-- Logo Box -->
							<div class="logo-box">
								<div class="logo"><a href="index.html"><img src="assets/images/FINAL A-01.png" alt=""
											title=""></a></div>
							</div>
							<!-- End Logo Box -->

							<!-- Nav Outer -->
							<div class="nav-outer d-flex align-items-center flex-wrap">
								<!-- Main Menu -->
								<nav class="main-menu navbar-expand-md">
									<div class="navbar-header">
										<!-- Toggle Button -->
										<button class="navbar-toggler" type="button" data-toggle="collapse"
											data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
											aria-expanded="false" aria-label="Toggle navigation">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>

									<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
										<ul class="navigation clearfix">
											<li><a href="index.html">Home</a>

											</li>
											<li><a href="about.html">About</a>

											</li>
											<li><a href="services.php">services</a>
											</li>
											<li><a href="property.html">property</a>

											</li>
											<li><a href="blog.html">Blog</a>

											</li>
											<li><a href="contact.html">Contact</a></li>
										</ul>
									</div>
								</nav>
							</div>
							<!-- End Nav Outer -->




							<!-- Outer Box -->
							<div class="outer-box d-flex align-items-center flex-wrap">
								<div class="header-options_box d-flex align-items-center">
									<a href="Sell.html" class="search-box-btn-anchor">
										<div class="search-box-btn">Add Property</div>
									</a>
								</div>

								<!-- Header Button Box -->

								<div class="header_button-box" id="openModalBtn">
									<a href="#" class="theme-btn btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">Get a Quote</span>
											<span class="text-two">Get a Quote</span>
										</span>
									</a>
									<!-- The Modal (hidden by default) -->
									<div id="quoteModal" class="modal">
										<div class="modal-content">
											<div class="logo-box">
												<div class="logo"><a href="index.html"><img
															src="assets/images/FINAL A-01.png" alt="" title=""></a>
												</div>
											</div>
											<div class="sec-title">
												<div class="sec-title_title ps-5">Contact Us</div>
												<h5 class="sec-title_heading ps-5 fw-bolder">Have Legal Queries? Leave
													Them to Us.</h5>

											</div>
											<!-- Your form content here -->
											<div class="contact-three_form-column col-lg-12 col-md-12 col-sm-12">
												<div class="contact-three_form-outer ">
													<div class="default-form contact-form">
														<form method="post" action="sendemail.php" id="contact-form">
															<div class="row clearfix">
																<!--Form Group-->
																<div class="form-group col-lg-6 col-md-6 col-sm-6">
																	<input type="text" name="username" value=""
																		placeholder="Name" required>
																</div>
																<!--Form Group-->
																<div class="form-group col-lg-6 col-md-6 col-sm-6">
																	<input type="email" name="email" value=""
																		placeholder="Email" required>
																</div>
																<div class="form-group col-lg-6 col-md-6 col-sm-6">
																	<input type="text" name="phone" value=""
																		placeholder="Phone" required>
																</div>
																<!--Form Group-->
																<div class="form-group col-lg-6 col-md-6 col-sm-6">
																	<select name="Service" class="service-dropdown">
																		<option value="">Services</option>
																		<option value="service01">Service 01</option>
																		<option value="service02">Service 02</option>
																		<option value="service03">Service 03</option>
																	</select>

																</div>
																<div class="form-group col-lg-6 col-md-6 col-sm-6">
																	<select name="Purpose" class="purpose-drowdown">
																		<option>Purpose</option>
																		<option>Sale</option>
																		<option>Purchase</option>
																		<option>Rent</option>
																	</select>
																</div>
																<div class="col-lg-12 col-md-12 col-sm-12 form-group">
																	<textarea name="message"
																		placeholder="Write a Message"></textarea>
																</div>
																<div class="form-group col-lg-12 col-md-12 col-sm-12">
																	<div
																		class="story-two_button d-flex align-items-center justify-content-end flex-wrap">
																		<a href="#" class="theme-btn btn-style-one">
																			<span class="btn-wrap">
																				<span class="text-one">SUBMIT</span>
																				<span class="text-two">SUBMIT</span>
																			</span>
																		</a>
																	</div>

																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Mobile Navigation Toggler -->
								<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
							</div>
							<!-- End Outer Box -->

						</div>
					</div>
				</div>
			</div>
			<!-- End Header Lower -->

			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn"><span class="icon flaticon-close-1"></span></div>

				<nav class="menu-box">
					<div class="nav-logo"><a href="index.html"><img src="assets/images/logo.svg" alt="" title=""></a>
					</div>
					<div class="menu-outer">
						<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
					</div>
				</nav>
			</div>
			<!-- End Mobile Menu -->

		</header>
		<!-- End Main Header -->

		<!-- Page Title -->
		<section class="page-title">

			<div class="page-title_gradient"></div>
			<div class="auto-container">
				<h2>Service Details</h2>
				<!-- <ul class="bread-crumb clearfix">
					<li><a href="index.html"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
					<li>Service Details</li>
				</ul> -->
			</div>

		</section>
		<!-- End Page Title -->

		<div class="sidebar-page-container style-two">
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Content Side -->
					<div class="content-side col-lg-8 col-md-12 col-sm-12">
						<div class="service-detail">
							<?php
							if (isset($_GET["service_id"])) {

								$service_id = $_GET['service_id'];
								$query = "select * from `service` where service_id = $service_id";
								$result = mysqli_query($conn, $query);
								while ($row = mysqli_fetch_assoc($result)) {
									$service_id = $row["service_id"];
									$service_title = $row["service_name"];
									$service_description = $row["service_desc"];
									$service_bg = $row["service_bg"];
									?>
									<div class="service-detail_inner">
										<div class="service-detail_image">
											<img src="admin/images/<?php echo $service_bg ?>" alt="No Internet!" />
										</div>
										<div class="service-detail_content">
											<h3 class="service-detail_heading">
												<?php echo $service_title ?>
											</h3>
											<p>
												<?php echo $service_description ?>
											</p>
										</div>
									</div>
									<?php
								}
							}
							?>
							<h4 class="service-detail_subheading">Business Growth</h4>
							<div class="service-detail_graph">
								<div class="row clearfix">
									<!-- Column -->
									<div class="column col-lg-4 col-md-4 col-sm-6">
										<!-- Graph Outer -->
										<div class="graph-outer">
											<input type="text" class="dial" data-fgColor="#eb2027"
												data-bgColor="#f9bcbe" data-width="150" data-height="150"
												data-linecap="normal" value="86" thickness="0.20" />
											<div class="graph_counter">
												<span class="odometer" data-count="86"></span><i>%</i>
											</div>
											<div class="dial-year">2020</div>
										</div>
									</div>
									<!-- Column -->
									<div class="column col-lg-4 col-md-4 col-sm-6">
										<!-- Graph Outer -->
										<div class="graph-outer">
											<input type="text" class="dial" data-fgColor="#eb2027"
												data-bgColor="#f9bcbe" data-width="150" data-height="150"
												data-linecap="normal" value="88" thickness="0.20" />
											<div class="graph_counter">
												<span class="odometer" data-count="88"></span><i>%</i>
											</div>
											<div class="dial-year">2022</div>
										</div>
									</div>
									<!-- Column -->
									<div class="column col-lg-4 col-md-4 col-sm-6">
										<!-- Graph Outer -->
										<div class="graph-outer">
											<input type="text" class="dial" data-fgColor="#eb2027"
												data-bgColor="#f9bcbe" data-width="150" data-height="150"
												data-linecap="normal" value="98" thickness="0.20" />
											<div class="graph_counter">
												<span class="odometer" data-count="98"></span><i>%</i>
											</div>
											<div class="dial-year">2024</div>
										</div>
									</div>
								</div>
							</div>
							<p>
								In the dynamic world of building construction, our company is dedicated to sustainable
								growth and innovation. We prioritize quality craftsmanship and efficient project
								management, ensuring timely delivery without compromising standards. By leveraging
								advanced technologies and sustainable practices, we reduce waste and enhance
								productivity, appealing to eco-conscious clients. <br>

								Our skilled team, with decades of combined experience, fosters strong client
								relationships built on trust and transparency. We adapt to market trends, continuously
								expanding our service offerings to include residential, commercial, and industrial
								projects. Strategic partnerships with suppliers and subcontractors enhance our
								capabilities, enabling us to tackle diverse projects effectively.
							</p>
						</div>
					</div>
					<!-- Sidebar Side -->
					<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
						<aside class="sidebar">
							<div class="sidebar-inner">
								<!-- Services Widget -->
								<div class="services-widget sidebar-widget">
									<div class="widget-content">
										<h5 class="sidebar-widget_title">Services</h5>
										<ul class="service-list_two">
											<?php
											$cat_query = "select* from `service`";
											$result = mysqli_query($conn, $cat_query);
											while ($row = mysqli_fetch_assoc($result)) {
												$service_name = $row["service_name"];
												?>
												<li>
													<a href="services.php"><?php echo $service_name ?>
														<span class="flaticon-next-1"></span></a>
												</li>
												<?php
											}
											?>

										</ul>
									</div>
								</div>

								<!-- Subscribe Widget -->
								<div class="sidebar-widget subscribe-widget">
									<div class="widget-content"
										style="background-image: url(admin/images/<?php echo $service_bg ?>)">
										<div class="title">
											<a href="contact.html">
												Subscribe Now
											</a>
										</div>
									</div>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</div>


		<footer class="main-footer">
			<div class="main-footer_pattern" style="background-image: url(assets/images/background/footer-1.png)"></div>
			<!-- Widgets Section -->
			<div class="widgets-section">
				<div class="auto-container">
					<div class="row clearfix">

						<!-- Big Column -->
						<div class="big-column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!-- Footer Column -->
								<div class="footer_column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget">
										<div class="footer-logo"><a href="index.html"><img
													src="assets/images/FINAL B 3-01.png" alt="" title=""></a></div>
										<div class="footer-text">Lorem ipsum dolor sit amet consecte adipiscing elit Ut
											et massa mi. Aliquam hendrerit urna.</div>

										<h5 class="footer-title">Subscribe Now!</h5>
										<!-- Newsletter Box -->
										<div class="newsletter-box">
											<form method="post" action="contact.html">
												<div class="form-group">
													<input type="email" name="search-field" value=""
														placeholder="Your Email" required>
													<button type="submit"><i class="flaticon-bell"></i></button>
												</div>
											</form>
										</div>
									</div>
								</div>

								<!-- Footer Column -->
								<div class="footer_column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget links-widget">
										<h5 class="footer-title">Our Company</h5>
										<ul class="footer-list">

											<li><a href="Policy.html">Our Policy</a></li>
											<li><a href="about.html">About</a></li>
											<li><a href="services.html">Our Services</a></li>
											<li><a href="contact.html">Contact</a></li>
											<li><a href="blog.html">Blog</a></li>

										</ul>
									</div>
								</div>

							</div>
						</div>

						<!-- Big Column -->
						<div class="big-column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!-- Footer Column -->
								<div class="footer_column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget links-widget">
										<h5 class="footer-title">Cities</h5>
										<ul class="footer-list">
											<li><a href="#">Lahore</a></li>
											<li><a href="#">Faisalabad</a></li>
											<li><a href="#">Karachi</a></li>
											<li><a href="#">Multan</a></li>
											<li><a href="#">Jhang</a></li>
											<!-- <li><a href="#">Gojra</a></li> -->
											<!-- <li><a href="#">Toba</a></li> -->
										</ul>
									</div>
								</div>

								<!-- Footer Column -->
								<div class="footer_column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget contact-widget">
										<h5 class="footer-title">Contact Information</h5>
										<ul class="footer-contact_list">
											<li>
												<span class="flaticon-pin"></span>
												1426 StreetBend,7702, <br> California, USA
											</li>
											<li>
												<span class="flaticon-telephone"></span>
												<a href="tel:+815-804-8928">815-804-8928</a>
											</li>
											<li>
												<span class="flaticon-mail-1"></span>
												<a href="mailto:support@palace.com">support@palace.com</a>
											</li>
										</ul>
										<div class="footer_socials">
											<a href="#"><img src="assets/images/banner/facebook.png" alt=""></a>
											<a href="#"><img src="assets/images/banner/instagram.png" alt=""></a>
											<a href="#"><img src="assets/images/banner/linkedin.png" alt=""></a>
											<a href="#"><img src="assets/images/banner/social.png" alt=""></a>
											<a href="#"><img src="assets/images/banner/youtube.png" alt=""></a>
											<a href="#"><img src="assets/images/banner/twitter.png" alt=""></a>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>

				</div>
			</div>
			<!-- End Widgets Section -->

			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="auto-container">
					<div class="col-lg-12 col-md-12 col-sm-6
					d-flex justify-content-evenly align-items-center flex-wrap">
						<div class="copyright text-wrap"> &copy; <a href="index.html">Apex Property Zone.</a>
							All Rights Reserved
						</div>
						<div class="copyright">
							Developed by : <a href="https://csoftsystems.com/">CSOFT System</a>
						</div>
					</div>
				</div>
			</div>

		</footer>
		<!-- End Main Footer -->

		<!-- Search Popup -->
		<div class="search-popup">
			<div class="color-layer"></div>
			<button class="close-search"><span class="flaticon-close"></span></button>
			<form method="post" action="blog.html">
				<div class="form-group">
					<input type="search" name="search-field" value="" placeholder="Search Here" required="">
					<button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
				</div>
			</form>
		</div>
		<!-- End Search Popup -->
		<!-- Sidebar Cart Item -->
		<div class="xs-sidebar-group info-group">
			<div class="xs-overlay xs-bg-black"></div>
			<div class="xs-sidebar-widget">
				<div class="sidebar-widget-container">
					<div class="close-button">
						<span class="fa-solid fa-xmark fa-fw"></span>
					</div>
					<div class="sidebar-textwidget">

						<!-- Sidebar Info Content -->
						<div class="sidebar-info-contents">
							<div class="content-inner">

								<!-- Title Box -->
								<div class="title-box">
									<h5>Explore Featured <span>Properties</span></h5>
									<div class="price">$500,000 from free economy shipping</div>
								</div>

								<!-- Empty Cart Box -->
								<div class="empty-cart-box">
									<!-- No Product -->
									<div class="no-cart">
										<span class="icon fa-solid fa-cart-flatbed-suitcase fa-fw"></span>
										No products in cart.
									</div>
								</div>

								<!-- Lower Box -->
								<div class="lower-box">
									<h5>Popular <span>Suggestions</span></h5>

									<!-- Post Block -->
									<div class="post-block">
										<div class="inner-box">
											<div class="image">
												<img src="assets/images/resource/post-thumb-1.jpg" alt="" />
											</div>
											<h6><a href="#">Dreams Villa</a></h6>
											<div class="rating">
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											</div>
											<div class="price-box">$225,000</div>
											<a class="theme-btn bag-btn" href="#">add to bag</a>
										</div>
									</div>

									<!-- Post Block -->
									<div class="post-block">
										<div class="inner-box">
											<div class="image">
												<img src="assets/images/resource/post-thumb-2.jpg" alt="" />
											</div>
											<h6><a href="#">Small Flats</a></h6>
											<div class="rating">
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											</div>
											<div class="price-box">$350,000</div>
											<a class="theme-btn bag-btn" href="#">add to bag</a>
										</div>
									</div>

									<!-- Post Block -->
									<div class="post-block">
										<div class="inner-box">
											<div class="image">
												<img src="assets/images/resource/post-thumb-3.jpg" alt="" />
											</div>
											<h6><a href="#">House luxury</a></h6>
											<div class="rating">
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											</div>
											<div class="price-box">$150,000</div>
											<a class="theme-btn bag-btn" href="#">add to bag</a>
										</div>
									</div>

								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End PageWrapper -->

	<div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>

	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/appear.js"></script>
	<script src="assets/js/parallax.min.js"></script>
	<script src="assets/js/tilt.jquery.min.js"></script>
	<script src="assets/js/jquery.paroller.min.js"></script>
	<script src="assets/js/wow.js"></script>
	<script src="assets/js/swiper.min.js"></script>
	<script src="assets/js/backtotop.js"></script>
	<script src="assets/js/odometer.js"></script>
	<script src="assets/js/parallax-scroll.js"></script>

	<script src="assets/js/gsap.min.js"></script>
	<script src="assets/js/SplitText.min.js"></script>
	<script src="assets/js/ScrollTrigger.min.js"></script>
	<script src="assets/js/ScrollToPlugin.min.js"></script>
	<script src="assets/js/ScrollSmoother.min.js"></script>

	<script src="assets/js/knob.js"></script>
	<script src="assets/js/magnific-popup.min.js"></script>
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<script src="assets/js/nav-tool.js"></script>
	<script src="assets/js/jquery-ui.js"></script>
	<script src="assets/js/validate.js"></script>
	<script src="assets/js/jquery.countdown.js"></script>
	<script src="assets/js/element-in-view.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/service.js"></script>
	<script src="assets/js/quote.js"></script>





</body>

</html>