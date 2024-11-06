<?php include '../config.php'; ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Property Detail</title>

	<!-- Stylesheets -->
	<link href="../assets/css/bootstrap.css" rel="stylesheet">
	<link href="../assets/css/style.css" rel="stylesheet">
	<link href="../assets/css/responsive.css" rel="stylesheet">
	<link href="../assets/css/quote.css" rel="stylesheet" />
	<link href="../assets/css/property.css" rel="stylesheet" />

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
		rel="stylesheet">
	<link href="AIzaSyDs97brJ-t3CvW7pbrq2ZmEliTZVEHf6PM" rel="stylesheet">
	<!-- TAB ICON -->
	<link rel="icon" href="../assets/images/Layer 2.png" type="image/x-icon">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js" defer></script>

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
								<div class="logo"><a href="index.php"><img src="../assets/images/FINAL A-01.png" alt=""
											title=""></a></div>
                                            <a href="aprove-property.php"><button>Back</button></a>
							</div>
							<!-- End Logo Box -->
							<?php //require '../header.php'; ?>
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
					<div class="nav-logo"><a href="index.php"><img src="../assets/images/logo.svg" alt="" title=""></a>
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

		if (isset($_GET['id'])) {
			$property_id = intval($_GET['id']);

			// Prepare and execute the query
			$d_p_sql = "SELECT * FROM property WHERE property_id =$property_id";
			$d_p_result = $conn->query($d_p_sql);

			// Check if a property was found
			if ($d_p_result) {
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
														<img src="php/<?php echo $gallery[0] ?>" alt="">
													</div>
												</div>
												<div class="col-lg-4 p-0">
													<div class="side-images">
														<img src="php/<?php echo $gallery[1] ?>" alt="">
														<img src="php/<?php echo $gallery[2] ?>" alt="">
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
													class="flaticon-maps-and-flags"></i><?php echo $property['address']; ?>
											</div>
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
															<li>Constructed
																Area<span><?php echo $property['constructed_area']; ?></span>
															</li>
															<li>Property
																Type<span><?php echo $property['property_type']; ?></span></li>

														</ul>
													</div>
													<!-- Column -->
													<div class="column col-lg-6 col-md-12 col-sm-12">
														<ul class="propert-info_list">
															<li>Lot Area<span><?php echo $property['lot_area']; ?></span></li>
															<li>Location<span><?php echo $property['location']; ?></span></li>
															<li>Electricity
																Meter<span><?php echo $property['elecMeter']; ?></span></li>
															<li>Gas Meter<span><?php echo $property['gasMeter']; ?></span></li>
															<li>Condition<span><?php echo $property['cond']; ?></span></li>
															<li>Price<span><?php echo $property['price']; ?></span></li>
															
															<li>Property For<span><?php echo $property['subtype']; ?></span>
															</li>
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
							<!-- booking form space -->
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

	<div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>

	<script src="../assets/js/jquery.js"></script>
	<script src="../assets/js/popper.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/appear.js"></script>
	<script src="../assets/js/parallax.min.js"></script>
	<script src="../assets/js/tilt.jquery.min.js"></script>
	<script src="../assets/js/jquery.paroller.min.js"></script>
	<script src="../assets/js/wow.js"></script>
	<script src="../assets/js/swiper.min.js"></script>
	<script src="../assets/js/backtotop.js"></script>
	<script src="../assets/js/odometer.js"></script>
	<script src="../assets/js/parallax-scroll.js"></script>

	<script src="../assets/js/gsap.min.js"></script>
	<script src="../assets/js/SplitText.min.js"></script>
	<script src="../assets/js/ScrollTrigger.min.js"></script>
	<script src="../assets/js/ScrollToPlugin.min.js"></script>
	<script src="../assets/js/ScrollSmoother.min.js"></script>

	<script src="../assets/js/magnific-popup.min.js"></script>
	<script src="../assets/js/jquery.meanmenu.min.js"></script>
	<script src="../assets/js/nav-tool.js"></script>
	<script src="../assets/js/jquery-ui.js"></script>
	<script src="../assets/js/validate.js"></script>
	<script src="../assets/js/jquery.countdown.js"></script>
	<script src="../assets/js/element-in-view.js"></script>
	<script src="../assets/js/script.js"></script>
	<script src="../assets/js/property.js"></script>
	<script src="../assets/js/quote.js"></script>
	<script src="../assets/js/property-detail.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<!--  -->
	<script>
		const imageUrls = <?php echo json_encode($gallery); ?>;
		const basePath = "php/";
		const adjustedImageUrls = imageUrls.map(url => basePath + url);
	</script>

</body>
</html>