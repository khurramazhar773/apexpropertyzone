<?php include '../config.php'; 

?>
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
    <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="images/fevicon.png" type="image/png" />
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
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png"
                                    alt="#" /></a>
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <div class="user_img"><img class="img-responsive" src="images/layout_img/user_img.jpg"
                                    alt="#" /></div>
                            <div class="user_info">
                                <h6>John David</h6>
                                <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <h4>General</h4>
                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                    class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                            <ul class="collapse list-unstyled" id="dashboard">
                                <li>
                                    <a href="dashboard.html">> <span>Default Dashboard</span></a>
                                </li>
                                <li>
                                    <a href="dashboard_2.html">> <span>Dashboard style 2</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="widgets.html"><i class="fa fa-clock-o orange_color"></i> <span>Widgets</span></a>
                        </li>
                        <li>
                            <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                    class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                            <ul class="collapse list-unstyled" id="element">
                                <li><a href="general_elements.html">> <span>General Elements</span></a></li>
                                <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                                <li><a href="icons.html">> <span>Icons</span></a></li>
                                <li><a href="invoice.html">> <span>Invoice</span></a></li>
                            </ul>
                        </li>
                        <li><a href="tables.html"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
                        <li>
                            <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                    class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                            <ul class="collapse list-unstyled" id="apps">
                                <li><a href="email.html">> <span>Email</span></a></li>
                                <li><a href="calendar.html">> <span>Calendar</span></a></li>
                                <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                            </ul>
                        </li>
                        <li><a href="price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing
                                    Tables</span></a></li>
                        <li>
                            <a href="contact.html">
                                <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
                        </li>
                        <li class="active">
                            <a href="#additional_page" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional
                                    Pages</span></a>
                            <ul class="collapse list-unstyled" id="additional_page">
                                <li>
                                    <a href="profile.html">> <span>Profile</span></a>
                                </li>
                                <li>
                                    <a href="project.html">> <span>Projects</span></a>
                                </li>
                                <li>
                                    <a href="login.html">> <span>Login</span></a>
                                </li>
                                <li>
                                    <a href="404_error.html">> <span>404 Error</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
                        <li><a href="charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a>
                        </li>
                        <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i
                                    class="fa fa-bars"></i></button>
                            <div class="logo_section">
                                <a href="index.html"><img class="img-responsive" src="images/logo/logo.png"
                                        alt="#" /></a>
                            </div>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a>
                                        </li>
                                    </ul>
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown"><img
                                                    class="img-responsive rounded-circle"
                                                    src="images/layout_img/user_img.jpg" alt="#" /><span
                                                    class="name_user">John David</span></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="profile.html">My Profile</a>
                                                <a class="dropdown-item" href="settings.html">Settings</a>
                                                <a class="dropdown-item" href="help.html">Help</a>
                                                <a class="dropdown-item" href="#"><span>Log Out</span> <i
                                                        class="fa fa-sign-out"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>General Elements</h2>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Three -->
                        <?php
                            if(isset($_GET['id'])){
                                $property_id = intval($_GET['id']);
                                
                                $d_p_sql = "SELECT * FROM property WHERE property_id =$property_id";
                                $d_p_result = $conn->query($d_p_sql);


                                                if ($d_p_result) {
                            $property = $d_p_result->fetch_assoc();
                            $gallery = json_decode($property['gallery'], true);
                            
                            // Initialize main image and additional images
                            $main_image = isset($gallery[0]) ? $gallery[0] : '';
                            $additional_images = (is_array($gallery) && count($gallery) > 1) ? array_slice($gallery, 1) : []; // Ensure it's an array

                            // Initialize an array to hold images to be deleted
                            $images_to_delete = [];

                        ?>
                        <div class="full-form">
                            <div class="">
                                <div class="sec-title">
                                    <div class="sec-title_title">Want to Sell | Rent?</div>
                                </div>
                            </div>
                            <div class="">
                                <h3>Share Your Details</h3>
                                <div class="">
                                    <form method="post" action="php/up-property.php" id="contact-form" enctype="multipart/form-data">
                                        <div class="row clearfix">
                                            <!-- Title Input -->
                                            <div class="khass-input">
                                                <input type="text" name="title" value="<?php echo $property['title'] ?>" placeholder="Title" required class="custom-input">
                                            </div>
                                            <input type="hidden"  name="property_id" value="<?php echo $property_id; ?>">

                                            <!-- Lot Area Input -->
                                            <div class="khass-input">
                                                <input type="text" name="lot_area" placeholder="Lot Area" value="<?php echo $property['lot_area'] ?>" required class="custom-input">
                                            </div>
                                    
                                            <!-- Constructed Area Input -->
                                            <div class="khass-input">
                                                <input type="text" name="constructed_area" placeholder="Constructed Area" value="<?php echo $property['constructed_area'] ?>" required class="custom-input">
                                            </div>
                                            
                                            <div class="khass-input">
                                                <input type="text" name="condition" placeholder="Condition" value="<?php echo $property['cond'] ?>" required class="custom-input">
                                            </div>
                                    
                                            <div class="khass-input">
                                                <input type="text" name="location" placeholder="Location" value="<?php echo $property['location'] ?>" required class="custom-input">
                                            </div>
                                            
                                            <!-- Address Input -->
                                            <div class="khass-input">
                                                <input type="text" name="address" placeholder="Address" value="<?php echo $property['address'] ?>" required class="custom-input">
                                            </div>
                                    
                                            <!-- Status Dropdown -->
                                            <div class="drop-g">
                                                <label for="saleOrRent">Status:</label>
                                                <select id="saleOrRent" name="status" class="form-control">
                                                    <option value=""><?php echo $property['status'] ?></option>
                                                    <option value="sale">For Sale</option>
                                                    <option value="rent">For Rent</option>
                                                </select>
                                            </div>
                                    
                                            <!-- Property Type Dropdown -->
                                            <div class="drop-g">
                                                <label for="propertyType">Property Type:</label>
                                                <select id="propertyType" name="property_type" class="form-control" onchange="updateSubtypes()">
                                                    <option value=""><?php echo $property['property_type'] ?></option>
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
                                                    <option value="1"><?php echo $property['baths'] ?></option>
                                                    <option value="2">2</option>
                                                    <option value="3">3+</option>
                                                </select>
                                            </div>
                                            
                                            <!-- Rooms Dropdown -->
                                            <div class="drop-g">
                                                <label for="rooms">Rooms:</label>
                                                <select id="rooms" name="rooms" class="form-control">
                                                    <option value="1"><?php echo $property['rooms'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3+</option>
                                                </select>
                                            </div>
                                    
                                            <!-- Bedrooms Dropdown -->
                                            <div class="drop-g">
                                                <label for="bedrooms">Bedrooms:</label>
                                                <select id="bedrooms" name="bedrooms" class="form-control">
                                                    <option value="1"><?php echo $property['bedrooms'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3+</option>
                                                </select>
                                            </div>
                                    
                                            <!-- Utilities Section -->
                                            <div class="drop-g">
                                                <label for="electricityMeter">Electricity Meter:</label>
                                                <select id="electricityMeter" name="electricityMeter" class="form-control">
                                                    <option value="0"><?php echo $property['elecMeter'] ?></option>
                                                    <option value="0">Yes</option>
                                                    <option value="1">No</option>
                                                </select>
                                            </div>
                                            
                                            <div class="drop-g">
                                                <label for="gasMeter">Sui Gas Meter:</label>
                                                <select id="gasMeter" name="gasMeter" class="form-control">
                                                    <option value="0"><?php echo $property['gasMeter'] ?></option>
                                                    <option value="0">Yes</option>
                                                    <option value="1">No</option>
                                                </select>
                                            </div>
                                    
                                            <!-- Residential Section -->
                                            <div id="residentialSection" class="section" style="display: none;">
                                                <h4>Residential Details</h4>
                                                <div>
                                                    <label for="residentialArea">Area (sq ft):</label>
                                                    <input type="number" value="<?php echo $property['areaSq'] ?>" name="area_sq" id="residentialArea" class="form-control">
                                                </div>
                                                <div>
                                                    <label for="residentialPrice">Price Range:</label>
                                                    <input type="text" name="price" value="<?php echo $property['price'] ?>" id="residentialPrice" class="form-control">
                                                </div>
                                            </div>
                                    
                                            <!-- Commercial Section -->
                                            <div id="commercialSection" class="section" style="display: none;">
                                                <h4>Commercial Details</h4>
                                                <div>
                                                    <label for="commercialArea">Area (sq ft):</label>
                                                    <input type="number" name="c_area_sq" value="<?php echo $property['CareaSq'] ?>" id="commercialArea" class="form-control">
                                                </div>
                                                <div>
                                                    <label for="commercialPrice">Price Range:</label>
                                                    <input type="text" name="c_price" value="<?php echo $property['Cprice'] ?>" id="commercialPrice" class="form-control">
                                                </div>
                                            </div>
                                    
                                            <!-- Description Textarea -->
                                            <div class="diss">
                                                <label for="description">Description:</label>
                                                <textarea id="description" name="description" rows="4" class="form-control" placeholder="Enter property description"><?php echo $property['description'] ?></textarea>
                                            </div>
                                    
                                                                <!-- Main Image Upload -->
                                                                                        <!-- Main Image Display -->
                                            <div class="file-g">
                                                <label>Main Image</label>
                                                <?php if ($main_image): ?>
                                                    <img src="php/<?php echo $main_image; ?>" alt="Main Image" style="max-width: 100%; height: auto;" id="mainImage">
                                                    <a href="#" class="btn btn-danger" onclick="deleteImage('main')">Delete Main Image</a>
                                                <?php else: ?>
                                                    <p>No main image available.</p>
                                                <?php endif; ?>
                                                <input type="file" name="main_img" class="form-control" >
                                                <div class="popup">
                                                    <div class="heading">Image Size Should be:</div>
                                                    <div class="height"><span class="bold">Height</span>: 525px;</div>
                                                    <div class="width"><span class="bold">Width</span>: 785px;</div>
                                                    <button class="btn btn-primary">Okay!</button>
                                                </div>
                                            </div>

                                            <!-- Additional Images Display -->
                                            <div class="main_con">
                                                <div class="file-g" id="additionalImagesContainer">
                                                    <?php foreach ($additional_images as $index => $additional_image): ?>
                                                        <div class="add-files" id="additionalImage<?php echo $index; ?>">
                                                            <label>Additional Image <?php echo $index + 1; ?></label>
                                                            <img src="php/<?php echo $additional_image; ?>" alt="Additional Image <?php echo $index + 1; ?>" style="max-width: 100%; height: auto;" class="additionalImage">
                                                            <a href="#" class="btn btn-danger" onclick="deleteImage('<?php echo $additional_image; ?>')">Delete</a>
                                                            <input type="file" name="additional_imgs[]" class="form-control" accept="image/*">
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                                <button id="addImageBtn" type="button" class="btn btn-primary">Add Another Image</button>
                                            </div>

                                            <!-- Submit Button -->
                                            <button name="submit" type="submit" class="btn btn-primary sell-form-button-1">Update</button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>


                        <!-- js for update form images -->
                        <script>
// Function to mark an image for deletion
function markForDeletion(imagePath, imageId = null) {
    let imagesToDelete = document.getElementById('imagesToDelete').value;
    if (!imagesToDelete.includes(imagePath)) {
        imagesToDelete += (imagesToDelete ? ',' : '') + imagePath;
        document.getElementById('imagesToDelete').value = imagesToDelete;
    }
    // Hide image on UI
    if (imageId) {
        document.getElementById('img-' + imageId).style.display = 'none';
    }
}
</script>

                        <?php
                                } else {
                                    echo "No property found.";
                                }
                            }else{
                                        echo "no id found";
                                    }
                        ?>



                    </div>
                </div>
                <!-- Contact Three -->
            </div>
            <!-- footer -->
            
        </div>
        <!-- end dashboard inner -->
        <div class="container-fluid">
            <div class="footer">
                <p>Copyright © 2018 Designed by html.design. All rights reserved.</p>
            </div>
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
    <script src="../assets/js/Seller.js"></script>
    <script src="js/property-add.js"></script>
</body>

</html>