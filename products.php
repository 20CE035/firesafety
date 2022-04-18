<?php 
    include "admin/common/config.php";
    $demo=new config;
    $result=$demo->selectProduct();
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
      <title>Explore Saftey Products</title>
      <!-- Fav Icons -->
      <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
      <!-- Stylesheets -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/menu.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/flaticon.css">
      <link rel="stylesheet" href="assets/css/animate.css">
      <link rel="stylesheet" href="assets/css/leaflet.css">
      <link rel="stylesheet" href="assets/css/spacing.min.css">
      <!-- Main Style CSS -->
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="assets/css/responsive.css">
   </head>
   <body>
      <div class="page-wrapper">
         <!-- Preloader -->
         <div class="preloader"></div>
         <!--==================================================================== 
            Start Header area
            =====================================================================-->
         <?php include "common/header.php" ?>
         <!--==================================================================== 
            End Header area
            =====================================================================-->
         <!--==================================================================== 
            Start Page Banner Section
            =====================================================================-->
         <section class="page-banner overlay">
            <div class="container">
               <div class="banner-inner">
                  <h2 class="wow fadeInUp" data-wow-duration="1.5s">Saftey Products</h2>
                  <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Explore Saftey Products</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </section>
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="section-title">
                        <h2>Saftey <span>Products</span></h2>
                     </div>
                      </div>
                        
                  <div class="menu">
      <div class="food-items">
         <img src="https://m.media-amazon.com/images/I/41f-gI+Lf0L.jpg" height="330">
         <div class="details">
            <div class="details-sub">
               <h5>Ceasefire Gas Based Car & Home Fire Extinguisher (Red) - 1 kg</h5>
            </div>
            <button><a href="https://www.amazon.in/dp/B00OYQSXNM/ref=redir_mobile_desktop?_encoding=UTF8&aaxitk=981c6797aca6b7788f0328002232e3ea&hsa_cr_id=6413370970402&pd_rd_plhdr=t&pd_rd_r=fc51f01f-1c59-4045-9add-216a2780123f&pd_rd_w=hJBEI&pd_rd_wg=ImYpz&ref_=sbx_be_s_sparkle_mcd_asin_0_img">Get the product</a></button>
            </div>

      <img src="https://m.media-amazon.com/images/I/41IzblR8MlL.jpg" height="330">
         <div class="details">
            <div class="details-sub">
               <h5>Eco fire water types Fire Extinguisher (Red) - 9 kg</h5>
            </div>
            <button><a href="https://www.amazon.in/Eco-Fire-Water-Types-Extinguisher/dp/B01G8GSQ0A/ref=sr_1_2_sspa?crid=36JZC9OSZ4U2S&keywords=fire+safety+equipment&qid=1649401793&sprefix=fire+safety+%2Caps%2C500&sr=8-2-spons&psc=1&smid=AV315UJV0AZ0R&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFHT0xUQzFZVjQ2UzYmZW5jcnlwdGVkSWQ9QTAxOTE2MDgyWjZYT0RWOVdQM1YzJmVuY3J5cHRlZEFkSWQ9QTA2NzA4ODAyUkJEOVBSRkdWWko4JndpZGdldE5hbWU9c3BfYXRmJmFjdGlvbj1jbGlja1JlZGlyZWN0JmRvTm90TG9nQ2xpY2s9dHJ1ZQ==">Get the product</a></button>
            </div>

      <img src="https://m.media-amazon.com/images/I/71pG9gdH4gL._SY879_.jpg" height="330">
         <div class="details">
            <div class="details-sub">
               <h5>Eco Fire ABC Powder Type 2 Kg Fire Extinguisher (Red)</h5>
            </div>
            <button><a href="https://www.amazon.in/Eco-Fire-Powder-Type-Extinguisher/dp/B012NVOIH4/ref=sr_1_3_sspa?crid=36JZC9OSZ4U2S&keywords=fire+safety+equipment&qid=1649401793&sprefix=fire+safety+%2Caps%2C500&sr=8-3-spons&psc=1&smid=AV315UJV0AZ0R&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFHT0xUQzFZVjQ2UzYmZW5jcnlwdGVkSWQ9QTAxOTE2MDgyWjZYT0RWOVdQM1YzJmVuY3J5cHRlZEFkSWQ9QTAyNzg1ODUxT1NOU0pZR1U5QzQmd2lkZ2V0TmFtZT1zcF9hdGYmYWN0aW9uPWNsaWNrUmVkaXJlY3QmZG9Ob3RMb2dDbGljaz10cnVl">Get the product</a></button>
            </div>

      <img src="https://m.media-amazon.com/images/I/41iMWRlrLwL.jpg" height="330">
         <div class="details">
            <div class="details-sub">
               <h5>FMD fire Extinguisher 500ml Safety for Cars, Kitchen and House.</h5>
            </div>
            <button><a href="https://www.amazon.in/Extinguisher-500ml-Safety-Kitchen-House/dp/B08X3R2S35/ref=sr_1_6?crid=36JZC9OSZ4U2S&keywords=fire+safety+equipment&qid=1649401793&sprefix=fire+safety+%2Caps%2C500&sr=8-6">Get the product</a></button>
            </div>

      <img src="https://images-eu.ssl-images-amazon.com/images/I/51Momi0NZgL._SX300_SY300_QL70_FMwebp_.jpg" height="330">
         <div class="details">
            <div class="details-sub">
               <h5>SAFETY ONE ABC Powder Type Fire Extinguisher with Wall Mount Hook (6 Kg)</h5>
            </div>
            <button><a href="https://www.amazon.in/SAFETY-ONE-Powder-Extinguisher-Mount/dp/B082HT8P9B/ref=sr_1_8?crid=36JZC9OSZ4U2S&keywords=fire+safety+equipment&qid=1649401793&sprefix=fire+safety+%2Caps%2C500&sr=8-8">Get the product</a></button>
            </div>

      <img src="https://m.media-amazon.com/images/I/71dVlFZ9qpL._SX679_.jpg" height="330">
         <div class="details">
            <div class="details-sub">
               <h5>ECO FIRE Automatic Modular ABC Powder Type Fire Extinguisher (5 Kg)</h5>
            </div>
            <button><a href="https://www.amazon.in/ECO-FIRE-Automatic-Extinguisher-Capacity/dp/B07J51PHGK/ref=sr_1_32?crid=36JZC9OSZ4U2S&keywords=fire+safety+equipment&qid=1649401793&sprefix=fire+safety+%2Caps%2C500&sr=8-32">Get the product</a></button>
            </div>

      </div>
       </div>
            </div>
        </section>
      <?php include "common/footer.php"?>
      </div>
      <!--End pagewrapper-->
      <!-- jequery plugins -->
      <script src="assets/js/jquery-3.5.1.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/slick.min.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script src="assets/js/leaflet.min.js"></script>
      <script src="assets/js/appear.js"></script>
      <!-- Custom script -->
      <script src="assets/js/script.js"></script>
   </body>
</html>