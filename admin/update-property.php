<?php include 'auth_check.php'; ?>
<?php

include '../config.php';

$p_sql = "SELECT property_id ,title , address, gallery FROM property";

$p_result = $conn->query($p_sql);


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
   <title> Apex - Property</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
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
                           <h2>Update Property</h2>
                        </div>
                     </div>
                  </div>

                  <section class="property-three">
                     <div class="auto-container">
                        <div class="row clearfix">


                           <?php

                           if ($p_result) {
                              while ($rows = $p_result->fetch_assoc()) {
                                 $gallery = json_decode($rows['gallery'], true);

                                 ?>
                                 <!-- Property Block One -->
                                 <div
                                    class="property-block_one property-block_one12 update-p-d style-three col-lg-3 col-md-6 col-sm-12">
                                    <div class="property-block_one-inner wow fadeInUp" data-wow-delay="0ms"
                                       data-wow-duration="1500ms">
                                       <div class="property-block_one-image">
                                          <a href="property-detail.html"></a>
                                       </div>
                                       <div class="property-block_one-content">
                                          <div class="property-block_one-location one-location-1"><i
                                                class="flaticon-maps-and-flags"></i><?php echo $rows['address']; ?></div>
                                          <h4 class="property-block_one-heading one-heading-1"><a
                                                href="property-detail.html"><?php echo $rows['title']; ?></a></h4>

                                       </div>
                                       <div class="widget-content-buttons content-buttons1">
                                          <a href="update-form.php?id=<?php echo $rows['property_id'] ?>"
                                             class=" p-up property-detail-button" style="text-decoration: none;">

                                             Update
                                          </a>
                                          <a href="php/delete-property.php?id=<?php echo $rows['property_id'] ?>"
                                             onclick="return confirm('Are you sure you want to delete this property?');"
                                             class=" p-del property-detail-button" style="text-decoration: none;">

                                             delete
                                          </a>

                                       </div>
                                    </div>
                                 </div>
                                 <?php
                              }
                           } else {
                              echo "no data found";
                           }

                           ?>
                        </div>
                     </div>
                  </section>


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
   <script src="js/custom.js"></script>
   <!-- calendar file css -->
   <script src="js/semantic.min.js"></script>
   <script></script>
</body>

</html>