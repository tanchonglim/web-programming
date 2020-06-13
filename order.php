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
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="css/all.css">
  <!-- flaticon CSS -->
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- swiper CSS -->
  <link rel="stylesheet" href="css/slick.css">
  <!-- style CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Order List </h2>
              <p>Home <span>-</span> Order List</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- orderlist start-->
<section class="padding_top">
  <div class="container">
      <h3 class="mb-30">Order List</h3>
        <ul style="font-size:25px;">
          <a id="all" class="genric-btn link-border" style="text-decoration:none;">All</a>
          <a id="new" class="genric-btn link-border" style="text-decoration:none;">New Order</a>
          <a id="ready" class="genric-btn link-border" style="text-decoration:none;">Ready To Ship</a>
          <a id="shipped" class="genric-btn link-border" style="text-decoration:none;">Shipped</a>
          <a id="completed" class="genric-btn link-border" style="text-decoration:none;">Completed</a>
        </ul>
        <br>

      <div class="progress-table-wrap">
        <div class="progress-table">
          <div class="table-head" id="orderHead">
            <div class="serial">Order ID</div>
            <div class="country">Products</div>
            <div class="visit">Total</div>
            <div class="visit">Status</div>
            <div class="percentage">Action</div>
          </div>
          <div class="" id="productsList">

          </div>



      </div>
    </div>
  </div>
</section>



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
  <script src="js/swiper.min.js"></script>
  <!-- swiper js -->
  <script src="js/masonry.pkgd.js"></script>
  <!-- particles js -->
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <!-- slick js -->
  <script src="js/slick.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/contact.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/price_rangs.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <script src="customjs/orderlist.js"> </script>
</body>

</html>
