<?php

include 'config.php';

$p_sql = "select * from `property` where permission = 'approved' order by rand()";

$p_result = $conn->query($p_sql);





?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Our Properties</title>

	<!-- Stylesheets -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
	<link href="assets/css/quote.css" rel="stylesheet" />

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
								<div class="logo">
									<a href="index.php">
										<img src="assets/images/FINAL A-01.png" alt="" title="">
									</a>
								</div>
							</div>
							<!-- End Logo Box -->
							<?php require 'header.php'; ?>
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
					<div class="nav-logo"><a href="index.php"><img src="assets/images/logo.svg" alt="" title=""></a>
					</div>
					<div class="menu-outer">
						<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
					</div>
				</nav>
			</div>
			<!-- End Mobile Menu -->

		</header>
		<!-- End Main Header -->


		<!-- Banner Two -->
		<section class="banner-two">
			<div class="banner-two_info">
				<!-- <a href="mailto:support@palace.com">support@palace.com</a> -->
				<!-- <span>
							<a href="tel:+815-804-8928">815-804-8928</a>
						</span> -->
			</div>
			<section class="page-title">

				<div class="page-title_gradient"></div>
				<div class="auto-container">
					<h2>Properties</h2>
					<ul class="bread-crumb clearfix bread-crumb-ul">
						<li><a href="index.php"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
						<li>Properties</li>
					</ul>
				</div>

			</section>

			<div class="auto-container">

				<!-- Content Column -->
				<div class="banner-two_content">
					<div class="banner-two_content-inner home-input">


						<div class="banner-tabs">
							<!-- Product Tabs -->
							<div class="prod-tabs tabs-box">

								<!-- Tab Btns -->
								<ul class="tab-btns tab-buttons clearfix">
									<li data-tab="#prod-buy" class="tab-btn active-btn">buy</li>
									<li data-tab="#prod-rent" class="tab-btn tab-btn2">rent</li>
								</ul>


								<!-- Tabs Container -->
								<div class="tabs-content">

									<!-- Tab -->
									<div class="tab active-tab" id="prod-buy">
										<div class="content">
											<!-- Default Form -->
											<div class="default-form">
												<!-- important -->
												<form method="post" action="property.php">
													<!-- important -->
													<div class="row clearfix">
														<div class="col-lg-3 col-md-6 col-sm-6 form-group">
															<label>City</label>
															<select name="country" class="custom-select-box">
																<option>Faisalabad</option>
																<option>Lahore</option>
																<option>Islamabad</option>
																<option>Quetta</option>
																<option>Karachi</option>
																<option>Peshawer</option>
																<option>Jhang</option>
																<option>Toba Tek Singh</option>
																<option>Gojra</option>
															</select>
														</div>

														<div class="col-lg-3 col-md-6 col-sm-6 form-group">
															<label>Location</label>
															<select name="country" class="custom-select-box">
																<option>Canal Road</option>
																<option>Saeed Colony</option>
																<option>Amin town</option>
																<option>Naishatabad</option>
															</select>
														</div>

														<div class="col-lg-3 col-md-6 col-sm-12 form-group">
															<label>Property Type</label>
															<select name="country" class="custom-select-box">
																<option>Flat </option>
																<option>Room </option>
																<option>House</option>
																<option>Apartment </option>
																<option>Office</option>
																<option>Portion</option>
															</select>
														</div>
														<div class="price-range col-lg-3 col-md-6 col-sm-12 form-group">
															<div style="display: flex; flex-direction: column;">
																<label>Price(From)</label>
																<input type="number" id="minPrice" placeholder="0"
																	min="0">
															</div>
															<div style="display: flex; flex-direction: column;">
																<label>(To Any)</label>
																<input type="number" id="maxPrice" placeholder="0"
																	min="0">
															</div>
														</div>

													</div>
													<!-- Button Box -->
													<div class="button-box">
														<a href="property-detail.php"></a>
														<button class="submit-btn">
															Search
															<i class="flaticon-search-interface-symbol"></i>
														</button>
													</div>

												</form>
											</div>
										</div>
									</div>

									<!-- Tab -->
									<div class="tab" id="prod-rent">
										<div class="content">
											<!-- Default Form -->
											<div class="default-form">
												<form method="post" action="property.php">
													<!-- important -->
													<div class="row clearfix">
														<div class="col-lg-3 col-md-6 col-sm-6 form-group">
															<label>City</label>
															<select name="country" class="custom-select-box">
																<option>Faisalabad</option>
																<option>Lahore</option>
																<option>Islamabad</option>
																<option>Quetta</option>
																<option>Karachi</option>
																<option>Peshawer</option>
																<option>Jhang</option>
																<option>Toba Tek Singh</option>
																<option>Gojra</option>
															</select>
														</div>

														<div class="col-lg-3 col-md-6 col-sm-6 form-group">
															<label>Location</label>
															<select name="country" class="custom-select-box">
																<option>Canal Road</option>
																<option>Saeed Colony</option>
																<option>Amin town</option>
																<option>Naishatabad</option>
															</select>
														</div>

														<div class="col-lg-3 col-md-6 col-sm-12 form-group">
															<label>Property Type</label>
															<select name="country" class="custom-select-box">
																<option>Flat </option>
																<option>Room </option>
																<option>House</option>
																<option>Apartment </option>
																<option>Office</option>
																<option>Portion</option>
															</select>
														</div>
														<div class="price-range col-lg-3 col-md-6 col-sm-12 form-group">
															<div style="display: flex; flex-direction: column;">
																<label>Price (From)</label>
																<input type="number" id="minPrice" placeholder="0"
																	min="0">
															</div>
															<div style="display: flex; flex-direction: column;">
																<label>(To Any)</label>
																<input type="number" id="maxPrice" placeholder="0"
																	min="0">
															</div>
														</div>

													</div>
													<!-- Button Box -->
													<div class="button-box">
														<a href="property-detail.php"></a>
														<button class="submit-btn">
															Search
															<i class="flaticon-search-interface-symbol"></i>
														</button>
													</div>
												</form>
											</div>
										</div>
									</div>

									<!-- Tab -->


								</div>
							</div>
						</div>


					</div>
				</div>

			</div>
		</section>

		<section class="property-three">
			<div class="auto-container">
				<div class="row clearfix">
					<?php

					if ($p_result) {
						while ($rows = $p_result->fetch_assoc()) {
							$gallery = json_decode($rows['gallery'], true);

							?>
							<!-- Property Block One -->
							<div class="property-block_one style-three col-lg-3 col-md-6 col-sm-12">
								<div class="property-block_one-inner wow fadeInLeft" data-wow-delay="0ms"
									data-wow-duration="1500ms">
									<div class="property-block_one-image">
										<div class="property-block_one-title">Featuerd</div>
										<a href="property-detail.php?id=<?php echo $rows['property_id'] ?>"><img
												src="admin/php/<?php echo $gallery[0] ?>" alt="" /></a>
									</div>
									<div class="property-block_one-content">
										<div class="property-block_one-location"><i
												class="flaticon-maps-and-flags"></i><?php echo $rows['address'] ?></div>
										<h4 class="property-block_one-heading"><a
												href="property-detail.php?id=<?php echo $rows['property_id'] ?>"><?php echo $rows['title'] ?></a></h4>
									</div>
									<div class="widget-content-buttons">
										<a href="" class="property-detail-button" style="text-decoration: none;">
											<img src="assets/images/icons/envelope.png" alt="">
											Email
										</a>
										<a href="" class="property-detail-button">
											<img src="./assets/images/icons/circle-phone.png" alt="">
											<span>Call</span>
										</a>
									</div>
									<a class="service-block_one-more" href="property-detail.php?id=<?php echo $rows['property_id'] ?>">
										Read More
										<i class="flaticon-next-1"></i>
									</a>
								</div>
							</div>
							<?php
						}
					} else {
						echo "no data found";
					}

					?>
				</div>
			</div>
		</section>
		<!--  -->
		<?php require 'footer.php'; ?>
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
	<script src="assets/js/magnific-popup.min.js"></script>
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<script src="assets/js/nav-tool.js"></script>
	<script src="assets/js/jquery-ui.js"></script>
	<script src="assets/js/validate.js"></script>
	<script src="assets/js/jquery.countdown.js"></script>
	<script src="assets/js/element-in-view.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/quote.js"></script>

</body>

</html>