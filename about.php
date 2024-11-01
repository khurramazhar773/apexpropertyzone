<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>About</title>

	<!-- Stylesheets -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
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
												<div class="logo"><a href="index.html"><img src="assets/images/FINAL A-01.png"
															alt="" title=""></a></div>
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

			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn"><span class="icon flaticon-close-1"></span></div>
				
				<nav class="menu-box">
					<div class="nav-logo"><a href="index.html"><img src="assets/images/logo.svg" alt="" title=""></a></div>
					<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
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

			<!-- Service Block One -->
			<div class="service-block_one col-lg-4 col-md-6 col-sm-12">
				<div class="service-block_one-inner">
					<div class="service-block_one_image"
						style="background-image:url(assets/images/aboutpage/block1.jpg)"></div>
					<div class="service-block_one-icon">
						<i class="flaticon-building"></i>
					</div>
					<h4 class="service-block_one-heading"><a href="service-detail.html">Building <br>
							Construction</a></h4>
					<div class="service-block_one-text">Lorem ipsum dolor sit amet consectetur adipiscing elit
						Ut et massa mi. Aliquam in hendrerit urna.</div>
					<a class="service-block_one-more" href="service-detail.html">Read More <i
							class="flaticon-next-1"></i></a>
				</div>
			</div>

			<!-- Service Block One -->
			<div class="service-block_one col-lg-4 col-md-6 col-sm-12">
				<div class="service-block_one-inner">
					<div class="service-block_one_image"
						style="background-image:url(assets/images/aboutpage/block2.jpg)"></div>
					<div class="service-block_one-icon">
						<i class="flaticon-interior-design"></i>
					</div>
					<h4 class="service-block_one-heading"><a href="service-detail2.html">Interior <br>
							designing</a></h4>
					<div class="service-block_one-text">Lorem ipsum dolor sit amet consectetur adipiscing elit
						Ut et massa mi. Aliquam in hendrerit urna.</div>
					<a class="service-block_one-more" href="service-detail2.html">Read More <i
							class="flaticon-next-1"></i></a>
				</div>
			</div>

			<!-- Service Block One -->
			<div class="service-block_one col-lg-4 col-md-6 col-sm-12">
				<div class="service-block_one-inner">
					<div class="service-block_one_image"
						style="background-image:url(assets/images/aboutpage/block3.jpg)"></div>
					<div class="service-block_one-icon">
						<i class="flaticon-building-1"></i>
					</div>
					<h4 class="service-block_one-heading"><a href="service-detail3.html">General <br>
							Construction</a></h4>
					<div class="service-block_one-text">Lorem ipsum dolor sit amet consectetur adipiscing elit
						Ut et massa mi. Aliquam in hendrerit urna.</div>
					<a class="service-block_one-more" href="service-detail3.html">Read More <i
							class="flaticon-next-1"></i></a>
				</div>
			</div>

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
<!-- End Testimonial Three -->
         


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
										<div class="footer-logo"><a href="index.html"><img src="assets/images/FINAL B 3-01.png" alt="" title=""></a></div>
										<div class="footer-text">Lorem ipsum dolor sit amet consecte adipiscing elit Ut et massa mi. Aliquam  hendrerit urna.</div>
										
										<h5 class="footer-title">Subscribe Now!</h5>
										<!-- Newsletter Box -->
										<div class="newsletter-box">
											<form method="post" action="contact.html">
												<div class="form-group">
													<input type="email" name="search-field" value="" placeholder="Your Email" required>
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
	<script src="assets/js/quote.js"></script>

	
</body>

</html>