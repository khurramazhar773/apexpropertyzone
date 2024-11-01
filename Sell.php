<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>RENT | SELL</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- Stylesheets -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
	<link href="assets/css/quote.css" rel="stylesheet">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
		rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		rel="stylesheet">

	<!-- TAB ICON -->
	<link rel="icon" href="assets/images/Layer 2.png" type="image/x-icon">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<style>
		.sell-property{
			width: 100% !important;
			height: auto !important;
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
				<h2>WANT TO SELL | Rent?</h2>
				<!-- <ul class="bread-crumb clearfix">
					<li><a href="index.html"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
					<li>SELL</li>
				</ul> -->
			</div>
		</section>
		<!-- End Page Title -->

		<!-- Contact Three -->
		<section class="contact-three">
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Column -->
					<!-- Column -->

					<div class="contact-three_form-column col-lg-6 col-md-6 col-sm-12 p-4">
						<div class="contact-three_title-column col-lg-12 col-md-12 col-sm-12">
							<div class="sec-title">
								<div class="sec-title_title">Want to Sell | Rent?</div>
							</div>
						</div>
						<div class="contact-three_form-outer">
							<h3>Share Your Details</h3>
							<div class="default-form contact-form col-lg-12 col-md-6 col-sm-12">
								<form method="post" action="admin/php/user-property.php" id="contact-form">
									<div class="row clearfix">
										<!-- Name Input -->
										<div class="form-group col-lg-4 col-md-6 col-sm-6">
											<input type="text" name="username" value="" placeholder="Name" required
												class="custom-input">
										</div>

										<!-- Email Input -->
										<div class="form-group col-lg-4 col-md-6 col-sm-6">
											<input type="email" name="email" value="" placeholder="Email" required
												class="custom-input">
										</div>

										<!-- Phone Input -->
										<div class="form-group col-lg-4 col-md-6 col-sm-6">
											<input type="text" name="phone" value="" placeholder="Phone" required
												class="custom-input">
										</div>

										<!-- Address Input -->
										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<input type="text" name="address" value="" placeholder="Address" required
												class="custom-input">
										</div>



										<!-- Sale or Rent Dropdown -->
										<div class="form-group col-lg-6 col-md-12 col-sm-12">
											<label for="saleOrRent">Select:</label>
											<select id="saleOrRent" name="status" class="form-control">
												<option value="">Select Option</option>
												<option value="sale">For Sale</option>
												<option value="rent">For Rent</option>
											</select>
										</div>

										<!-- Property Type Dropdown -->
										<div class="form-group col-lg-6 col-md-6 col-sm-6">
											<label for="propertyType">Property Type:</label>
											<select id="propertyType" name="property_type" class="form-control" onchange="updateSubtypes()">
												<option value="">Select</option>
												<option value="residential">Residential</option>
												<option value="commercial">Commercial</option>
											</select>
										</div>

										<!-- Subtype Dropdown -->
										<div class="form-group col-lg-6 col-md-6 col-sm-6">
											<label for="propertySubtype">Subtype:</label>
											<select id="propertySubtype" name="Subtype" class="form-control">
												<!-- Options will be dynamically populated -->
											</select>
										</div>

										<!-- Dropdown for Bathrooms and Rooms -->
										<div class="form-group col-lg-6 col-md-6 col-sm-6">
											<label for="bathrooms">Bathrooms:</label>
											<select id="bathrooms" name="baths" class="form-control">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3+</option>
											</select>
										</div>
										<div class="form-group col-lg-6 col-md-6 col-sm-6">
											<label for="rooms">Rooms:</label>
											<select id="rooms" name="rooms" class="form-control">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3+</option>
											</select>
										</div>

										<!-- Dropdown for Bedrooms -->
										<div class="form-group col-lg-6 col-md-6 col-sm-6">
											<label for="bedrooms">Bedrooms:</label>
											<select id="bedrooms" name="bedrooms" class="form-control">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3+</option>
											</select>
										</div>

										<!-- Utilities Section -->
										<div class="form-group col-lg-6 col-md-6 col-sm-6">
											<label for="electricityMeter">Electricity Meter:</label>
											<select id="electricityMeter" name="electricityMeter" class="form-control">
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
										</div>
										<div class="form-group col-lg-6 col-md-6 col-sm-6">
											<label for="gasMeter">Sui Gas Meter:</label>
											<select id="gasMeter" name="gasMeter" class="form-control">
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
										</div>

										<!--  -->
										<div class="form-group col-lg-6 col-md-6 col-sm-6">
											<label for="lotArea">Lot Area (sq ft):</label>
											<input type="number" id="lotArea" name="lot_area" class="form-control sell-property">
										</div>
										
										<div class="form-group col-lg-6 col-md-6 col-sm-6">
											<label for="constructedArea">Constructed Area (sq ft):</label>
											<input type="number" id="constructedArea" name="constructed_area" class="form-control sell-property">
										</div>
										
										<div class="form-group col-lg-6 col-md-6 col-sm-6">
											<label for="location">Location:</label>
											<input type="text" id="location" name="location" class="form-control sell-property">
										</div>
										
										<div class="form-group col-lg-6 col-md-6 col-sm-6">
											<label for="title">Title:</label>
											<input type="text" name="title"  id="title" class="form-control sell-property">
										</div>
										
										<div class="form-group col-lg-6 col-md-6 col-sm-6">
											<label for="condition">Condition:</label>
											<select id="condition" name="condition" class="form-control">
												<option value="new">New</option>
												<option value="good">Good</option>
												<option value="fair">Fair</option>
												<option value="old">Old</option>
											</select>
										</div>
										<!--  -->
										<!-- Residential Section -->
										<div id="residentialSection" class="section" style="display: none;">
											<h4>Residential Details</h4>
											<div class="form-group">
												<label for="residentialArea">Area (sq ft):</label>
												<input type="number" id="residentialArea" name="area_sq" class="form-control">
											</div>
											<div class="form-group">
												<label for="residentialPrice">Price Range:</label>
												<input type="text" id="residentialPrice" name="price" class="form-control">
											</div>
										</div>

										<!-- Commercial Section -->
										<div id="commercialSection" class="section" style="display: none;">
											<h4>Commercial Details</h4>
											<div class="form-group">
												<label for="commercialArea">Area (sq ft):</label>
												<input type="number" id="commercialArea" class="form-control">
											</div>
											<div class="form-group">
												<label for="commercialPrice">Price Range:</label>
												<input type="text" id="commercialPrice" class="form-control">
											</div>
										</div>

										<!-- Multiple Image Upload -->
										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<label for="imageUpload">Upload Property Images:</label>
											<input type="file" id="imageUpload" name="additional_imgs[]" class="form-control-file"
												accept="image/*" multiple>
											<div id="imageContainer" class="image-preview-container"></div>
										</div>


										<!-- Description Textarea -->
										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<label for="description">Description:</label>
											<textarea id="description" name="description" rows="4" class="form-control"
												placeholder="Enter property description"></textarea>
										</div>

										<!-- Submit Button -->
										<button type="submit" name="submit" class="btn btn-primary sell-form-button">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>

					<div class="faq-two_title-column col-lg-5 col-md-12 col-sm-12 m-4">
						<div class="faq-two_title-outer">
							<!-- Sec Title -->
							<div class="sec-title">
								<div class="sec-title_title">Real Estate Policy</div>
								<h3 class="sec-title_heading">Introduction</h3>
								<div class="sec-title_text">
									This policy outlines the rules and guidelines for the
									management, maintenance, and occupancy of REAL ESTATE. It
									aims to ensure the safety, comfort, and satisfaction of all
									tenants and stakeholders.
								</div>
								<div class="sec-title_text">
									The policy applies to all building owners, management staff,
									tenants, contractors, and visitors.
								</div>
							</div>
							<div class="sec-title">
								<h3 class="sec-title_heading">Health and Safety</h3>
								<div class="sec-title_text">
									The building will have clearly marked emergency exits, fire
									alarms, and evacuation plans. Regular drills will be
									conducted.
								</div>
								<div class="sec-title_text">
									Security personnel and surveillance systems will be in place
									to ensure the safety of all occupants. Access control
									systems will be used to manage entry to the building
								</div>
								<div class="sec-title_text">
									All tenants must comply with fire safety regulations,
									including the installation and maintenance of smoke
									detectors and fire extinguishers.
								</div>
							</div>
							<div class="sec-title">
								<h3 class="sec-title_heading">Building Management</h3>
								<div class="sec-title_text">
									Building owners are responsible for maintaining the property
									in compliance with local regulations, including safety,
									health, and environmental standards.
								</div>
								<div class="sec-title_text">
									The appointed property management team will oversee
									day-to-day operations, maintenance, tenant relations, and
									financial management.
								</div>
								<div class="sec-title_text">
									Regular inspections, cleaning, and repairs are to be
									conducted to ensure the building remains in good condition.
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
	</div>
	</div>
	</section>
	<!-- Contact Three -->



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
				<div class="d-flex justify-content-evenly align-items-center flex-wrap">
					<div class="copyright"> &copy; 2024 <a href="#">Appex Property Zone</a> All Rights Reserved
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
	<script src="assets/js/Seller.js"></script>

</body>

</html>