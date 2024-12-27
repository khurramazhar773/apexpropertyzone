<?php
include "config.php";
?>

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
                  <a href="index.php">
                    <img src="assets/images/FINAL B 3-01.png" alt="" title="" />
                  </a>
                </div>
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
        <div class="close-btn">
          <span class="icon flaticon-close-1"></span>
        </div>

        <nav class="menu-box">
          <div class="nav-logo">
            <a href="index.php"><img src="assets/images/logo.svg" alt="" title="" /></a>
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
        <div class="carousel-slide banner-two_image" style="background-image: url('assets/images/banner/banner.jpg');">
        </div>
        <div class="carousel-slide banner-two_image" style="background-image: url('assets/images/banner/banner2.jpg');">
        </div>
        <div class="carousel-slide banner-two_image" style="background-image: url('assets/images/banner/banner3.jpg');">
        </div>
      </div>

      <div class="auto-container">
        <!-- Content Column -->
        <div class="banner-two_content">
          <div class="banner-two_content-inner">
            <div class="banner-two_title">real estate</div>
            <h2 class="banner-two_heading">
              Your Gateway <br />
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
                        <form method="post" action="property.php">
                          <!-- important -->
                          <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-6 form-group">
                              <label>City</label>
                              <select name="country" class="custom-select-box" id="city">
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
                              <select name="country" class="custom-select-box" id="state">
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
                            <a href="property-detail.php"></a>
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
                        <form method="post" action="property.php">
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
                            <a href="property-detail.php"></a>
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
            <?php
            $query = "SELECT * FROM `service` order by rand() limit 0,3";
            $temp = mysqli_query($conn, $query);
            if ($temp) {
              while ($row = mysqli_fetch_assoc($temp)) {
                $id = $row['service_id'];
                $heading = $row['service_name'];
                $desc = $row['service_desc'];
                $icon = $row['service_logo'];
                $bg_img = $row['service_bg'];
                ?>
                <!-- Slide -->
                <div class="swiper-slide">
                  <!-- Service Block One -->
                  <div class="service-block_one">
                    <div class="service-block_one-inner">
                      <div class="service-block_one_image" style="
                        background-image: url(admin/images/<?php echo $bg_img ?>);
                      "></div>
                      <div class="service-block_one-icon">
                        <i class="<?php echo $icon ?>"></i>
                      </div>
                      <h4 class="service-block_one-heading">
                        <a href="service-detail.php?service_id=<?php echo $id ?>">
                          <?php echo $heading ?>
                        </a>
                      </h4>
                      <div class="service-block_one-text"
                        style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;">
                        <?php echo $desc ?>
                      </div>
                      <a class="service-block_one-more" href="service-detail.php?service_id=<?php echo $id ?>">Read More <i
                          class="flaticon-next-1"></i></a>
                    </div>
                  </div>
                </div>
                <?php
              }
            }
            ?>
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
                <a href="services.php" class="theme-btn btn-style-one">
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
            <?php
            $p_sql = "SELECT property_id ,title , address, gallery FROM property order by rand() limit 0,3";
            $p_result = $conn->query($p_sql);

            if ($p_result) {
              while ($rows = $p_result->fetch_assoc()) {
                $gallery = json_decode($rows['gallery'], true);
                ?>
                <!-- Slide -->
                <div class="swiper-slide">
                  <!-- Property Block One / Style Two -->
                  <div class="property-block_one style-two">
                    <div class="property-block_one-inner">
                      <div class="property-block_one-image">
                        <div class="property-block_one-title">Featuerd</div>
                        <img src="admin/php/<?php echo $gallery[0] ?>" alt="" />
                        <div class="property-block_one-image-content">
                        </div>
                      </div>
                      <div class="property-block_one-content">
                        <div class="property-block_one-location">
                          <i class="flaticon-maps-and-flags"></i>
                          <?php echo $rows['address'] ?>
                        </div>
                        <h4 class="property-block_one-heading">
                          <a href="property-detail.php?id=<?php echo $rows['property_id'] ?>">
                            <?php echo $rows['title'] ?>
                          </a>
                        </h4>
                        <div class="property-block_one-btn">
                          <a href="property-detail.php?id=<?php echo $rows['property_id'] ?>" class="theme-btn">View
                            Details</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }
            } else {
              echo "no data found";
            }

            ?>
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
                <form method="post" action="assets/php/contact1.php" id="contactForm">
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
                    <button class="submit-btn" type="submit" name="submit">Send Now</button>
                  </div>
                </form>
                <div id="successMessage" style="display: none; text-align: center; margin-top: 45%;">
                  <i class="fa fa-check-circle" style="font-size: 2em; color: green;"></i>
                  <p>Thank you! Your Message has been submitted successfully.</p>
                </div>
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

          <?php
          $b_p_sql = "SELECT * FROM blog order by rand() limit 0,3";
          $b_p_result = $conn->query($b_p_sql);

          if ($b_p_result) {
            while ($rows = $b_p_result->fetch_assoc()) {
              $gallery = json_decode($rows['img'], true);

              ?>
              <!-- News Block One -->
              <div class="news-block_one style-two col-lg-4 col-md-6 col-sm-12">
                <div class="news-block_one-inner">
                  <div class="news-block_one-image">
                    <a href="blog-detail.php?id=<?php echo $rows['id'] ?>"><img src="admin/php/<?php echo $gallery[0] ?>"
                        alt="" /></a>
                  </div>
                  <div class="news-block_one-content">
                    <ul class="news-block_one-meta">
                      <li>By Admin</li>
                      <li>
                        <?php echo $rows['time'] ?>
                      </li>
                    </ul>
                    <h4 class="news-block_one-title"><a href="blog-detail.php?id=<?php echo $rows['id'] ?>">
                        <?php echo $rows['title'] ?>
                      </a></h4>
                    <a class="news-block_one-more" href="blog-detail.php?id=<?php echo $rows['id'] ?>">Read More <i
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
            <a class="theme-btn" href="contact.php">Contact Us Now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Main Footer -->
    <?php require 'footer.php'; ?>
    <!-- end main footer -->
  </div>

  <!-- End PageWrapper -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
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
  <script src="assets/js/quote.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-JobWAqYk5CSjWuVV3mxgS+MmccJqkrBaDhk8SKS1BW+71dJ9gzascwzW85UwGhxiSyR7Pxhu50k+Nl3+o5I49A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    // Handle form submission
    document.getElementById("contactForm").addEventListener("submit", function (e) {
      e.preventDefault(); // Prevent the default form submission

      // Collect form data
      const formData = new FormData(this);

      // Send AJAX request
      fetch("assets/php/contact1.php", {
        method: "POST",
        body: formData
      })
        .then(response => response.text()) // Adjust if PHP returns JSON (use .json())
        .then(data => {
          // Hide the form
          this.style.display = "none";
          document.getElementById("successMessage").style.display = "block";
        })
    });

  </script>
  <script>
    
  </script>
</body>

</html>