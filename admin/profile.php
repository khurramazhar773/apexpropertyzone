<?php
include 'auth_check.php';
include "../config.php";
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
   <title>Apex - Contact profile</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
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

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="inner_page profile_page">
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
                           <h2>Contact profile</h2>
                        </div>
                     </div>
                  </div>
                  <!-- row -->
                  <div class="row column1">
                     <div class="col-md-2"></div>
                     <div class="col-md-8">
                        <div class="white_shd full margin_bottom_30">
                           <div class="full graph_head">
                              <div class="heading1 margin_0">
                                 <h2>Contact profile</h2>
                              </div>
                           </div>
                           <div class="full price_table padding_infor_info">
                              <div class="row">
                                 <!-- user profile section -->
                                 <!-- profile image -->
                                 <div class="col-lg-12">
                                    <div class="full dis_flex center_text">
                                       <?php

                                       if (isset($_GET["contact_id"])) {
                                          $cont_id = $_GET["contact_id"];
                                          $query = "select * from `contact` where id = $cont_id";
                                          $result = mysqli_query($conn, $query);
                                          while ($row = $result->fetch_assoc()) {
                                             $cont_name = $row["name"];
                                             $cont_email = $row["email"];
                                             $cont_phone = $row["phone"];
                                             $cont_msg = $row["message"];
                                             ?>
                                             <div class="profile_contant">
                                                <div class="contact_inner">
                                                   <h3><?php echo $cont_name ?></h3>
                                                   <ul class="list-unstyled">
                                                      <li><i style="font-size: 20px; margin: 5px 0px;"
                                                            class="fa fa-envelope-o"></i> : <?php echo $cont_email ?></li>
                                                      <li><i style="font-size: 20px; margin: 5px 0px;"
                                                            class="fa fa-phone"></i> : <?php echo $cont_phone ?></li>
                                                      <li><strong style="font-size: 17px; margin: 5px 0px;">Message :</strong>
                                                         <?php echo $cont_msg ?></li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <?php
                                          }
                                       } else {
                                          die("Can't Fetch!");
                                       }
                                       ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-2"></div>
                     </div>
                     <!-- end row -->
                  </div>
               </div>
               <!-- end dashboard inner -->
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
   <script src="js/custom.js"></script>
   <!-- calendar file css -->
   <script src="js/semantic.min.js"></script>
</body>

</html>