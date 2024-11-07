<?php
include "config.php";
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Our Services</title>

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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
		integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
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
				<h2>Our Services</h2>
				<ul class="bread-crumb clearfix bread-crumb-ul">
					<li><a href="index.php"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
					<li>Our Services</li>
				</ul>
			</div>

		</section>
		<!-- End Page Title -->

		<!-- Services Two -->
		<section class="services-two">
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Service Block One -->
					<?php
					$query = "SELECT * FROM `service` order by rand()";
					$temp = mysqli_query($conn, $query);
					if ($temp) {
						while ($row = mysqli_fetch_assoc($temp)) {
							$id = $row['service_id'];
							$heading = $row['service_name'];
							$desc = $row['service_desc'];
							$icon = $row['service_logo'];
							$bg_img = $row['service_bg'];
							?>
							<div class="service-block_one col-lg-4 col-md-6 col-sm-12">
								<div class="service-block_one-inner">
									<div class="service-block_one_image"
										style="background-image:url(admin/images/<?php echo $bg_img ?>)">
									</div>
									<div class="service-block_one-icon">
										<i class="<?php echo $icon ?>"></i>
									</div>
									<h4 class="service-block_one-heading"><a
											href="service-detail.php?service_id=<?php echo $id ?>"><?php echo $heading ?></a>
									</h4>
									<div class="service-block_one-text"
										style="display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2; overflow: hidden;  text-overflow: ellipsis;">
										<?php echo $desc ?></div>
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

		<!--  -->
		<?php require 'footer.php'; ?>
		<!--  -->
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