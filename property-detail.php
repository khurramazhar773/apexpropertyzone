<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Property Detail</title>

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
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js" defer></script>
	<style>
		.popup-slider-modal {
			display: none;
			/* Hidden by default */
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.8);
			z-index: 100000;
			align-items: center;
			justify-content: center;
		}

		.popup-slider-content {
			position: relative;
			width: 80%;
			max-width: 800px;
			background: #fff;
			z-index: 100000;
		}

		.close-button {
			position: absolute;
			top: -10px;
			right: -200px;
			font-size: 50px;
			color: #ffffff;
			cursor: pointer;
			z-index: 200000;
		}

		.popupSwiper {
			width: 100%;
			height: 100%;
		}

		.popupSwiper swiper-slide img {
			width: 100%;
			height: auto;
			object-fit: cover;
		}

		.left-side-img {
			max-width: 540px;
			width: 100%;
			height: auto;
		}
	</style>

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
											<li><a href="services.html">services</a>
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
				<h2>Property Detail</h2>
				<!-- <ul class="bread-crumb clearfix">
					<li><a href="index.html"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
					<li>Property Detail</li>
				</ul> -->
			</div>

		</section>

		<?php

        if(isset($_GET['id'])){
        $property_id = intval($_GET['id']);

    // Prepare and execute the query
	$d_p_sql = "SELECT * FROM property WHERE property_id =$property_id";
    $d_p_result = $conn->query($d_p_sql);

    // Check if a property was found
    if($d_p_result){
        $property = $d_p_result->fetch_assoc();
        $gallery = json_decode($property['gallery'], true);
			
		
		?>

		<div class="sidebar-page-container">
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Content Side -->
					<div class="content-side col-lg-8 col-md-12 col-sm-12">
						<!-- Property Detail -->
						<div class="property-detail">
							<div class="property-detail_inner">
								<!-- Sidebar Image Slider -->
								<div class="row">
									<div class="sidebar-images-container">
										<div class="col-lg-8 p-0">
											<div class="left-side-img">
												<img src="admin/php/<?php echo $gallery[0] ?>" alt="">
											</div>
										</div>
										<div class="col-lg-4 p-0">
											<div class="side-images">
												<img src="admin/php/<?php echo $gallery[1] ?>" alt="">
												<img src="admin/php/<?php echo $gallery[2] ?>" alt="">
											</div>
										</div>
									</div>
								</div>
								<!-- Popup Modal -->
								<div id="popup-slider-modal" class="popup-slider-modal"
									onclick="closePopupIfClickedOutside(event)">
									<div class="popup-slider-content">
										<span class="close-button" onclick="closePopupSlider()">&times;</span>
										<swiper-container class="popupSwiper" pagination="true"
											pagination-clickable="true">
											<!-- Your Swiper slides go here; they will be generated dynamically with JavaScript -->
										</swiper-container>
									</div>
								</div>


								<!-- Property Detail Content -->
								<div class="property-detail_content">
									<h3 class="property-detail_heading"><?php echo $property['title'] ?></h3>
									<div class="property-detail_location"><i
											class="flaticon-maps-and-flags"></i><?php echo $property['address']; ?></div>
									<p><?php echo $property['description']; ?></p>
									<h4 class="property-detail_subheading">Properties Details</h4>
									<div class="propert-info">
										<div class="row clearfix">
											<!-- Column -->
											<div class="column col-lg-6 col-md-12 col-sm-12">
												<ul class="propert-info_list">
													<li>Property ID<span>OP630</span></li>
													<li>Home Area<span><?php echo $property['areaSq']; ?></span></li>
													<li>Rooms<span><?php echo $property['rooms']; ?></span></li>
													<li>Baths<span><?php echo $property['baths']; ?></span></li>
													<li>Bedroom<span><?php echo $property['bedrooms']; ?></span></li>
													<li>Constructed Area<span><?php echo $property['constructed_area']; ?></span></li>
													<li>Property Type<span><?php echo $property['property_type']; ?></span></li>
													
												</ul>
											</div>
											<!-- Column -->
											<div class="column col-lg-6 col-md-12 col-sm-12">
												<ul class="propert-info_list">
													<li>Lot Area<span><?php echo $property['lot_area']; ?></span></li>
													<li>Location<span><?php echo $property['location']; ?></span></li>
													<li>Electricity Meter<span><?php echo $property['elecMeter']; ?></span></li>
													<li>Gas Meter<span><?php echo $property['gasMeter']; ?></span></li>
													<li>Condition<span><?php echo $property['cond']; ?></span></li>
													<li>Price<span><?php echo $property['price']; ?></span></li>
													<li>Status<span><?php echo $property['status']; ?></span></li>
													<li>Property For<span><?php echo $property['subtype']; ?></span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Sidebar Side -->

					<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
						<aside class="sidebar">
							<div class="sidebar-inner">


								<div class="sidebar-widget message-widget"></div>
								<div class="widget-content">
									<div class="widget-content-buttons">
										<a href="" class="property-detail-button" style="text-decoration: none;">
											<img src="assets/images/banner/social.png" alt="">
											WhatsApp
										</a>
										<a href="" class="property-detail-button">
											<img src="./assets/images/icons/circle-phone.png" alt="">
											<span>Call</span>
										</a>
									</div>
									<div class="message-form">
										<form method="post" action="assets/php/booking.php">

											<!-- Form Group -->
											<div class="form-group">
												<input type="text" name="name" value="" placeholder="Name*" required>
											</div>

											<!--Form Group-->
											<div class="form-group">
												<input type="email" name="email" value="" placeholder="Email (Optional)"
													required>
											</div>
											<!-- contact number -->
											<div class="form-group">
												<input type="number" name="number" value="" placeholder="Contact Number*" required>
											</div>
											<input type="hidden" value="<?php echo $property['property_id']; ?>" name="propertyid">

											<div class="form-group">
												<textarea class="property-book-message" name="message"
													placeholder="Message"></textarea>
											</div>

											<div class="form-group">
												<button type="submit" name="submit" class="template-btn btn-style-one property-book-btn">
													<span class="btn-wrap">
														<span class="text-one">Book Property</span>
														<span class="text-two">Book Property</span>
													</span>
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>



					</div>
					</aside>
				</div>

			</div>
			
		</div>
		<?php
		 } else {
			echo "No property found.";
		}
	} else {
		echo "No property ID specified.";
	}
		?>
	</div>

	<!-- <div class="text-center mb-5">
		<div id="prevPage" class="three-items_slider-prev">
			<img src="assets/images/icons/prev-arrow.png" alt="Previous" />
		</div>
		<div id="nextPage" class="three-items_slider-next">
			<img src="assets/images/icons/next-arrow.png" alt="Next" />
		</div>
	</div> -->

	<!-- Main Footer -->
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
												src="assets/images/FINAL B 3-01.png" alt="" title=""></a>
									</div>
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
					<div class="copyright text-wrap"> &copy; <a href="index.html">Appex Property Zone.</a>
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

	<script src="assets/js/magnific-popup.min.js"></script>
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<script src="assets/js/nav-tool.js"></script>
	<script src="assets/js/jquery-ui.js"></script>
	<script src="assets/js/validate.js"></script>
	<script src="assets/js/jquery.countdown.js"></script>
	<script src="assets/js/element-in-view.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/property.js"></script>
	<script src="assets/js/quote.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<!--  -->
	<script>
    // Pass PHP array as JavaScript array
    const imageUrls = <?php echo json_encode($gallery); ?>;

    // Add the relative path to each image URL
    const basePath = "admin/php/";
    const adjustedImageUrls = imageUrls.map(url => basePath + url);
</script>

<script>
    // Now use `adjustedImageUrls` in the rest of your JavaScript
    let popupSwiper;

    function openPopupSlider(selectedIndex) {
        const popupSwiperContainer = document.querySelector('.popupSwiper');
        popupSwiperContainer.innerHTML = ''; // Clear previous slides

        // Generate slides with adjusted paths
        adjustedImageUrls.forEach((url, index) => {
            const slide = document.createElement('swiper-slide');
            const img = document.createElement('img');
            img.src = url;
            slide.appendChild(img);
            popupSwiperContainer.appendChild(slide);
        });

        if (!popupSwiper) {
            popupSwiper = new Swiper('.popupSwiper', {
                initialSlide: selectedIndex,
                pagination: { clickable: true },
                navigation: true,
                autoplay: false,
            });
        } else {
            popupSwiper.update();
            popupSwiper.slideTo(selectedIndex, 0);
        }

        document.getElementById('popup-slider-modal').style.display = 'flex';
    }

    function closePopupSlider() {
        document.getElementById('popup-slider-modal').style.display = 'none';
    }

    function closePopupIfClickedOutside(event) {
        const popupContent = document.querySelector('.popup-slider-content');
        if (!popupContent.contains(event.target)) {
            closePopupSlider();
        }
    }

    document.querySelectorAll('.sidebar-images-container img').forEach((img, index) => {
        img.addEventListener('click', () => openPopupSlider(index));
    });
</script>

	<!--  -->
	<script>
		function initMap() {
			var location = { lat: 40.758896, lng: -73.985130 }; // Example coordinates for 636 5th Ave, New York
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 18,
				center: location,
			});
			var marker = new google.maps.Marker({
				position: location,
				map: map,
			});
		}
	</script>

	<!-- Add the API key here -->
	<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDs97brJ-t3CvW7pbrq2ZmEliTZVEHf6PM&callback=initMap">
		</script>

</body>

</html>