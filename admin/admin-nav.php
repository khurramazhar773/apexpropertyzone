<?php include 'auth_check.php'; ?>
<nav id="sidebar">
   <div class="sidebar_blog_1">
      <div class="sidebar-header">
         <div class="logo_section">
            <a href="index.php"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /></a>
         </div>
      </div>
   </div>
   <div class="sidebar_blog_2">
      <h4>Admin's Shortcuts</h4>
      <ul class="list-unstyled components">
         <li class="active">
            <a href="index.php"><i class="fas fa-home" style="color:  #F4C430;"></i> <span>Home</span></a>
         </li>

         <li>
            <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                  style="color: purple;" class="fas fa-chart-area"></i> <span>Property</span></a>
            <ul class="collapse list-unstyled" id="element">
               <li><a href="add-property.php">> <span>Add Property</span></a></li>
               <li><a href="update-property.php">> <span>update Property</span></a></li>
            </ul>
         </li>


         <li>
            <a href="contact.php">
               <i style="color: #c51e3a;" class="fas fa-address-book"></i> <span>Contact</span></a>
         </li>
         <li class="active">
            <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                  class="fas fa-blog" style="color: #4cbb17;"></i><span>Blog</span></a>
            <ul class="collapse list-unstyled" id="additional_page">
               <li>
                  <a href="add-blog.php">> <span>Add Blog</span></a>
               </li>
               <li>
                  <a href="update-blog.php">> <span>Update Blog</span></a>
               </li>
            </ul>
         </li>
         <li>
            <a href="booking.php">
               <i class="fa fa-paper-plane red_color"></i> <span>Booking</span></a>
         </li>
         <li class="active">
            <a href="#service_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                  style="color: purple;" class="fas fa-chart-area"></i> <span>Services</span></a>
            <ul class="collapse list-unstyled" id="service_page">
               <li>
                  <a href="crea_service.php">> <span>Add Service</span></a>
               </li>
               <li>
                  <a href="service.php">> <span>Update Service</span></a>
               </li>
            </ul>
         </li>
         <li>
            <a href="quote.php">
            <i style="color:  #F4C430;" class="fas fa-clipboard-list"></i> <span>Quote</span></a>
         </li>
      </ul>
   </div>
</nav>