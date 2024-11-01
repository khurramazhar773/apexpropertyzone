<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Apex Property Zone</title>

  <!-- Stylesheets -->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/responsive.css" rel="stylesheet" />
  <link href="assets/css/quote.css" rel="stylesheet" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet" />
  <link href="AIzaSyDs97brJ-t3CvW7pbrq2ZmEliTZVEHf6PM" rel="stylesheet" />
  <!-- TAB ICON -->
  <link rel="icon" href="assets/images/Layer 2.png" type="image/x-icon" />

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

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
    <header class="main-header header-style-two">
      <!-- Header Lower -->
      <div class="header-lower">
        <div class="auto-container">
          <div class="inner-container">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
              <!-- Logo Box -->
              <div class="logo-box">
                <div class="logo">
                  <a href="index.html">
                    <img src="assets/images/FINAL B 3-01.png" alt="" title="" />
                  </a>
                </div>
              </div>
              <!-- End Logo Box -->

              <!-- Nav Outer -->
              <div class="nav-outer d-flex align-items-center flex-wrap gap-2">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                  <div class="navbar-header">
                    <!-- Toggle Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                      aria-label="Toggle navigation">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  </div>

                  <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
										<ul class="navigation clearfix">
											<li><a href="index.html">Home</a></li>
											<li><a href="about.html">About</a></li>
											<li><a href="services.html">services</a></li>
											<li><a href="property.html">property</a></li>
											<li><a href="blog.html">Blog</a></li>
											<li><a href="contact.html">Contact</a></li>
											<li class="quote-property">
												<a href="Sell.html" class="quote-property">Add Property</a>
											</li>
										</ul>
                  </div>
                </nav>
              </div>
              <!-- End Nav Outer -->

              <!-- Outer Box -->
							<div class="outer-box d-flex align-items-center flex-wrap">
								<div class="header-options_box d-flex align-items-center">
									<a href="Sell.html" class="search-box-btn-anchor quote-btn-inner-box">
										<div class="search-box-btn">Add Property</div>
									</a>
								</div>

								<div class="header_button-box" id="openModalBtn">
									<a href="#" class="theme-btn btn-style-one trigger-btn quote-btn-home"
										data-bs-toggle="modal" data-bs-target="#quotationModal">
										<span class="btn-wrap">
											<span class="text-one">Get a Quote</span>
											<span class="text-two">Get a Quote</span>
										</span>
									</a>
									<!-- Modal -->
									<div class="modal fade" id="quotationModal" tabindex="-1"
										aria-labelledby="quotationModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-header">
													<img src="assets/images/FINAL A-01.png" alt="Logo" class="logo"
														style="height:auto;">
													<button type="button" class="btn-close" data-bs-dismiss="modal"
														aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<form>
														<div class="row">
															<div class="col-md-6">
																<input type="text"
																	class="form-control quote-top-inputs quote-form-group"
																	placeholder="Your Name" required>
															</div>
															<div class="col-md-6">
																<input type="tel"
																	class="form-control quote-top-inputs quote-form-group"
																	placeholder="Phone Number" required>
															</div>
														</div>

														<div class="row">
															<div class="col-md-6">
																<select
																	class="form-control form-select service-type quote-form-select"
																	id="serviceType" onchange="toggleFields()" required>
																	<option value="sell">Select Property</option>
																	<option value="sell">Sell Property</option>
																	<option value="buy">Buy Property</option>
																	<option value="rent">Rent/Lease Property</option>
																</select>
															</div>
															<div class="col-md-6">
																<select class="form-select quote-form-select">
																	<option selected>Select City</option>
																	<option>Faisalabad</option>
																	<option>Lahore</option>
																	<option>Islamabad</option>
																	<option>karachi</option>
																	<option>Patoki</option>
																</select>
															</div>
														</div>

														<!-- Seller Specific Fields -->
														<div class="seller-fields">
															<div class="row">
																<div class="col-md-6">
																	<input type="text"
																		class="form-control quote-title-inputs quote-form-group"
																		placeholder="Property Title/Name">
																</div>
																<div class="col-md-6">
																	<input type="text"
																		class="form-control quote-title-inputs quote-form-group"
																		placeholder="Complete Property Address">
																</div>
															</div>

															<div class="row">
																<div class="col-md-4">
																	<input type="number"
																		class="form-control quote-input quote-form-group"
																		placeholder="Property Area (sq ft)">
																</div>
																<div class="col-md-4">
																	<input type="number"
																		class="form-control quote-input quote-form-group"
																		placeholder="Expected Price">
																</div>
																<div class="col-md-4">
																	<select class="form-select quote-form-select">
																		<option selected>Property Age</option>
																		<option>Under Construction</option>
																		<option>0-2 years</option>
																		<option>2-5 years</option>
																		<option>5+ years</option>
																	</select>
																</div>
															</div>

															<div class="row">
																<div class="col-md-6">
																	<select class="form-select quote-form-select">
																		<option selected>Number of Bedrooms</option>
																		<option>1 BHK</option>
																		<option>2 BHK</option>
																		<option>3 BHK</option>
																		<option>4 BHK</option>
																		<option>4+ BHK</option>
																	</select>
																</div>
																<div class="col-md-6">
																	<select class="form-select quote-form-select">
																		<option selected>Furnishing Status</option>
																		<option>Fully Furnished</option>
																		<option>Semi Furnished</option>
																		<option>Unfurnished</option>
																	</select>
																</div>
															</div>
														</div>

														<!-- Buyer Specific Fields -->
														<div class="buyer-fields">
															<div class="row">
																<div class="col-md-6">
																	<select class="form-select quote-form-select">
																		<option selected>Subarban Area</option>
																		<option>Option 1</option>
																		<option>Option 2</option>
																		<option>Option 3</option>
																		<option>Option 4</option>
																	</select>
																</div>
																<div class="col-md-6">
																	<input type="number"
																		class="form-control quote-budget-input quote-form-group"
																		placeholder="Budget Range">
																</div>
															</div>
														</div>

														<div class="mb-3 mt-3">
															<div class="form-label">Property Type</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio"
																	name="propertyType" id="residential">
																<label
																	class="form-check-label property-type-label quote-radio-label"
																	for="residential">
																	Residential
																</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio"
																	name="propertyType" id="commercial">
																<label
																	class="form-check-label property-type-label quote-radio-label"
																	for="commercial">
																	Commercial
																</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio"
																	name="propertyType" id="industrial">
																<label
																	class="form-check-label property-type-label quote-radio-label"
																	for="industrial">
																	Industrial
																</label>
															</div>
														</div>

														<textarea class="form-control quote-textarea quote-form-group"
															rows="2" placeholder="Add Message"></textarea>

														<div class="text-center mt-4 mb-2">
															<button type="submit"
																class="btn btn-primary submit-btn">Submit
																Request</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Mobile Navigation Toggler -->
								<div class="mobile-nav-toggler">
									<span class="icon flaticon-menu"></span>
								</div>
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
        <div class="close-btn">
          <span class="icon flaticon-close-1"></span>
        </div>

        <nav class="menu-box">
          <div class="nav-logo">
            <a href="index.html"><img src="assets/images/logo.svg" alt="" title="" /></a>
          </div>
          <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
          </div>
        </nav>
      </div>
      <!-- End Mobile Menu -->
    </header>

    <!-- Banner Two -->
    <section class="banner-two">
      <div class="banner-two_info"></div>
      <div class="banner-two_socials">
        <a href="#"><img src="assets/images/banner/facebook.png" alt="" /></a>
        <a href="#"><img src="assets/images/banner/instagram.png" alt="" /></a>
        <a href="#"><img src="assets/images/banner/linkedin.png" alt="" /></a>
        <a href="#"><img src="assets/images/banner/social.png" alt="" /></a>
        <a href="#"><img src="assets/images/banner/youtube.png" alt="" /></a>
        <a href="#"><img src="assets/images/banner/twitter.png" alt="" /></a>
      </div>
      <!--  -->
      <div class="banner-two_image carousel">
        <div class="carousel-slide banner-two_image" style="background-image: url('assets/images/banner/banner.jpg');"></div>
        <div class="carousel-slide banner-two_image" style="background-image: url('assets/images/banner/banner2.jpg');"></div>
        <div class="carousel-slide banner-two_image" style="background-image: url('assets/images/banner/banner3.jpg');"></div>
      </div>

      <div class="auto-container">
        <!-- Content Column -->
        <div class="banner-two_content">
          <div class="banner-two_content-inner">
            <div class="banner-two_title">real estate</div>
            <h2 class="banner-two_heading">
              Your Gateway  <br />
              <span>to Luxury Living </span>
            </h2>

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
                        <form method="post" action="property.html">
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
                                <option>Flat</option>
                                <option>Room</option>
                                <option>House</option>
                                <option>Apartment</option>
                                <option>Office</option>
                                <option>Portion</option>
                              </select>
                            </div>
                            <div class="price-range col-lg-3 col-md-6 col-sm-12 form-group">
                              <div style="display: flex; flex-direction: column">
                                <label>Price(From)</label>
                                <input type="number" id="minPrice" placeholder="0" min="0" />
                              </div>

                              <div style="display: flex; flex-direction: column">
                                <label>(To Any)</label>
                                <input type="number" id="maxPrice" placeholder="0" min="0" />
                              </div>
                            </div>
                          </div>
                          <!-- Button Box -->
                          <div class="button-box">
                            <a href="property-detail.html"></a>
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
                        <form method="post" action="property.html">
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
                                <option>Flat</option>
                                <option>Room</option>
                                <option>House</option>
                                <option>Apartment</option>
                                <option>Office</option>
                                <option>Portion</option>
                              </select>
                            </div>
                            <div class="price-range col-lg-3 col-md-6 col-sm-12 form-group">
                              <div style="display: flex; flex-direction: column">
                                <label>Price(From)</label>
                                <input type="number" id="minPrice" placeholder="0" min="0" />
                              </div>

                              <div style="display: flex; flex-direction: column">
                                <label>(To Any)</label>
                                <input type="number" id="maxPrice" placeholder="0" min="0" />
                              </div>
                            </div>
                          </div>
                          <!-- Button Box -->
                          <div class="button-box">
                            <a href="property-detail.html"></a>
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
    <!-- End Banner Two -->

    <!-- Page Title -->
    <section class="page-title d-none">
      <div class="page-title_gradient"></div>
      <div class="auto-container">
        <h2>Contact us</h2>
        <!-- <ul class="bread-crumb clearfix">
					<li><a href="index.html"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
					<li>Contact us</li>
				</ul> -->
      </div>

      <div class="banner-two_socials_contact">
        <a href="#"><img src="assets/images/banner/facebook.png" alt="" /></a>
        <a href="#"><img src="assets/images/banner/instagram.png" alt="" /></a>
        <a href="#"><img src="assets/images/banner/linkedin.png" alt="" /></a>
        <a href="#"><img src="assets/images/banner/social.png" alt="" /></a>
        <a href="#"><img src="assets/images/banner/youtube.png" alt="" /></a>
        <a href="#"><img src="assets/images/banner/twitter.png" alt="" /></a>
      </div>
    </section>
    <!-- End Page Title -->

    <!-- Services One -->
    <section class="services-one">
      <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
          <div class="sec-title_title">Our Services</div>
          <h2 class="sec-title_heading mb-4">
            Take a stroll around <br />
            surroundings.
          </h2>
        </div>
        <div class="three-items_slider swiper-container">
          <div class="swiper-wrapper">
            <!-- Slide -->
            <div class="swiper-slide">
              <!-- Service Block One -->
              <div class="service-block_one">
                <div class="service-block_one-inner">
                  <div class="service-block_one_image" style="
                        background-image: url(assets/images/Carts/Building\ card\ 2.jpg);
                      "></div>
                  <div class="service-block_one-icon">
                    <i class="flaticon-building"></i>
                  </div>
                  <h4 class="service-block_one-heading">
                    <a href="service-detail.html">Building <br />
                      Construction</a>
                  </h4>
                  <div class="service-block_one-text">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit Ut
                    et massa mi. Aliquam in hendrerit urna.
                  </div>
                  <a class="service-block_one-more" href="service-detail.html">Read More <i
                      class="flaticon-next-1"></i></a>
                </div>
              </div>
            </div>
            <!-- Slide -->
            <div class="swiper-slide">
              <!-- Service Block One -->
              <div class="service-block_one">
                <div class="service-block_one-inner">
                  <div class="service-block_one_image" style="
                        background-image: url(assets/images/Carts/Building\ card\ 4.jpg);
                      "></div>
                  <div class="service-block_one-icon">
                    <i class="flaticon-interior-design"></i>
                  </div>
                  <h4 class="service-block_one-heading">
                    <a href="service-detail.html">Interior <br />
                      designing</a>
                  </h4>
                  <div class="service-block_one-text">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit Ut
                    et massa mi. Aliquam in hendrerit urna.
                  </div>
                  <a class="service-block_one-more" href="service-detail.html">Read More <i
                      class="flaticon-next-1"></i></a>
                </div>
              </div>
            </div>
            <!-- Slide -->
            <div class="swiper-slide">
              <!-- Service Block One -->
              <div class="service-block_one">
                <div class="service-block_one-inner">
                  <div class="service-block_one_image" style="
                        background-image: url(assets/images/Carts/Building\ card\ 5.jpg);
                      "></div>
                  <div class="service-block_one-icon">
                    <i class="flaticon-building-1"></i>
                  </div>
                  <h4 class="service-block_one-heading">
                    <a href="service-detail.html">General <br />
                      Construction</a>
                  </h4>
                  <div class="service-block_one-text">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit Ut
                    et massa mi. Aliquam in hendrerit urna.
                  </div>
                  <a class="service-block_one-more" href="service-detail.html">Read More <i
                      class="flaticon-next-1"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- If we need pagination -->
          <div class="three-items_slider-pagination"></div>
        </div>
      </div>
    </section>
    <!-- End Services One -->

    <!-- Story Two -->
    <section class="story-two">
      <div class="auto-container">
        <div class="row clearfix">
          <!-- Image Column -->
          <div class="story-two_image-column col-lg-6 col-md-12 col-sm-12">
            <div class="story-two_image-outer">
              <div class="story-two_image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <img src="assets/images/About/about2.jpg" alt="" />
              </div>
              <div class="story-two_image-two wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                <img src="assets/images/About/about1.jpg" alt="" />
              </div>
            </div>
          </div>

          <!-- Content Column -->
          <div class="story-two_content-column col-lg-6 col-md-12 col-sm-12">
            <div class="story-two_content-outer">
              <!-- Sec Title -->
              <div class="sec-title">
                <div class="sec-title_title">Discover Our Story</div>
                <h2 class="sec-title_heading">
                  Unveiling Palace Real Estate Journey
                </h2>
                <div class="sec-title_text">
                  Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et
                  massa mi. Aliquam in hendrerit urna. Pellentesque sit amet
                  sapien fringilla, mattis ligula consectetur, ultrices
                  mauris.
                </div>
              </div>
              <div class="row clearfix">
                <div class="column col-lg-6 col-md-6 col-sm-12">
                  <div class="story-two_check">
                    <i class="flaticon-check-mark"></i>Solution for small &
                    Big Real estate
                  </div>
                </div>
                <div class="column col-lg-6 col-md-6 col-sm-12">
                  <div class="story-two_check">
                    <i class="flaticon-check-mark"></i>Solution for small &
                    Big Real estate
                  </div>
                </div>
              </div>
              <ul class="story-two_checklist">
                <li>
                  <i class="flaticon-checked"></i> Lorem ipsum dolor sit amet
                  consectetur adipiscing elit
                </li>
                <li>
                  <i class="flaticon-checked"></i> Pellentesque sit amet
                  sapien fringilla, mattis ligula
                </li>
              </ul>
              <!-- Header Button Box -->
              <div class="story-two_button d-flex align-items-center flex-wrap">
                <a href="services.html" class="theme-btn btn-style-one">
                  <span class="btn-wrap">
                    <span class="text-one">Read More</span>
                    <span class="text-two">Read More</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Story Two -->

    <!-- Property One -->
    <section class="property-one style-two">
      <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
          <div class="sec-title_title">Latest Properties</div>
          <h2 class="sec-title_heading">
            Explore Featured <br />
            Properties
          </h2>
        </div>
        <div class="three-items_slider swiper-container">
          <div class="swiper-wrapper">
            <!-- Slide -->
            <div class="swiper-slide">
              <!-- Property Block One / Style Two -->
              <div class="property-block_one style-two">
                <div class="property-block_one-inner">
                  <div class="property-block_one-image">
                    <div class="property-block_one-title">Featuerd</div>
                    <img src="assets/images/Bedroom/beach2.jpg" alt="" />
                    <div class="property-block_one-image-content">
                      <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="property-block_one-price">
                          $2,400 <span>/month</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="property-block_one-content">
                    <div class="property-block_one-location">
                      <i class="flaticon-maps-and-flags"></i>Pasadena 809b-2,
                      Oklahoma
                    </div>
                    <h4 class="property-block_one-heading">
                      <a href="property-detail.html">Super deluxe bed room near sea beech</a>
                    </h4>
                    <div class="property-block_one-btn">
                      <a href="property-detail.html" class="theme-btn">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide -->
            <div class="swiper-slide">
              <!-- Property Block One / Style Two -->
              <div class="property-block_one style-two">
                <div class="property-block_one-inner">
                  <div class="property-block_one-image">
                    <div class="property-block_one-off">20% off</div>
                    <a href="property-detail.html"><img src="assets/images/Bedroom/beach3.jpg" alt="" /></a>
                    <div class="property-block_one-image-content">
                      <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="property-block_one-price">
                          $2,400 <span>/month</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="property-block_one-content">
                    <div class="property-block_one-location">
                      <i class="flaticon-maps-and-flags"></i>Pasadena 809b-2,
                      Oklahoma
                    </div>
                    <h4 class="property-block_one-heading">
                      <a href="property-detail.html">Luxury Villa with Sunset By Residence</a>
                    </h4>
                    <div class="property-block_one-btn">
                      <a href="property-detail.html" class="theme-btn">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide -->
            <div class="swiper-slide">
              <!-- Property Block One / Style Two -->
              <div class="property-block_one style-two">
                <div class="property-block_one-inner">
                  <div class="property-block_one-image">
                    <div class="property-block_one-title">Featuerd</div>
                    <a href="property-detail.html"><img src="assets/images/Bedroom/beach1.jpg" alt="" /></a>
                    <div class="property-block_one-image-content">
                      <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="property-block_one-price">
                          $2,400 <span>/month</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="property-block_one-content">
                    <div class="property-block_one-location">
                      <i class="flaticon-maps-and-flags"></i>Pasadena 809b-2,
                      Oklahoma
                    </div>
                    <h4 class="property-block_one-heading">
                      <a href="property-detail.html">Seaside Luxury Suite Sunset By Residence</a>
                    </h4>
                    <div class="property-block_one-btn">
                      <a href="property-detail.html" class="theme-btn">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- If we need pagination -->
          <div class="three-items_slider-pagination"></div>

          <!-- If we need navigation buttons -->
          <div class="three-items_slider-prev">
            <img src="assets/images/icons/prev-arrow.png" alt="" />
          </div>
          <div class="three-items_slider-next">
            <img src="assets/images/icons/next-arrow.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- End Property One -->

    <!-- Faq One -->
    <section class="faq-one">
      <div class="auto-container">
        <div class="row clearfix">
          <!-- Image Column -->
          <div class="faq-one_accordion-column col-lg-6 col-md-12 col-sm-12">
            <div class="faq-one_accordion-outer">
              <!-- Accordion Box -->
              <ul class="accordion-box">
                <!-- Block -->
                <li class="accordion block active-block">
                  <div class="acc-btn active">
                    <div class="icon-outer">
                      <span class="icon icon-plus flaticon-plus"></span>
                    </div>
                    What is the difference between a Realtor® & real estate?
                  </div>
                  <div class="acc-content current">
                    <div class="content">
                      <div class="text">
                        Closing costs typically range from 2% to 5% of the
                        home's purchase price. These costs include lender
                        fees, title insurance, appraisal fees, attorney fees,
                        and prepaid items like property taxes and homeowners
                        insurance.
                      </div>
                    </div>
                  </div>
                </li>

                <!-- Block -->
                <li class="accordion block">
                  <div class="acc-btn">
                    <div class="icon-outer">
                      <span class="icon icon-plus flaticon-plus"></span>
                    </div>
                    What factors should I consider when buying a home?
                  </div>
                  <div class="acc-content">
                    <div class="content">
                      <div class="text">
                        Closing costs typically range from 2% to 5% of the
                        home's purchase price. These costs include lender
                        fees, title insurance, appraisal fees, attorney fees,
                        and prepaid items like property taxes and homeowners
                        insurance.
                      </div>
                    </div>
                  </div>
                </li>

                <!-- Block -->
                <li class="accordion block">
                  <div class="acc-btn">
                    <div class="icon-outer">
                      <span class="icon icon-plus flaticon-plus"></span>
                    </div>
                    How much should I budget for purchasing a home?
                  </div>
                  <div class="acc-content">
                    <div class="content">
                      <div class="text">
                        Closing costs typically range from 2% to 5% of the
                        home's purchase price. These costs include lender
                        fees, title insurance, appraisal fees, attorney fees,
                        and prepaid items like property taxes and homeowners
                        insurance.
                      </div>
                    </div>
                  </div>
                </li>

                <!-- Block -->
                <li class="accordion block">
                  <div class="acc-btn">
                    <div class="icon-outer">
                      <span class="icon icon-plus flaticon-plus"></span>
                    </div>
                    What is a home appraisal, and why is it important?
                  </div>
                  <div class="acc-content">
                    <div class="content">
                      <div class="text">
                        Closing costs typically range from 2% to 5% of the
                        home's purchase price. These costs include lender
                        fees, title insurance, appraisal fees, attorney fees,
                        and prepaid items like property taxes and homeowners
                        insurance.
                      </div>
                    </div>
                  </div>
                </li>

                <!-- Block -->
                <li class="accordion block">
                  <div class="acc-btn">
                    <div class="icon-outer">
                      <span class="icon icon-plus flaticon-plus"></span>
                    </div>
                    What is a home inspection, and should I get one?
                  </div>
                  <div class="acc-content">
                    <div class="content">
                      <div class="text">
                        Closing costs typically range from 2% to 5% of the
                        home's purchase price. These costs include lender
                        fees, title insurance, appraisal fees, attorney fees,
                        and prepaid items like property taxes and homeowners
                        insurance.
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <!-- Content Column -->
          <div class="faq-one_image-column col-lg-6 col-md-12 col-sm-12">
            <div class="faq-one_image-outer">
              <!-- Sec Title -->
              <div class="sec-title">
                <div class="sec-title_title">Discover Our Story</div>
                <h2 class="sec-title_heading">
                  Unveiling Palace Real Estate Journey
                </h2>
                <div class="sec-title_text">
                  Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et
                  massa mi. Aliquam in hendrerit urna. Pellentesque sit amet
                  sapien fringilla, mattis ligula consectetur, ultrices
                  mauris.
                </div>
              </div>
              <div class="faq-one_image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                <img src="assets/images/palace/Versiles1.jpg" alt="" />
              </div>
              <!-- <a href="#" class="faq-one_chat">
								Live Chat <i><img src="assets/images/icons/chat-1.svg" alt="" /></i>
							</a> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Faq One -->

    <!-- Testimonial Two -->
    <section class="testimonial-two">
      <div class="testimonial-two_image" style="background-image: url(assets/images/back/testimonials.jpg)"></div>
      <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title light">
          <div class="sec-title_title">Client Feedback</div>
          <h2 class="sec-title_heading">
            Our happy clients <br />
            testimonials
          </h2>
        </div>
        <div class="inner-container">
          <div class="three-items_slider swiper-container">
            <div class="swiper-wrapper">
              <!-- Slide -->
              <div class="swiper-slide">
                <!-- Testimonial Block Two -->
                <div class="testimonial-block_two">
                  <div class="testimonial-block_two-inner">
                    <div class="testimonial-block_two-content">
                      <div class="testimonial-block_two-image">
                        <img src="assets/images/happy_clients/clients3.jpg" alt="" />
                      </div>
                      <div class="testimonial-block_two-rating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <div class="testimonial-block_two-text">
                        Lorem ipsum dolor sit amet conse apiscing elit Ut et
                        massa mi. Aliquam in h Petesque sit amet sapien
                        fringilla, mattis consectetur, ultrices mauris.
                        Maecenas vitae mattis tellus. Nullam quis imperdie.
                      </div>
                      <h4 class="testimonial-block_two-name">
                        Leslie Alexander <span>Online Broker</span>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide -->
              <div class="swiper-slide">
                <!-- Testimonial Block Two -->
                <div class="testimonial-block_two">
                  <div class="testimonial-block_two-inner">
                    <div class="testimonial-block_two-content">
                      <div class="testimonial-block_two-image">
                        <img src="assets/images/happy_clients/clients2.jpg" alt="" />
                      </div>
                      <div class="testimonial-block_two-rating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <div class="testimonial-block_two-text">
                        Lorem ipsum dolor sit amet conse apiscing elit Ut et
                        massa mi. Aliquam in h Petesque sit amet sapien
                        fringilla, mattis consectetur, ultrices mauris.
                        Maecenas vitae mattis tellus. Nullam quis imperdie.
                      </div>
                      <h4 class="testimonial-block_two-name">
                        Leslie Alexander <span>Online Broker</span>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide -->
              <div class="swiper-slide">
                <!-- Testimonial Block Two -->
                <div class="testimonial-block_two">
                  <div class="testimonial-block_two-inner">
                    <div class="testimonial-block_two-content">
                      <div class="testimonial-block_two-image">
                        <img src="assets/images/happy_clients/Clients4.jpg" alt="" />
                      </div>
                      <div class="testimonial-block_two-rating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <div class="testimonial-block_two-text">
                        Lorem ipsum dolor sit amet conse apiscing elit Ut et
                        massa mi. Aliquam in h Petesque sit amet sapien
                        fringilla, mattis consectetur, ultrices mauris.
                        Maecenas vitae mattis tellus. Nullam quis imperdie.
                      </div>
                      <h4 class="testimonial-block_two-name">
                        Leslie Alexander <span>Online Broker</span>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- If we need pagination -->
            <!-- <div class="three-items_slider-pagination"></div> -->

            <!-- If we need navigation buttons -->
            <div class="testimonial-two_navs">
              <div class="three-items_slider-prev fas fa-angle-left fa-fw"></div>
              <div class="three-items_slider-next fas fa-angle-right fa-fw"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonial Two -->

    <!-- Contact Two -->
    <section class="contact-two">
      <div class="auto-container">
        <div class="row clearfix">
          <!-- Image Column -->
          <div class="contact-two_image-column col-lg-6 col-md-12 col-sm-12">
            <div class="contact-two_image-outer">
              <div class="contact-two_image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <img src="assets/images/contact/contact.jpg" alt="" />
              </div>
              <!-- Phone Box -->
              <div class="contact-two_phone">
                <div class="contact-two_phone-inner">
                  <i class="flaticon-phone-call"></i>
                  Call Us Now! <br />
                  <a href="tel:+815-804-8928">815-804-8928</a>
                </div>
              </div>

              <div class="contact-two_image-content">
                <i class="flaticon-home"></i>
                <h5>Find the best deal</h5>
                <div class="text">Browse thousands of properties</div>
              </div>
            </div>
          </div>

          <!-- Content Column -->
          <div class="contact-two_content-column col-lg-6 col-md-12 col-sm-12">
            <div class="contact-two_content-outer">
              <!-- Sec Title -->
              <div class="sec-title">
                <div class="sec-title_title">contact with us</div>
                <h2 class="sec-title_heading">
                  reach out to us via contact details
                </h2>
              </div>
              <!-- Contact Form -->

              <div class="contact-form contact-with-us">
                <form method="post" action="contact.html">
                  <div class="form-group d-flex align-items-center justify-content-center">
                    <i class="flaticon-user"></i>
                    <input type="text" name="username" placeholder="Full Name" required="" />
                  </div>

                  <div class="form-group">
                    <i class="flaticon-mail"></i>
                    <input type="text" name="email" placeholder="Email Address" required="" />
                  </div>

                  <div class="form-group">
                    <i class="flaticon-telephone"></i>
                    <input type="text" name="phone" placeholder="Phone Number" required="" />
                  </div>

                  <div class="form-group">
                    <textarea class="" name="message" placeholder="Type Here..."></textarea>
                  </div>

                  <!-- Button Box -->
                  <div class="form-group">
                    <button class="submit-btn">Send Now</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Two -->

    <!-- Blog One -->
    <section class="blog-one">
      <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
          <div class="sec-title_title">Our BLog</div>
          <h2 class="sec-title_heading">read our latest blog</h2>
        </div>

        <div class="row clearfix">
          <!-- News Block One -->
          <div class="news-block_one style-two col-lg-4 col-md-6 col-sm-12">
            <div class="news-block_one-inner">
              <div class="news-block_one-image">
                <a href="blogdetails1.html"><img src="assets/images/Blog/blog1.jpg" alt="" /></a>
              </div>
              <div class="news-block_one-content">
                <ul class="news-block_one-meta">
                  <li>By Admin</li>
                  <li>6 min read</li>
                </ul>
                <h4 class="news-block_one-title">
                  <a href="blogdetails1.html">Home buying 101 Essential best Tips.</a>
                </h4>
                <a class="news-block_one-more" href="blogdetails1.html">Read More <i class="flaticon-next-1"></i></a>
              </div>
            </div>
          </div>

          <!-- News Block One -->
          <div class="news-block_one style-two col-lg-4 col-md-6 col-sm-12">
            <div class="news-block_one-inner">
              <div class="news-block_one-image">
                <a href="blogdetails1.html"><img src="assets/images/Blog/blog2.jpg" alt="" /></a>
              </div>
              <div class="news-block_one-content">
                <ul class="news-block_one-meta">
                  <li>By Admin</li>
                  <li>6 min read</li>
                </ul>
                <h4 class="news-block_one-title">
                  <a href="blogdetails1.html">Finding Dream Home: Step by Step with us</a>
                </h4>
                <a class="news-block_one-more" href="blogdetails1.html">Read More <i class="flaticon-next-1"></i></a>
              </div>
            </div>
          </div>

          <!-- News Block One -->
          <div class="news-block_one style-two col-lg-4 col-md-6 col-sm-12">
            <div class="news-block_one-inner">
              <div class="news-block_one-image">
                <a href="blogdetails1.html"><img src="assets/images/Blog/blog3.jpg" alt="" /></a>
              </div>
              <div class="news-block_one-content">
                <ul class="news-block_one-meta">
                  <li>By Admin</li>
                  <li>6 min read</li>
                </ul>
                <h4 class="news-block_one-title">
                  <a href="blogdetails1.html">Selling Your Home: Quick Pro Tips now</a>
                </h4>
                <a class="news-block_one-more" href="blogdetails1.html">Read More <i class="flaticon-next-1"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Blog One -->

    <!-- Cta One -->
    <section class="cta-one">
      <div class="auto-container">
        <div class="cta-one_inner-container d-flex justify-content-between align-items-center flex-wrap">
          <h2 class="cta-one_title end">
            let's talk
            <i><img src="assets/images/icons/arrow.png" alt="" /></i>
          </h2>
          <div class="cta-one_btn">
            <a class="theme-btn" href="contact.html">Contact Us Now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Cta One -->
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
                    <div class="footer-logo">
                      <a href="index.html"><img src="assets/images/FINAL B 3-01.png" alt="" title="" /></a>
                    </div>
                    <div class="footer-text">
                      Lorem ipsum dolor sit amet assa mi. Aliquam hendrerit
                      urna.
                    </div>

                    <h5 class="footer-title-subs">Subscribe Now!</h5>
                    <!-- Newsletter Box -->
                    <div class="newsletter-box">
                      <form method="post" action="contact.html">
                        <div class="form-group">
                          <input type="email" name="search-field" value="" placeholder="Your Email" required />
                          <button type="submit">
                            <i class="flaticon-bell"></i>
                          </button>
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
                        1426 StreetBend,7702, <br />
                        California, USA
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
                      <a href="#"><img src="assets/images/banner/facebook.png" alt="" /></a>
                      <a href="#"><img src="assets/images/banner/instagram.png" alt="" /></a>
                      <a href="#"><img src="assets/images/banner/linkedin.png" alt="" /></a>
                      <a href="#"><img src="assets/images/banner/social.png" alt="" /></a>
                      <a href="#"><img src="assets/images/banner/youtube.png" alt="" /></a>
                      <a href="#"><img src="assets/images/banner/twitter.png" alt="" /></a>
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
          <div class="col-lg-12 col-md-12 col-sm-6 d-flex justify-content-evenly align-items-center flex-wrap">
            <div class="copyright text-wrap">
              &copy; <a href="index.html">Appex Property Zone.</a>
              All Rights Reserved
            </div>
            <div class="copyright">
              Developed by :
              <a href="https://csoftsystems.com/">CSOFT System</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Main Footer -->

    <!-- Search Popup -->
    <div class="search-popup">
      <div class="color-layer"></div>
      <button class="close-search">
        <span class="flaticon-close"></span>
      </button>
      <form method="post" action="blog.html">
        <div class="form-group">
          <input type="search" name="search-field" value="" placeholder="Search Here" required="" />
          <button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
        </div>
      </form>
    </div>
    <!-- End Search Popup -->
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
  <script src="assets/js/header.js"></script>

</body>
</html>