<?php
include "config.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Contact Us</title>

    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="assets/css/quote.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/other.css">

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

            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-close-1"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.php"><img src="assets/images/logo.svg" alt="" title=""></a>
                    </div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                </nav>
            </div>

        </header>
        <!-- End Main Header -->

        <!-- Page Title -->
        <section class="page-title">
            <div class="page-title_gradient"></div>
            <div class="auto-container">
                <h2>Contact us</h2>
                <ul class="bread-crumb clearfix bread-crumb-ul">
                    <li><a href="index.php"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
                    <li>Contact us</li>
                </ul>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- Contact Three -->
        <section class="contact-three">
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- Column -->
                    <div class="contact-three_title-column col-lg-6 col-md-12 col-sm-12">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="sec-title_title">Contact Us</div>
                            <h2 class="sec-title_heading">Have Legal Queries? Leave Them to Us.</h2>
                            <div class="sec-title_text">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et
                                massa Aliquam in hendrerit urna.</div>
                        </div>
                        <ul class="contact-three_list">
                            <li>
                                <i><img src="assets/images/icons/map.svg" alt="" /></i>
                                Address
                                <strong>Stone Mountain Park Drive, GA 30083</strong>
                            </li>
                            <li>
                                <i><img src="assets/images/icons/phone.svg" alt="" /></i>
                                Phone
                                <strong><a href="tel:+1-678-772-6710">+1 678-772-6710</a></strong>
                            </li>
                            <li>
                                <i><img src="assets/images/icons/email.svg" alt="" /></i>
                                Email
                                <strong><a href="mailto:hello.12@palace.com">hello.12@palace.com</a></strong>
                            </li>
                        </ul>
                    </div>
                    <!-- Column -->
                    <div class="contact-three_form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="contact-three_form-outer">
                            <h3>Get a Free Quote</h3>

                            <div class="default-form contact-form">
                                <form method="post" action="assets/php/contact.php" id="contact-form">
                                    <div class="row clearfix">
                                        <!--Form Group-->
                                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                            <input type="text" name="username" value="" placeholder="Name" required>
                                        </div>
                                        <!--Form Group-->
                                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                            <input type="email" name="email" value="" placeholder="Email" required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                            <input type="text" name="phone" value="" placeholder="Phone" required>
                                        </div>
                                        <!--Form Group-->
                                        <div class="form-group select-service col-lg-6 col-md-6 col-sm-6">
                                            <select name="services" class="custom-select-box"
                                                style="border: 1px solid rgba(0, 0, 0, 0.133);">
                                                <option>Select Service</option>
                                                <option value="Service 01">Service 01</option>
                                                <option value="Service 02">Service 02</option>
                                                <option value="Service 03">Service 03</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea class="" name="message" placeholder="Write a Message"></textarea>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <button type="submit" name="submit" class="theme-btn btn-style-one">
                                                <span class="btn-wrap">
                                                    <span class="text-one">Send Now</span>
                                                    <span class="text-two">Send Now</span>
                                                </span>
                                            </button>
                                        </div>

                                    </div>
                                </form>
                                <div id="success" class="hidden">✔️</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Three -->

        <script src="assets/js/contact.js"></script>

        <!-- Map One -->
        <section class="map-one">
            <div class="auto-container">
                <div class="map-one_map">

                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7249.506658903715!2d73.0997932555346!3d31.411199536728642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1727263923818!5m2!1sen!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe><a
                                href="https://textcaseconvert.com"></a><br><a
                                href="https://www.tabclocktab.com"></a><br>
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