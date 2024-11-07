<?php

include 'config.php';

$b_p_sql = "SELECT * FROM blog";

$b_p_result = $conn->query($b_p_sql);

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> Blog</title>

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
				<h2>Blog</h2>
				<ul class="bread-crumb clearfix bread-crumb-ul">
					<li><a href="index.php"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
					<li>Blog</li>
				</ul>
			</div>

		</section>
		<!-- End Page Title -->

		<!-- Blog Three -->
		<section class="blog-three">
			<div class="auto-container">
				<div class="row clearfix">
					<?php

					if ($b_p_result) {
						while ($rows = $b_p_result->fetch_assoc()) {
							$gallery = json_decode($rows['img'], true);

							?>
							<!-- News Block One -->
							<div class="news-block_one style-two col-lg-4 col-md-6 col-sm-12">
								<div class="news-block_one-inner">
									<div class="news-block_one-image">
										<a href="blog-detail.php?id=<?php echo $rows['id'] ?>"><img
												src="admin/php/<?php echo $gallery[0] ?>" alt="" /></a>
									</div>
									<div class="news-block_one-content">
										<ul class="news-block_one-meta">
											<li>By Admin</li>
											<li>6 min read</li>
										</ul>
										<h4 class="news-block_one-title"><a
												href="blogdetail.php"><?php echo $rows['title'] ?></a></h4>
										<a class="news-block_one-more" href="blogdetail.php">Read More <i
												class="flaticon-next-1"></i></a>
									</div>
								</div>
							</div>
							<?php
						}
					} else {
						echo "no data found";
					}

					?>
					<!-- News Block One -->
					<div class="news-block_one style-two col-lg-4 col-md-6 col-sm-12">
						<div class="news-block_one-inner">
							<div class="news-block_one-image">
								<a href="blogdetail.php"><img src="assets/images/Blog/blog2.jpg" alt="" /></a>
							</div>
							<div class="news-block_one-content">
								<ul class="news-block_one-meta">
									<li>By Admin</li>
									<li>6 min read</li>
								</ul>
								<h4 class="news-block_one-title"><a href="blogdetail.php">Finding Dream Home: Step by
										Step with us</a></h4>
								<a class="news-block_one-more" href="blogdetail.php">Read More <i
										class="flaticon-next-1"></i></a>
							</div>
						</div>
					</div>

					<!-- News Block One -->
					<div class="news-block_one style-two col-lg-4 col-md-6 col-sm-12">
						<div class="news-block_one-inner">
							<div class="news-block_one-image">
								<a href="blogdetail.php"><img src="assets/images/Blog/blog3.jpg" alt="" /></a>
							</div>
							<div class="news-block_one-content">
								<ul class="news-block_one-meta">
									<li>By Admin</li>
									<li>6 min read</li>
								</ul>
								<h4 class="news-block_one-title"><a href="blogdetail.php">Selling Your Home: Quick
										Pro
										Tips now</a></h4>
								<a class="news-block_one-more" href="blogdetail.php">Read More <i
										class="flaticon-next-1"></i></a>
							</div>
						</div>
					</div>

					<!-- News Block One -->
					<div class="news-block_one style-two col-lg-4 col-md-6 col-sm-12">
						<div class="news-block_one-inner">
							<div class="news-block_one-image">
								<a href="blogdetail.php"><img src="assets/images/Blog/blog4.jpg" alt="" /></a>
							</div>
							<div class="news-block_one-content">
								<ul class="news-block_one-meta">
									<li>By Admin</li>
									<li>6 min read</li>
								</ul>
								<h4 class="news-block_one-title"><a href="blogdetail.php">Top 10 Neighborhoods for
										Families</a></h4>
								<a class="news-block_one-more" href="blogdetail.php">Read More <i
										class="flaticon-next-1"></i></a>
							</div>
						</div>
					</div>

					<!-- News Block One -->
					<div class="news-block_one style-two col-lg-4 col-md-6 col-sm-12">
						<div class="news-block_one-inner">
							<div class="news-block_one-image">
								<a href="blogdetail.php"><img src="assets/images/Blog/blog5.jpg" alt="" /></a>
							</div>
							<div class="news-block_one-content">
								<ul class="news-block_one-meta">
									<li>By Admin</li>
									<li>6 min read</li>
								</ul>
								<h4 class="news-block_one-title"><a href="blogdetail.php">10 Must-Have Features to
										Look for in Home</a></h4>
								<a class="news-block_one-more" href="blogdetail.php">Read More <i
										class="flaticon-next-1"></i></a>
							</div>
						</div>
					</div>

					<!-- News Block One -->
					<div class="news-block_one style-two col-lg-4 col-md-6 col-sm-12">
						<div class="news-block_one-inner">
							<div class="news-block_one-image">
								<a href="blogdetail.php"><img src="assets/images/Blog/blog6.jpg" alt="" /></a>
							</div>
							<div class="news-block_one-content">
								<ul class="news-block_one-meta">
									<li>By Admin</li>
									<li>6 min read</li>
								</ul>
								<h4 class="news-block_one-title"><a href="blogdetail.php">10 Steps to Selling Your
										Home Quickly</a></h4>
								<a class="news-block_one-more" href="blogdetail.php">Read More <i
										class="flaticon-next-1"></i></a>
							</div>
						</div>
					</div>

					<!-- News Block One -->
					<div class="news-block_one style-two col-lg-4 col-md-6 col-sm-12">
						<div class="news-block_one-inner">
							<div class="news-block_one-image">
								<a href="blogdetail.php"><img src="assets/images/Blog/blog8.jpg" alt="" /></a>
							</div>
							<div class="news-block_one-content">
								<ul class="news-block_one-meta">
									<li>By Admin</li>
									<li>6 min read</li>
								</ul>
								<h4 class="news-block_one-title"><a href="blogdetail.php">Eco-Friendly Home
										Upgrades Real Estate</a></h4>
								<a class="news-block_one-more" href="blogdetail.php">Read More <i
										class="flaticon-next-1"></i></a>
							</div>
						</div>
					</div>

					<!-- News Block One -->
					<div class="news-block_one style-two col-lg-4 col-md-6 col-sm-12">
						<div class="news-block_one-inner">
							<div class="news-block_one-image">
								<a href="blogdetail.php"><img src="assets/images/Blog/blog8.jpg" alt="" /></a>
							</div>
							<div class="news-block_one-content">
								<ul class="news-block_one-meta">
									<li>By Admin</li>
									<li>6 min read</li>
								</ul>
								<h4 class="news-block_one-title"><a href="blogdetail.php">From Fixer-Upper to Dream
										Home</a></h4>
								<a class="news-block_one-more" href="blogdetail.php">Read More <i
										class="flaticon-next-1"></i></a>
							</div>
						</div>
					</div>

					<!-- News Block One -->
					<div class="news-block_one style-two col-lg-4 col-md-6 col-sm-12">
						<div class="news-block_one-inner">
							<div class="news-block_one-image">
								<a href="blogdetail.php"><img src="assets/images/Blog/blog9.jpg" alt="" /></a>
							</div>
							<div class="news-block_one-content">
								<ul class="news-block_one-meta">
									<li>By Admin</li>
									<li>6 min read</li>
								</ul>
								<h4 class="news-block_one-title"><a href="blogdetail.php">Trends Shape the Future of
										Real Estate</a></h4>
								<a class="news-block_one-more" href="blogdetail.php">Read More <i
										class="flaticon-next-1"></i></a>
							</div>
						</div>
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