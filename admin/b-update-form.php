<?php include '../config.php'; ?>

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
    <title>Apex - Blog</title>
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page_title">
                                <h2>Update Blog</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <?php
                    if (isset($_GET['id'])) {
                        $property_id = intval($_GET['id']);

                        $d_p_sql = "SELECT * FROM blog WHERE id =$property_id";
                        $d_p_result = $conn->query($d_p_sql);

                        if ($d_p_result) {
                            $property = $d_p_result->fetch_assoc();
                            $gallery = json_decode($property['img'], true);

                            // Initialize main image and additional images
                            $main_image = isset($gallery[0]) ? $gallery[0] : '';
                            $additional_images = (is_array($gallery) && count($gallery) > 1) ? array_slice($gallery, 1) : []; // Ensure it's an array
                    
                            // Initialize an array to hold images to be deleted
                            $images_to_delete = [];

                            ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="sec-title">
                                        <div class="sec-title_title">Want to Sell | Rent?</div>
                                    </div>
                                    <h3>Share Your Details</h3>
                                </div>
                            </div>

                            <form method="post" action="php/up-blog.php" id="contact-form" enctype="multipart/form-data">
                                <div class="row" style="width: 60%; margin-auto;">
                                    <!-- Title Input -->
                                    <div class="col-12">
                                        <input type="text" name="title" value="<?php echo $property['title'] ?>"
                                            placeholder="Title" required class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <label for="description">Description:</label>
                                        <textarea id="description" name="description" rows="4" class="form-control"
                                            placeholder="Enter property description"><?php echo $property['detail'] ?></textarea>
                                    </div>
                                    <div class="col-12">
                                        <label>Blog Image : Must Select Image</label>
                                        <?php if ($main_image): ?>
                                            <img src="php/<?php echo $main_image; ?>" alt="Main Image"
                                                style="max-width: 100%; height: auto;" id="mainImage">
                                        <?php else: ?>
                                            <p>No main image available.</p>
                                        <?php endif; ?>
                                        <input type="file" name="main_img" class="form-control">
                                    </div>
                                    <!-- Submit Button -->
                                    <div class="col-12">
                                        <button name="submit" type="submit" class="btn btn-primary my-2 px-4 py-2">
                                            Update
                                        </button>
                                    </div>

                                </div>
                            </form>

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
                    } else {
                        echo "no id found";
                    }
                    ?>
                </div>
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