<?php
require_once 'includes/header.php';
require_once 'function/function.php';
if(!isset($_SESSION['UID'])){
  goto2('login.php');
}

$UID ='';
$email = '';
$fname = '';
$lname = '';



$UID = $_SESSION['UID'];
$email = $_SESSION['email'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];

 ?>

<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>aranaz</title>
  <link rel="icon" href="img/favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- animate CSS -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- owl carousel CSS -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <!-- nice select CSS -->
  <link rel="stylesheet" href="css/nice-select.css">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="css/all.css">
  <!-- flaticon CSS -->
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- swiper CSS -->
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/price_rangs.css">
  <!-- style CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>


  <!--================Home Banner Area =================-->
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Product Checkout</h2>
              <p>Home <span>-</span>Cart<span>-</span>Checkout</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Checkout Area =================-->
  <section class="checkout_area padding_top">
    <div class="container">
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-12">
            <h3>Shipping Details</h3>
            <form class="row contact_form" action="./function/createOrder.php" method="post" id="checkout_form">
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="first" name="fname" placeholder="First name" value="<?php echo $fname;?>" required/>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="last" name="lname" placeholder="Last name" value="<?php echo $lname;?>" required/>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number" required/>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" value='<?php echo $email ?>' required/>
              </div>
              <div class="col-md-12 form-group p_star">
                <select class="country_select" name="country" id="country">
                  <option value="my">Malaysia</option>
                </select>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="address" name="address" placeholder="Address" required/>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="city" name="city" placeholder="Town/City" required/>
              </div>
              <div class="col-md-12 form-group p_star">
                <select class="country_select" id="state" name="state">
                  <option value="Johor">Johor</option>
                  <option value="Kedah">Kedah</option>
                  <option value="Kelantan">Kelantan</option>
                  <option value="Kuala Lumpur">Kuala Lumpur</option>
                  <option value="Labuan">Labuan</option>
                  <option value="Malacca">Malacca</option>
                  <option value="Negeri Sembilan">Negeri Sembilan</option>
                  <option value="Pahang">Pahang</option>
                  <option value="Perak">Perak</option>
                  <option value="Perlis">Perlis</option>
                  <option value="Penang">Penang</option>
                  <option value="Sabah">Sabah</option>
                  <option value="Sarawak">Sarawak</option>
                  <option value="Selangor">Selangor</option>
                  <option value="Terengganu">Terengganu</option>
                  </select>
              </div>
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP" required/>
              </div>

              <div class="col-md-12 form-group">
                <textarea class="form-control" name="message" id="message" rows="1"
                  placeholder="Order Notes"></textarea>
              </div>

          </div>
          <div class="col-lg-12">
            <div class="order_box">
              <h2>Your Order</h2>
              <ul class="list">
                <li id="addedProduct">
                  <a>Product
                    <span>Total</span>
                  </a>
                </li>
              </ul>
              <ul class="list list_2">
                <li>
                  <a>Subtotal
                    <span id="subTotal"></span>
                  </a>
                </li>
                <li>
                  <a>Shipping
                    <span>Flat rate: Rm0.00</span>
                  </a>
                </li>
                <li>
                  <a>Total
                    <span id="total"></span>
                  </a>
                </li>
              </ul>
              <div class="payment_item">
                <div class="radion_btn">
                  <input type="radio" id="f-option5" name="selector" checked disabled/>
                  <label for="f-option5">Cash On Delivery</label>
                  <div class="check"></div>
                </div>
                <p>
                  Please pay when product delivered to your doorstep.
                </p>
              </div>
              <div class="creat_account">
                <input type="checkbox" id="f-option4" checked />
                <label for="f-option4">I’ve read and accept the </label>
                <a href="#">terms & conditions*</a>
              </div>
              <input class="btn_3" style="width:100%;" type="submit" name="submit" value="Order">
            </div>
          </div>
        </div>
        <!--HIDDEN FORM FIELD -->
        <input type="text" name="UID" value="<?php echo $UID; ?>" hidden>
        <span id="productID"></span> <!-- use to add list of productID -->
        <input type="text" id="fsubtotal" name="subtotal" value="" hidden>
        <input type="text" name="shipping" value="5" hidden>
        <input type="text" id="ftotal" name="total" value="" hidden>

        <input type="text" id="product1" name="product1" value="" hidden><input type="text" id="product1-qty" name="product1-qty" value="" hidden>
        <input type="text" id="product2" name="product2" value="" hidden><input type="text" id="product2-qty" name="product2-qty" value="" hidden>
        <input type="text" id="product3" name="product3" value="" hidden><input type="text" id="product3-qty" name="product3-qty" value="" hidden>
        <input type="text" id="product4" name="product4" value="" hidden><input type="text" id="product4-qty" name="product4-qty" value="" hidden>
        <input type="text" id="product5" name="product5" value="" hidden><input type="text" id="product5-qty" name="product5-qty" value="" hidden>
        <input type="text" id="product6" name="product6" value="" hidden><input type="text" id="product6-qty" name="product6-qty" value="" hidden>
        <input type="text" id="product7" name="product7" value="" hidden><input type="text" id="product7-qty" name="product7-qty" value="" hidden>
        <input type="text" id="product8" name="product8" value="" hidden><input type="text" id="product8-qty" name="product8-qty" value="" hidden>
        <input type="text" id="product9" name="product9" value="" hidden><input type="text" id="product9-qty" name="product9-qty" value="" hidden>
        <input type="text" id="product10" name="product10" value="" hidden><input type="text" id="product10-qty" name="product10-qty" value="" hidden>


        <!-- HIDDEN FORM FIELD -->
        </form>
      </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->

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
  <script src='customjs/validatecheckout.js'></script>
  <script src="customjs/checkout.js"></script>

</body>

</html>
