<?php include 'auth_check.php'; ?>
<?php include '../config.php';

$sql = "SELECT * FROM property WHERE permission = 'pending'";
$result = $conn->query($sql);
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
   <title>Apex - Property approval</title>
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
                           <h2>Property approval</h2>
                        </div>
                     </div>
                  </div>
                  <h1>Property Requests</h1>
                  <div class="property-req">
                     <div class="row">
                        <?php
                        if ($result->num_rows > 0) {
                           while ($row = $result->fetch_assoc()) {

                              ?>

                              <!-- column contact -->
                              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                 <div class="contact_blog">
                                    <div class="contact_inner">
                                       <div class="left">
                                          <h3 style="color: red;"><?php echo $row['name'] ?></h3>
                                          <div>
                                             <h5 style="text-wrap: nowrap; text-transform: none;">Property title :</h5>

                                             <p><?php echo $row['title'] ?></p>
                                          </div>
                                       </div>
                                       <div class="bottom_list">
                                          <div class="right_button">
                                             <a class="btn btn-success"
                                                href="update-form.php?id=<?php echo $row['property_id'] ?>">Edit</a>
                                             <a class="btn btn-danger"
                                                href="property-view.php?id=<?php echo $row['property_id'] ?>">view</a>
                                             <form method="post" action="php/approve.php" class="d-inline">
                                                <input type="hidden" name="property_id"
                                                   value="<?php echo $row['property_id'] ?>">
                                                <button type="submit" class="btn btn-primary" name="approve">Approve</button>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- end column contact blog -->
                              <?php
                           }
                           echo "</table>";
                        } else {
                           echo "No pending properties found.";
                        }

                        $conn->close();
                        ?>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end dashboard inner -->
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
   <script src="js/chart_custom_style1.js"></script>
</body>

</html>