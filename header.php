<!-- navabr -->
<div class="nav-outer d-flex align-items-center flex-wrap gap-2">
    <!-- Main Menu -->
    <nav class="main-menu navbar-expand-md">
        <div class="navbar-header">
            <!-- Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
            <ul class="navigation clearfix">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">services</a></li>
                <li><a href="property.php">property</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li class="quote-property">
                    <a href="Sell.php" class="quote-property">Add Property</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- get a quote -->
<div class="outer-box d-flex align-items-center flex-wrap">
    <div class="header-options_box d-flex align-items-center">
        <a href="Sell.php" class="search-box-btn-anchor quote-btn-inner-box">
            <div class="search-box-btn">Add Property</div>
        </a>
    </div>

    <div class="header_button-box" id="openModalBtn">
        <a href="#" class="theme-btn btn-style-one trigger-btn quote-btn-home" data-bs-toggle="modal"
            data-bs-target="#quotationModal">
            <span class="btn-wrap">
                <span class="text-one">Get a Quote</span>
                <span class="text-two">Get a Quote</span>
            </span>
        </a>
        <!-- Modal -->
        <div class="modal fade" id="quotationModal" tabindex="-1" aria-labelledby="quotationModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="assets/images/FINAL A-01.png" alt="Logo" class="logo" style="height:auto;">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control quote-top-inputs quote-form-group"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" class="form-control quote-top-inputs quote-form-group"
                                        placeholder="Phone Number" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control form-select service-type quote-form-select"
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
                                        <input type="text" class="form-control quote-title-inputs quote-form-group"
                                            placeholder="Property Title/Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control quote-title-inputs quote-form-group"
                                            placeholder="Complete Property Address">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="number" class="form-control quote-input quote-form-group"
                                            placeholder="Property Area (sq ft)">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control quote-input quote-form-group"
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
                                        <input type="number" class="form-control quote-budget-input quote-form-group"
                                            placeholder="Budget Range">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 mt-3">
                                <div class="form-label">Property Type</div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="propertyType" id="residential">
                                    <label class="form-check-label property-type-label quote-radio-label"
                                        for="residential">
                                        Residential
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="propertyType" id="commercial">
                                    <label class="form-check-label property-type-label quote-radio-label"
                                        for="commercial">
                                        Commercial
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="propertyType" id="industrial">
                                    <label class="form-check-label property-type-label quote-radio-label"
                                        for="industrial">
                                        Industrial
                                    </label>
                                </div>
                            </div>

                            <textarea class="form-control quote-textarea quote-form-group" rows="2"
                                placeholder="Add Message"></textarea>

                            <div class="text-center mt-4 mb-2">
                                <button type="submit" class="btn btn-primary submit-btn">Submit
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
