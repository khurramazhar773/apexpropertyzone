<?php include 'auth_check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Apex - Property</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="../assets/images/Layer 2.png" type="image/x-icon">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="css/custom.css" />
    <!-- calendar file css -->
    <link rel="stylesheet" href="js/semantic.min.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="inner_page general_elements">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <?php include 'admin-nav.php'; ?>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <?php include 'admin-top.php'; ?>
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Add Property</h2>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Three -->

                        <div class="full-form">
                            <div class="">
                                <div class="sec-title">
                                    <div class="sec-title_title">Want to Sell | Rent?</div>
                                </div>
                            </div>
                            <div class="">
                                <h3>Share Your Details</h3>
                                <div class="">
                                    <form method="post" action="php/add-property.php" id="contact-form"
                                        enctype="multipart/form-data">
                                        <div class="row clearfix">
                                            <!-- Title Input -->
                                            <div class="khass-input">
                                                <input type="text" name="title" placeholder="Title" required
                                                    class="custom-input">
                                            </div>

                                            <!-- Lot Area Input -->
                                            <div class="khass-input">
                                                <input type="text" name="lot_area" placeholder="Lot Area" required
                                                    class="custom-input">
                                            </div>

                                            <!-- Constructed Area Input -->
                                            <div class="khass-input">
                                                <input type="text" name="constructed_area"
                                                    placeholder="Constructed Area" required class="custom-input">
                                            </div>

                                            <div class="khass-input">
                                                <input type="text" name="condition" placeholder="Condition" required
                                                    class="custom-input">
                                            </div>

                                            <div class="khass-input">
                                                <input type="text" name="location" placeholder="Location" required
                                                    class="custom-input">
                                            </div>

                                            <!-- Address Input -->
                                            <div class="khass-input">
                                                <input type="text" name="address" placeholder="Address" required
                                                    class="custom-input">
                                            </div>

                                            <!-- Status Dropdown -->
                                            <div class="drop-g">
                                                <label for="saleOrRent">Status:</label>
                                                <select id="saleOrRent" name="status" class="form-control">
                                                    <option value="">Select Option</option>
                                                    <option value="sale">For Sale</option>
                                                    <option value="rent">For Rent</option>
                                                </select>
                                            </div>

                                            <!-- Property Type Dropdown -->
                                            <div class="drop-g">
                                                <label for="propertyType">Property Type:</label>
                                                <select id="propertyType" name="property_type" class="form-control"
                                                    onchange="updateSubtypes()">
                                                    <option value="">Select</option>
                                                    <option value="residential">Residential</option>
                                                    <option value="commercial">Commercial</option>
                                                </select>
                                            </div>

                                            <!-- Subtype Dropdown -->
                                            <div class="drop-g">
                                                <label for="propertySubtype">Subtype:</label>
                                                <select id="propertySubtype" name="Subtype" class="form-control">
                                                    <!-- Options will be dynamically populated -->
                                                </select>
                                            </div>

                                            <!-- Bathrooms Dropdown -->
                                            <div class="drop-g">
                                                <label for="bathrooms">Bathrooms:</label>
                                                <select id="bathrooms" name="baths" class="form-control">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3+</option>
                                                </select>
                                            </div>

                                            <!-- Rooms Dropdown -->
                                            <div class="drop-g">
                                                <label for="rooms">Rooms:</label>
                                                <select id="rooms" name="rooms" class="form-control">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3+</option>
                                                </select>
                                            </div>

                                            <!-- Bedrooms Dropdown -->
                                            <div class="drop-g">
                                                <label for="bedrooms">Bedrooms:</label>
                                                <select id="bedrooms" name="bedrooms" class="form-control">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3+</option>
                                                </select>
                                            </div>

                                            <!-- Utilities Section -->
                                            <div class="drop-g">
                                                <label for="electricityMeter">Electricity Meter:</label>
                                                <select id="electricityMeter" name="electricityMeter"
                                                    class="form-control">
                                                    <option value="0">Yes</option>
                                                    <option value="1">No</option>
                                                </select>
                                            </div>

                                            <div class="drop-g">
                                                <label for="gasMeter">Sui Gas Meter:</label>
                                                <select id="gasMeter" name="gasMeter" class="form-control">
                                                    <option value="0">Yes</option>
                                                    <option value="1">No</option>
                                                </select>
                                            </div>
                                            <div class="drop-g">
                                                <label for="gasMeter">Permission</label>
                                                <select id="gasMeter" name="permission" class="form-control">
                                                    <option value="pending">pending</option>
                                                    <option value="approved">approved</option>
                                                    <option value="rejected">rejected</option>
                                                </select>
                                            </div>

                                            <!-- Residential Section -->
                                            <div id="residentialSection" class="section" style="display: none;">
                                                <h4>Residential Details</h4>
                                                <div>
                                                    <label for="residentialArea">Area (sq ft):</label>
                                                    <input type="number" name="area_sq" id="residentialArea"
                                                        class="form-control">
                                                </div>
                                                <div>
                                                    <label for="residentialPrice">Price Range:</label>
                                                    <input type="text" name="price" id="residentialPrice"
                                                        class="form-control">
                                                </div>
                                            </div>

                                            <!-- Commercial Section -->
                                            <div id="commercialSection" class="section" style="display: none;">
                                                <h4>Commercial Details</h4>
                                                <div>
                                                    <label for="commercialArea">Area (sq ft):</label>
                                                    <input type="number" name="area_sq" id="commercialArea"
                                                        class="form-control">
                                                </div>
                                                <div>
                                                    <label for="commercialPrice">Price Range:</label>
                                                    <input type="text" name="price" id="commercialPrice"
                                                        class="form-control">
                                                </div>
                                            </div>

                                            <!-- Description Textarea -->
                                            <div class="diss">
                                                <label for="description">Description:</label>
                                                <textarea id="description" name="description" rows="4"
                                                    class="form-control"
                                                    placeholder="Enter property description"></textarea>
                                            </div>

                                            <!-- Main Image Upload -->
                                            <div class="file-g">
                                                <div class="main-files">
                                                    <label>Main Image</label>
                                                    <input type="file" name="main_img" class="form-control" required>
                                                </div>
                                                <div class="popup">
                                                    <div class="heading">Image Size Should be:</div>
                                                    <div class="height"><span class="bold">Height</span>: 525px;</div>
                                                    <div class="width"><span class="bold">Width</span>: 785px;</div>
                                                    <button class="btn btn-primary">Okay!</button>
                                                </div>
                                                <div id="imageContainer" class="image-preview-container"></div>
                                            </div>

                                            <!-- Multiple Image Upload -->
                                            <div class="main_con">
                                                <div class="file-g" id="additionalImagesContainer">
                                                    <div class="add-files">
                                                        <label>Additional Image 1</label>
                                                        <input type="file" name="additional_imgs[]" class="form-control"
                                                            accept="image/*">
                                                    </div>

                                                    <div class="popup">
                                                        <div class="heading">Image Size Should be:</div>
                                                        <div class="height"><span class="bold">Height</span>: 414px;
                                                        </div>
                                                        <div class="width"><span class="bold">Width</span>: 434px;</div>
                                                        <button class="btn btn-primary">Okay!</button>
                                                    </div>
                                                    <div id="imageContainer" class="image-preview-container"></div>
                                                </div>
                                                <button id="addImageBtn" type="button" class="btn btn-primary">Add
                                                    Another Image</button>
                                            </div>
                                            <!-- Submit Button -->
                                            <button name="submit" type="submit"
                                                class="btn btn-primary sell-form-button-1">Submit</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Contact Three -->
            </div>
            <!-- footer -->
        </div>
    </div>

    <!-- model popup -->
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    Modal body..
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end model popup -->
    </div>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- wow animation -->
    <script src="js/animate.js"></script>
    <!-- select country -->
    <script src="js/bootstrap-select.js"></script>
    <!-- owl carousel -->
    <script src="js/owl.carousel.js"></script>
    <!-- chart js -->
    <script src="js/Chart.min.js"></script>
    <script src="js/Chart.bundle.min.js"></script>
    <script src="js/utils.js"></script>
    <script src="js/analyser.js"></script>
    <!-- nice scrollbar -->
    <script src="js/perfect-scrollbar.min.js"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- calendar file css -->
    <script src="js/semantic.min.js"></script>
    <script src="js/sell.js"></script>
    <script src="js/property-add.js"></script>
</body>

</html>