<?php include 'auth_check.php'; ?>
<?php include '../config.php';

$dis_con_sql = "SELECT id ,name ,email ,phone ,service ,message ,create_at FROM contact";

$dis_con_result = $conn->query($dis_con_sql);

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
   <title>Apex - Contact</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

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

<body class="inner_page contact_page">
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
                           <h2>Contacts</h2>
                        </div>
                     </div>
                  </div>
                  <!-- row -->
                  <div class="row column1">
                     <div class="col-md-12">
                        <div class="white_shd full margin_bottom_30">
                           <div class="full graph_head">
                              <div class="heading1 margin_0">
                                 <h2>Contacts</h2>
                              </div>
                           </div>
                           <div class="full price_table padding_infor_info">
                              <div class="row">

                                 <?php
                                 if ($dis_con_result) {
                                    while ($row = $dis_con_result->fetch_assoc()) {
                                       ?>
                                       <!-- column contact -->
                                       <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                          <div class="contact_blog">
                                             <div class="contact_inner">
                                                <div class="left">
                                                   <h3><?php echo $row['name'] ?></h3>
                                                   <ul class="list-unstyled">
                                                      <li><i class="fa fa-envelope-o"></i> : <?php echo $row['email'] ?></li>
                                                      <li><i class="fa fa-phone"></i> : <?php echo $row['phone'] ?></li>
                                                   </ul>
                                                   <p style="text-overflow: ellipsis;">
                                                      <strong>Message:
                                                      </strong><?php echo $row['message'] ?>
                                                   </p>
                                                </div>

                                                <div class="bottom_list">
                                                   <div class="right_button">
                                                      <a href="profile.php?contact_id=<?php echo $row["id"] ?>"
                                                         class="btn btn-primary btn-xs"><i class="fa fa-user"></i> View
                                                         Profile</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- end column contact blog -->
                                       <?php
                                    }
                                 } else {
                                    echo "connection faild";
                                 }

                                 ?>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end row -->
                  </div>

                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                           Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                        </p>
                     </div>
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
   <script></script>
</body>

</html>