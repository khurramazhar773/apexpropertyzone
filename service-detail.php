<?php
include "config.php";
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Service Details</title>

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
				<h2>Service Details</h2>
				<!-- <ul class="bread-crumb clearfix">
					<li><a href="index.html"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
					<li>Service Details</li>
				</ul> -->
			</div>

		</section>
		<!-- End Page Title -->

		<div class="sidebar-page-container style-two">
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Content Side -->
					<div class="content-side col-lg-8 col-md-12 col-sm-12">
						<div class="service-detail">
							<?php
							if (isset($_GET["service_id"])) {

								$service_id = $_GET['service_id'];
								$query = "select * from `service` where service_id = $service_id";
								$result = mysqli_query($conn, $query);
								while ($row = mysqli_fetch_assoc($result)) {
									$service_id = $row["service_id"];
									$service_title = $row["service_name"];
									$service_description = $row["service_desc"];
									$service_bg = $row["service_bg"];
									?>
									<div class="service-detail_inner">
										<div class="service-detail_image">
											<img src="admin/images/<?php echo $service_bg ?>" alt="No Internet!" />
										</div>
										<div class="service-detail_content">
											<h3 class="service-detail_heading">
												<?php echo $service_title ?>
											</h3>
											<p>
												<?php echo $service_description ?>
											</p>
										</div>
									</div>
									<?php
								}
							}
							?>
							<h4 class="service-detail_subheading">Business Growth</h4>
							<div class="service-detail_graph">
								<div class="row clearfix">
									<!-- Column -->
									<div class="column col-lg-4 col-md-4 col-sm-6">
										<!-- Graph Outer -->
										<div class="graph-outer">
											<input type="text" class="dial" data-fgColor="#eb2027"
												data-bgColor="#f9bcbe" data-width="150" data-height="150"
												data-linecap="normal" value="86" thickness="0.20" />
											<div class="graph_counter">
												<span class="odometer" data-count="86"></span><i>%</i>
											</div>
											<div class="dial-year">2020</div>
										</div>
									</div>
									<!-- Column -->
									<div class="column col-lg-4 col-md-4 col-sm-6">
										<!-- Graph Outer -->
										<div class="graph-outer">
											<input type="text" class="dial" data-fgColor="#eb2027"
												data-bgColor="#f9bcbe" data-width="150" data-height="150"
												data-linecap="normal" value="88" thickness="0.20" />
											<div class="graph_counter">
												<span class="odometer" data-count="88"></span><i>%</i>
											</div>
											<div class="dial-year">2022</div>
										</div>
									</div>
									<!-- Column -->
									<div class="column col-lg-4 col-md-4 col-sm-6">
										<!-- Graph Outer -->
										<div class="graph-outer">
											<input type="text" class="dial" data-fgColor="#eb2027"
												data-bgColor="#f9bcbe" data-width="150" data-height="150"
												data-linecap="normal" value="98" thickness="0.20" />
											<div class="graph_counter">
												<span class="odometer" data-count="98"></span><i>%</i>
											</div>
											<div class="dial-year">2024</div>
										</div>
									</div>
								</div>
							</div>
							<p>
								In the dynamic world of building construction, our company is dedicated to sustainable
								growth and innovation. We prioritize quality craftsmanship and efficient project
								management, ensuring timely delivery without compromising standards. By leveraging
								advanced technologies and sustainable practices, we reduce waste and enhance
								productivity, appealing to eco-conscious clients. <br>

								Our skilled team, with decades of combined experience, fosters strong client
								relationships built on trust and transparency. We adapt to market trends, continuously
								expanding our service offerings to include residential, commercial, and industrial
								projects. Strategic partnerships with suppliers and subcontractors enhance our
								capabilities, enabling us to tackle diverse projects effectively.
							</p>
						</div>
					</div>
					<!-- Sidebar Side -->
					<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
						<aside class="sidebar">
							<div class="sidebar-inner">
								<!-- Services Widget -->
								<div class="services-widget sidebar-widget">
									<div class="widget-content">
										<h5 class="sidebar-widget_title">Services</h5>
										<ul class="service-list_two">
											<?php
											$cat_query = "select* from `service`";
											$result = mysqli_query($conn, $cat_query);
											while ($row = mysqli_fetch_assoc($result)) {
												$service_name = $row["service_name"];
												?>
												<li>
													<a href="services.php"><?php echo $service_name ?>
														<span class="flaticon-next-1"></span></a>
												</li>
												<?php
											}
											?>

										</ul>
									</div>
								</div>

								<!-- Subscribe Widget -->
								<div class="sidebar-widget subscribe-widget">
									<div class="widget-content"
										style="background-image: url(admin/images/<?php echo $service_bg ?>)">
										<div class="title">
											<a href="contact.php">
												Subscribe Now
											</a>
										</div>
									</div>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</div>
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

	<script src="assets/js/knob.js"></script>
	<script src="assets/js/magnific-popup.min.js"></script>
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<script src="assets/js/nav-tool.js"></script>
	<script src="assets/js/jquery-ui.js"></script>
	<script src="assets/js/validate.js"></script>
	<script src="assets/js/jquery.countdown.js"></script>
	<script src="assets/js/element-in-view.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/service.js"></script>
	<script src="assets/js/quote.js"></script>

</body>
</html>