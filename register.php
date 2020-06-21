<?php
include 'includes/header.php';
if(isset($_SESSION['UID'])){
  header('Location:index.php');
}


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



  <!--================Register Area =================-->
  <section class="login_part padding_top">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-6 col-md-6">
                <h2> <b style='color:black;'>Registration</b> </h2>
                <br>
                <h3>Basic Information</h3>
                <form class="row contact_form" id="reg_form" action="function/registration.php" method="post">
                  <div class="col-md-12 form-group p_star" style="text-align:center;">
                      <span id="message" style="color:red;"></span>
                  </div>
                  <div class="col-md-6 form-group p_star">
                    <input type="text" class="form-control" id="first" name="first" placeholder="First Name" required/>
                  </div>
                  <div class="col-md-6 form-group p_star">
                    <input type="text" class="form-control" id="last" name="last" placeholder="Last name" required/>
                  </div>
                  <div class="col-md-12 form-group p_star">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required/>
                  </div>
                  <div class="col-md-12 form-group p_star">
                    <input type="password" class="form-control" id="password" name="password" placeholder="password" required/>
                  </div>
                  <div class="col-md-12 form-group p_star" style='margin:20px;'>
                    By creating an account, you agree to our <a href="#">User Agreement</a>
                    and acknowledge reading our <a href="#">User Privacy Notice.</a>
                  </div>
                  <div class="col-md-12 form-group p_star" style="text-align:center;">
                    <button type="submit" name="submit" value="submit" class="btn_3">
                        Register
                    </button>
                  </div>
                  </form>
              </div>
              <div class="col-lg-6 col-md-6">
                  <div class="login_part_text text-center">
                      <div class="login_part_text_iner">
                          <h2>Already has an account??</h2>
                          <p>There are advances being made in science and technology
                              everyday, and a good example of this is the</p>
                          <a href="login.php" class="btn_3">Log in</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>


  <!--================Register Area =================-->

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
  <script src="customjs/validateregistration.js"></script>
  <script src="customjs/formstyle.js"></script>
</body>

</html>

<?php
//styling invalid input field
if(isset($_GET['message'])){
  if($_GET['message']=='fname'){
    echo "<script type='text/javascript'>errMessage('fname');</script>";
  } else if($_GET['message']=='lname'){
      echo "<script type='text/javascript'>errMessage('lname');</script>";
  } else if($_GET['message']=='email'){
    echo "<script type='text/javascript'>errMessage('email');</script>";
  } else if($_GET['message']=='pass'){
      echo "<script type='text/javascript'>errMessage('pass');</script>";
  }
}

 ?>
