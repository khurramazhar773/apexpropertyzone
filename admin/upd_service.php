<?php
include "../config.php";

$id = $_GET["update_id"];
$sql = "select * from `service` where service_id = $id";
$temp = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($temp);
$ser_name = $row['service_name'];
$ser_desc = $row['service_desc'];
$ser_icon = $row['service_logo'];
$ser_bg = $row['service_bg'];

if (isset($_POST['update'])) {
    $service_name = $_POST['name'];
    $service_desc = $_POST['description'];
    $service_icon = $_POST['icon'];

    // Accessing Images
    $service_bg_img = $_FILES['serv_bg_image']['name'];
    $temp_image = $_FILES['serv_bg_image']['tmp_name'];
    $size_image = $_FILES['serv_bg_image']['size'];
    $type_image = $_FILES['serv_bg_image']['type'];

    // Sanitize input to prevent SQL injection
    $service_name = mysqli_real_escape_string($conn, $service_name);
    $service_desc = mysqli_real_escape_string($conn, $service_desc);
    $service_icon = mysqli_real_escape_string($conn, $service_icon);

    // Insert query
    $query = "UPDATE `service` SET `service_id`='$id',`service_name`='$service_name',`service_desc`='$service_desc',`service_logo`='$service_icon' , `service_bg` = '$service_bg_img' WHERE service_id = $id";

    // Execute the query
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Check if the upload was successful
        move_uploaded_file($temp_image, 'images/' . $service_bg_img);
        echo "<script>alert('Updated Successfully!'); window.location='service.php';</script>";
        exit();
    } else {
        echo "Service hasn't been inserted: " . mysqli_error($conn);
    }
}
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
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle" style="width: 6%;"><i
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
                <div class="container-fluid">
                    <div class="row column_title">
                        <div class="col-md-12">
                            <div class="page_title">
                                <h2>Update Services</h2>
                            </div>
                        </div>
                    </div>
                    <div style="width: 50%; margin: auto;">
                        <form method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="head" class="form-label">Service Name: </label>
                                <input type="text" class="form-control" name="name" id="head" required
                                    value="<?php echo $ser_name ?>">
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Service Description: </label>
                                <input type="text" class="form-control" name="description" id="desc" required
                                    value="<?php echo $ser_desc ?>">
                            </div>
                            <div class="mb-3">
                                <label for="logo" class="form-label">Service Icon: </label>
                                <input type="text" class="form-control" name="icon" id="logo"
                                    aria-describedby="logo_sugges" required value="<?php echo $ser_icon ?>">
                                <div id="logo_sugges" class="form-text">Please paste only class text of <a
                                        style="color: red;" href="https://fontawesome.com/icons" target="_blank">font
                                        awesome's</a> icon of latest version.
                                </div>
                            </div>
                            <div class="mb-3" style="height: 100%">
                                <img src="images/<?php echo $ser_bg ?>" alt="No Internet!">
                            </div>
                            <div class="mb-3">
                                <label for="bg_img" class="form-label">Background Image: </label>
                                <input type="file" class="form-control" name="serv_bg_image" id="bg_img" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="update">Update Service</button>
                        </form>
                    </div>
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