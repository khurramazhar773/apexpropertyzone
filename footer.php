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
                                    <a href="index.php"><img src="assets/images/FINAL B 3-01.png" alt="" title="" /></a>
                                </div>
                                <div class="footer-text">
                                    Apex! Place of mind blowing deals for Property and Construction.
                                </div>

                                <h5 class="footer-title-subs">Subscribe Now!</h5>
                                <!-- Newsletter Box -->
                                <div class="newsletter-box">
                                    <?php
                                    if (isset($_POST["submit_sub"])) {
                                        $email = $_POST["foot_sub"];
                                        $query = "INSERT INTO `user_sub`(`user_email`) VALUES ('$email')";
                                        $result = mysqli_query($conn, $query);
                                        if ($result) {
                                            echo "<script>alert('You have been subscribe!')</script>";
                                        } else {
                                            echo "You can't Subscribed!";
                                        }
                                    }
                                    ?>
                                    <form method="post">
                                        <div class="form-group">
                                            <input type="email" name="foot_sub" placeholder="Your Email" required />
                                            <button type="submit" name="submit_sub">
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
                                    <li><a href="Policy.php">Our Policy</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="services.php">Our Services</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="blog.php">Blog</a></li>
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
                    &copy; <a href="index.php">Appex Property Zone.</a>
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