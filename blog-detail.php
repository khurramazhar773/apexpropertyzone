<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Blog Detail</title>

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
			<!-- End Header Lower -->

			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn"><span class="icon flaticon-close-1"></span></div>

				<nav class="menu-box">
					<div class="nav-logo"><a href="index.php"><img src="assets/images/logo.svg" alt="" title=""></a>
					</div>
					<div class="menu-outer">

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
				<h2>Blog Detail</h2>
				<!-- <ul class="bread-crumb clearfix">
					<li><a href="index.html"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
					<li>Blog Detail</li>
				</ul> -->
			</div>

		</section>
		<!-- End Page Title -->


		<?php

		if (isset($_GET['id'])) {
			$property_id = intval($_GET['id']);

			// Prepare and execute the query
			$b_p_sql = "SELECT * FROM blog WHERE id =$property_id";
			$b_p_result = $conn->query($b_p_sql);

			// Check if a property was found
			if ($b_p_result) {
				$property = $b_p_result->fetch_assoc();
				$gallery = json_decode($property['img'], true);


				?>

				<div class="sidebar-page-container ms-lg-4 	">
					<div class="auto-container ms-lg-5  ">
						<div class="row clearfix">

							<!-- Content Side -->
							<div class="content-side col-lg-10 ms-lg-5  col-md-12 col-sm-12">
								<div class="blog-detail ms-lg-5 ">
									<div class="blog-detail_inner ">
										<div class="blog-detail_image">
											<img src="admin/php/<?php echo $gallery[0] ?>" alt="" />
										</div>
										<div class="blog-detail_content">
											<div class="blog-detail_author-outer d-flex align-items-center flex-wrap">
												<div class="blog-detail-author d-flex align-items-center flex-wrap">
													<div class="blog-detail-author-image">
														<img src="assets/images/workers/worker1.jpg" alt="" />
													</div>
													By Ellena M.Rice
												</div>

											</div>
											<h3 class="blog-detail_heading"><?php echo $property['title'] ?></h3>
											<p><?php echo $property['detail'] ?></p>
											<blockquote style="background-image:url(assets/images/background/pattern-6.png)">
												<i class="flaticon-quote"></i>
												Buy real estate in areas where the path exists and buy more real estate where
												there is no path
												<div class="d-flex justify-content-end">
													<span>David Waronker</span>
												</div>
											</blockquote>
										</div>
									</div>
								</div>
							</div>
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