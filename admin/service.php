<?php include 'auth_check.php'; ?>
<?php
include "../config.php"
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
    <title>Apex - Services</title>
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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/flaticon_palace-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <?php  include 'admin-nav.php'; ?>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
            <?php  include 'admin-top.php'; ?>
                <div class="container-fluid">
                    <div class="row column_title">
                        <div class="col-md-12">
                            <div class="page_title">
                                <h2>Services</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Services Two -->
                    <section class="services-two">
                        <div class="auto-container">
                            <div class="row clearfix">
                                <!-- Service Block One -->

                                <?php
                                $query = "SELECT * FROM `service`";
                                $temp = mysqli_query($conn, $query);
                                if ($temp) {
                                    while ($row = mysqli_fetch_assoc($temp)) {
                                        $id = $row['service_id'];
                                        $heading = $row['service_name'];
                                        $desc = $row['service_desc'];
                                        $icon = $row['service_logo'];
                                        $bg_img = $row['service_bg'];

                                        ?>
                                        <div class='service-block_one col-lg-6 col-md-6 col-sm-12'>
                                            <div class='service-block_one-inner' style="">
                                                <div class='service-block_one_image'
                                                    style='background-image:url(images/<?php echo $bg_img ?>)'>
                                                </div>
                                                <div class='service-block_one-icon'>
                                                <i class="<?php echo $icon ?>"></i>
                                                </div>
                                                <h4 class='service-block_one-heading'><a
                                                        href='service-detail.html'><?php echo $heading ?></a>
                                                </h4>
                                                <div class='service-block_one-text'><?php echo $desc ?></div>
                                                <div class='row mt-3'>
                                                    <div class='col-6'>
                                                        <a href='upd_service.php?update_id=<?php echo $id ?>'
                                                            class='btn btn-success px-4 py-2'>Update</a>
                                                    </div>
                                                    <div class='col-6'>
                                                        <a href='../assets/php/service_delete.php?delete_id=<?php echo $id ?>'
                                                            class='btn btn-danger px-4 py-2'>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </section>
                    <!-- End Services Two -->
                </div>
            </div>
        </div>
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
    <script src="js/chart_custom_style1.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>