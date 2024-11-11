<?php
include "config.php";
?>

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
	<link href="assets/css/quote.css" rel="stylesheet" />

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
		.sell-property {
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
								<div class="logo"><a href="index.php"><img src="assets/images/FINAL A-01.png" alt=""
											title=""></a></div>
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

		<!-- Page Title -->
		<section class="page-title">

			<div class="page-title_gradient"></div>
			<div class="auto-container">
				<h2>WANT TO SELL | Rent?</h2>
				<ul class="bread-crumb clearfix bread-crumb-ul">
					<li><a href="index.php"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
					<li>SELL</li>
				</ul>
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
								<form method="post" action="admin/php/user-property.php" id="contact-form" enctype="multipart/form-data">
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
											<select id="propertyType" name="property_type" class="form-control"
												onchange="updateSubtypes()">
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
											<input type="number" id="lotArea" name="lot_area"
												class="form-control sell-property">
										</div>

										<div class="form-group col-lg-6 col-md-6 col-sm-6">
											<label for="constructedArea">Constructed Area (sq ft):</label>
											<input type="number" id="constructedArea" name="constructed_area"
												class="form-control sell-property">
										</div>

										<div class="form-group col-lg-6 col-md-6 col-sm-6">
											<label for="location">Location:</label>
											<input type="text" id="location" name="location"
												class="form-control sell-property">
										</div>

										<div class="form-group col-lg-6 col-md-6 col-sm-6">
											<label for="title">Title:</label>
											<input type="text" name="title" id="title"
												class="form-control sell-property">
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
												<input type="number" id="residentialArea" name="area_sq"
													class="form-control">
											</div>
											<div class="form-group">
												<label for="residentialPrice">Price Range:</label>
												<input type="text" id="residentialPrice" name="price"
													class="form-control">
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
											<input type="file" id="imageUpload" name="additional_imgs[]"
												class="form-control-file" accept="image/*" multiple>
											<div id="imageContainer" class="image-preview-container"></div>
										</div>


										<!-- Description Textarea -->
										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<label for="description">Description:</label>
											<textarea id="description" name="description" rows="4" class="form-control"
												placeholder="Enter property description"></textarea>
										</div>

										<!-- Submit Button -->
										<button type="submit" name="submit"
											class="btn btn-primary sell-form-button">Submit</button>
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

	<!--  -->
	<?php require 'footer.php'; ?>
	<!--  -->

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