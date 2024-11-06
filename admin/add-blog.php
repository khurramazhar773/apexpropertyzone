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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                                    <h2>Add blog</h2>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Three -->

                        <div class="full-form">
                            <div class="">
                                <div class="sec-title">
                                    <div class="sec-title_title">Give us detail</div>
                                </div>
                            </div>
                            <div class="">
                                <h3>Make Your Blog</h3>
                                <div class="">
                                    <form method="post" action="php/add-blog.php" id="contact-form"
                                        enctype="multipart/form-data">
                                        <div class="row clearfix">
                                            <!-- Title Input -->
                                            <div class="khass-input">
                                                <input type="text" name="title" placeholder="Title" required
                                                    class="custom-input">
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

                                                <div id="imageContainer" class="image-preview-container"></div>
                                            </div>

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