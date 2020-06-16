<?php
include 'includes/header.php';
 ?>

<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>aranoz</title>
  <link rel="icon" href="img/favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- animate CSS -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- owl carousel CSS -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/lightslider.min.css">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="css/all.css">
  <!-- flaticon CSS -->
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- style CSS -->
  <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/snackbar.css">
</head>

<body>

  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Shop Single</h2>
              <p>Home <span>-</span> Shop Single</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->
  <!--================End Home Banner Area =================-->

  <!--================Single Product Area =================-->
  <input type="text" id="ProductID" value="<?php
  if(isset($_GET['ProductID'])){
    echo $_GET['ProductID'];
  }
   ?>" hidden>
  <div class="product_image_area section_padding">
    <div class="container">
      <div class="row s_product_inner justify-content-between">
        <div class="col-lg-7 col-xl-7">
          <div class="product_slider_img">
            <div id="vertical">
              <div data-thumb="img/product/single-product/product_1.png">
                <img id= "productimg" alt="product image" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xl-4">
          <div class="s_product_text">
            <h3><span id="productname">name</span> </h3>
            <h2>RM <span id="productprice"></span> </h2>
            <ul class="list">
              <li>
                <a class="active" href="#">
                  <span>Category</span> : <span id="productcategory"></span> </a>
              </li>
              <li>
                <a> <span>Availibility</span> : <span id="productquantity"></span> </a>
              </li>
              <li>
                 <a> <span>Color</span> : <span id="productcolor"></span> </a>
              </li>
            </ul>
            <p id="productdescription">

            </p>
            <div class="card_area d-flex justify-content-between align-items-center">
              <div class="product_count">
                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                <input id="buyQty" class="input-number" type="text" value="1" min="0" max="10">
                <span class="number-increment"> <i class="ti-plus"></i></span>
              </div>
              <a style="cursor: pointer" id="addtocart" class="btn_3">add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      <div id="snackbar">Product added to cart !</div>
  <!--================End Single Product Area =================-->




<?php

include 'includes/footer.php';
 ?>

  <!-- jquery plugins here-->
  <!-- jquery -->
  <script src="js/jquery-1.12.1.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- easing js -->
  <script src="js/jquery.magnific-popup.js"></script>
  <!-- swiper js -->
  <script src="js/lightslider.min.js"></script>
  <!-- swiper js -->
  <script src="js/masonry.pkgd.js"></script>
  <!-- particles js -->
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <!-- slick js -->
  <script src="js/slick.min.js"></script>
  <script src="js/swiper.jquery.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/contact.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/stellar.js"></script>
  <!-- custom js -->
  <script src="js/theme.js"></script>
  <script src="js/custom.js"></script>
  <script src="customjs/single-product.js"></script>
</body>

</html>
