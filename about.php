<?php
include "config.php";
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>About</title>

	<!-- Stylesheets -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
	<link href="assets/css/quote.css" rel="stylesheet" />

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
								<div class="logo"><a href="index.php"><img src="assets/images/FINAL A-01.png" alt=""
											title=""></a></div>
							</div>
							<!-- End Logo Box -->

							<!-- Nav Outer -->
							<?php require 'header.php'; ?>
							<!-- End Outer Box -->

						</div>
					</div>
				</div>
			</div>

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
			<!-- End Header Lower -->
		</header>
		<!-- End Main Header -->

		<!-- Page Title -->
		<section class="page-title">

			<div class="page-title_gradient"></div>
			<div class="auto-container">
				<h2>About Us</h2>
				<!-- <ul class="bread-crumb clearfix">
					<li><a href="index.html"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
					<li>About Us</li>
				</ul> -->
			</div>

		</section>
		<!-- End Page Title -->



		<!-- Story One -->
		<section class="story-three">
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Image Column -->
					<div class="story-three_image-column col-lg-6 col-md-12 col-sm-12">
						<div class="story-three_image-outer">
							<div class="row clearfix">
								<div class="column col-lg-7 col-md-6 col-sm-6">
									<div class="story-three_image">
										<img src="assets/images/aboutpage/journey1.jpg" alt="" />
									</div>
								</div>
								<div class="column col-lg-5 col-md-6 col-sm-6">
									<div class="story-three_image">
										<img src="assets/images/aboutpage/journey2.jpg" alt="" />
									</div>
									<div class="story-three_clients">
										<div class="story-three_inner">
											<i class="flaticon-rating"></i>
											Client Centric Approach
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Content Column -->
					<div class="story-three_content-column col-lg-6 col-md-12 col-sm-12">
						<div class="story-three_content-outer">
							<!-- Sec Title -->
							<div class="sec-title">
								<div class="sec-title_title">Discover Our Story</div>
								<h2 class="sec-title_heading">Unveiling Appex Real Estate Journey</h2>
							</div>

							<!-- Story Tabs -->
							<div class="story-tabs">
								<!-- Story Tabs -->
								<div class="story-tab tabs-box">

									<!-- Tab Btns -->
									<ul class="tab-btns tab-buttons clearfix">
										<li data-tab="#prod-mission" class="tab-btn active-btn">Mission</li>
										<li data-tab="#prod-vission" class="tab-btn">Vission</li>
										<li data-tab="#prod-goal" class="tab-btn">Goal</li>
									</ul>

									<!-- Tabs Container -->
									<div class="tabs-content">

										<!-- Tab -->
										<div class="tab active-tab" id="prod-mission">
											<div class="content">
												<div class="text">Lorem ipsum dolor sit amet consectetur adipiscing elit
													Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet
													sapien fringilla, mattis ligula consectetur, ultrices mauris.
													Pellentesque sit amet sapien fringilla, mattis ligula consectetur.
												</div>
												<ul class="story-three_checklist" style="z-index: 5;">
													<li><i class="flaticon-checked"></i> Pellentesque sit amet sapien
														fringilla.</li>
													<li><i class="flaticon-checked"></i> Consectetur adipiscing elit Ut
														et massa.</li>
												</ul>
											</div>
										</div>

										<!-- Tab -->
										<div class="tab" id="prod-vission">
											<div class="content">
												<div class="text">Lorem ipsum dolor sit amet consectetur adipiscing elit
													Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet
													sapien fringilla, mattis ligula consectetur, ultrices mauris.
													Pellentesque sit amet sapien fringilla, mattis ligula consectetur.
												</div>
												<ul class="story-three_checklist">
													<li><i class="flaticon-checked"></i> Pellentesque sit amet sapien
														fringilla.</li>
													<li><i class="flaticon-checked"></i> Consectetur adipiscing elit Ut
														et massa.</li>
												</ul>
											</div>
										</div>

										<!-- Tab -->
										<div class="tab" id="prod-goal">
											<div class="content">
												<div class="text">Lorem ipsum dolor sit amet consectetur adipiscing elit
													Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet
													sapien fringilla, mattis ligula consectetur, ultrices mauris.
													Pellentesque sit amet sapien fringilla, mattis ligula consectetur.
												</div>
												<ul class="story-three_checklist">
													<li><i class="flaticon-checked"></i> Pellentesque sit amet sapien
														fringilla.</li>
													<li><i class="flaticon-checked"></i> Consectetur adipiscing elit Ut
														et massa.</li>
												</ul>
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Story Three -->

		<!-- Services One -->
		<section class="services-one style-two">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title centered">
					<div class="sec-title_title">Our Services</div>
					<h2 class="sec-title_heading">Take a stroll around <br> surroundings.</h2>
				</div>
				<div class="row clearfix">
					<?php
					$query = "SELECT * FROM `service` order by rand() limit 0,3";
					$temp = mysqli_query($conn, $query);
					if ($temp) {
						while ($row = mysqli_fetch_assoc($temp)) {
							$id = $row['service_id'];
							$heading = $row['service_name'];
							$desc = $row['service_desc'];
							$icon = $row['service_logo'];
							$bg_img = $row['service_bg'];
							?>
							<!-- Service Block One -->
							<div class="service-block_one col-lg-4 col-md-6 col-sm-12">
								<div class="service-block_one-inner">
									<div class="service-block_one_image"
										style="background-image:url(admin/images/<?php echo $bg_img ?>)"></div>
									<div class="service-block_one-icon">
										<i class="<?php echo $icon ?>"></i>
									</div>
									<h4 class="service-block_one-heading"><a
											href="service-detail.php?service_id=<?php echo $id ?>">
											<?php echo $heading ?>
									</h4>
									<div class="service-block_one-text"
										style="display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2; overflow: hidden;  text-overflow: ellipsis;">
										<?php echo $desc ?>
									</div>
									<a class="service-block_one-more"
										href="service-detail.php?service_id=<?php echo $id ?>">Read More <i
											class="flaticon-next-1"></i></a>
								</div>
							</div>
							<?php
						}
					}
					?>
				</div>
			</div>
		</section>
		<!-- End Services One -->

		<!-- Team One -->
		<section class="team-one">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title">
					<div class="sec-title_title">Our teams</div>
					<h2 class="sec-title_heading">Meet our Real Estates <br> Professional</h2>
				</div>
				<div class="four-items_slider swiper-container">
					<div class="swiper-wrapper">

						<!-- Slide -->
						<div class="swiper-slide">
							<!-- Team Block One -->
							<div class="team-block_one">
								<div class="team-block_one-inner">
									<div class="team-block_one-image_outer">
										<div class="team-block_one-image">
											<img src="assets/images/aboutpage/worker1.jpg" alt="" />
											<!-- Socials -->
											<div class="team-block_one-socials">
												<div class="team-block_one-socials-inner">

												</div>
											</div>
										</div>
									</div>
									<div class="team-block_one-content">
										<div class="d-flex justify-content-between align-items-center flex-wrap">
											<div class="content">
												<h6 class="team-block_one-heading">Leslie Alexander</h6>
												<div class="team-block_one-designation">Sr. Director</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Slide -->
						<div class="swiper-slide">
							<!-- Team Block One -->
							<div class="team-block_one">
								<div class="team-block_one-inner">
									<div class="team-block_one-image_outer">
										<div class="team-block_one-image">
											<img src="assets/images/aboutpage/worker2.jpg" alt="" />
											<!-- Socials -->
											<div class="team-block_one-socials">
												<div class="team-block_one-socials-inner">

												</div>
											</div>
										</div>
									</div>
									<div class="team-block_one-content">
										<div class="d-flex justify-content-between align-items-center flex-wrap">
											<div class="content">
												<h6 class="team-block_one-heading">Jenny Wilson</h6>
												<div class="team-block_one-designation">Sr. Manager</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Slide -->
						<div class="swiper-slide">
							<!-- Team Block One -->
							<div class="team-block_one">
								<div class="team-block_one-inner">
									<div class="team-block_one-image_outer">
										<div class="team-block_one-image">
											<img src="assets/images/aboutpage/worker3.jpg" alt="" />
											<!-- Socials -->
											<div class="team-block_one-socials">
												<div class="team-block_one-socials-inner">

												</div>
											</div>
										</div>
									</div>
									<div class="team-block_one-content">
										<div class="d-flex justify-content-between align-items-center flex-wrap">
											<div class="content">
												<h6 class="team-block_one-heading">Arlene McCoy</h6>
												<div class="team-block_one-designation">Sr. HRM</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Slide -->
						<div class="swiper-slide">
							<!-- Team Block One -->
							<div class="team-block_one">
								<div class="team-block_one-inner">
									<div class="team-block_one-image_outer">
										<div class="team-block_one-image">
											<img src="assets/images/aboutpage/worker4.jpg" alt="" />
											<!-- Socials -->
											<div class="team-block_one-socials">
												<div class="team-block_one-socials-inner">

												</div>
											</div>
										</div>
									</div>
									<div class="team-block_one-content">
										<div class="d-flex justify-content-between align-items-center flex-wrap">
											<div class="content">
												<h6 class="team-block_one-heading">Theresa Webb</h6>
												<div class="team-block_one-designation">Sr. Marketing</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<!-- If we need pagination -->
					<div class="four-items_slider-pagination"></div>

					<!-- If we need navigation buttons -->
					<div class="four-items_slider-prev"><img src="assets/images/icons/prev-arrow.png" alt="" /></div>
					<div class="four-items_slider-next"><img src="assets/images/icons/next-arrow.png" alt="" /></div>

				</div>

			</div>
		</section>

		<!-- End Team One -->



		<!-- Testimonial Three -->
		<section class="testimonial-three style-two">
			<div class="auto-container">
				<div class="inner-container">
					<!-- Sec Title -->
					<div class="sec-title">
						<div class="sec-title_title">Explore Cities</div>
						<h2 class="sec-title_heading">Client Testimonials</h2>
					</div>
					<div class="two-items_slider swiper-container">
						<div class="swiper-wrapper">

							<!-- Slide -->
							<div class="swiper-slide">
								<!-- Testimonial Block Two -->
								<div class="testimonial-block_three">
									<div class="testimonial-block_three-inner">
										<div class="testimonial-block_three-rating">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="testimonial-block_three-text">Lorem ipsum dolor sit amet consectetur
											adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit
											amet sapien fringilla, mattis ligula consectetur, ultrices mauris.
											Pellentesque sit amet sapien fringilla, mattis ligula consectetur. </div>
										<div class="testimonial-block_three-author">
											<span><img src="assets/images/aboutpage/worker1.jpg" alt="" /></span>
											<strong>Leslie Alexander</strong>
											Online Broker
										</div>
										<div class="testimonial-block_three-quote"><img
												src="assets/images/icons/quote-1.svg" alt="" /></div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="swiper-slide">
								<!-- Testimonial Block Two -->
								<div class="testimonial-block_three">
									<div class="testimonial-block_three-inner">
										<div class="testimonial-block_three-rating">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="testimonial-block_three-text">Lorem ipsum dolor sit amet consectetur
											adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit
											amet sapien fringilla, mattis ligula consectetur, ultrices mauris.
											Pellentesque sit amet sapien fringilla, mattis ligula consectetur. </div>
										<div class="testimonial-block_three-author">
											<span><img src="assets/images/aboutpage/worker2.jpg" alt="" /></span>
											<strong>Leslie Alexander</strong>
											Online Broker
										</div>
										<div class="testimonial-block_three-quote"><img
												src="assets/images/icons/quote-1.svg" alt="" /></div>
									</div>
								</div>
							</div>
						</div>

						<!-- If we need pagination -->
						<div class="two-items_slider-pagination"></div>
						<!-- If we need navigation buttons -->
						<div class="two-items_slider-prev"><img src="assets/images/icons/prev-arrow.png" alt="" /></div>
						<div class="two-items_slider-next"><img src="assets/images/icons/next-arrow.png" alt="" /></div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!--  -->
	<?php require 'footer.php'; ?>
	<!--  -->

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