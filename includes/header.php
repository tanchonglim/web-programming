<?php
session_start();
 ?>

<!--::header part start::-->
<header class="main_menu home_menu">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light">
                  <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse"
                      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                      aria-expanded="false" aria-label="Toggle navigation">
                      <span class="menu_icon"><i class="fas fa-bars"></i></span>
                  </button>

                  <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                      <ul class="navbar-nav">
                          <li class="nav-item">
                              <a class="nav-link" href="index.php">Home</a>
                          </li>

                          <?php
                          if(!isset($_SESSION['UID'])){

                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="list-product.php">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="order.php">Order</a>
                            </li>

                            <?php
                          } else {
                            if($_SESSION['UID']!='1'){
                              ?>
                              <li class="nav-item">
                                  <a class="nav-link" href="list-product.php">Product</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="order.php">Order</a>
                              </li>
                              <?php
                            } else {
                              ?>
                              <li class="nav-item">
                                  <a class="nav-link" href="list-product.php">Product</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="admin-order.php">Order</a>
                              </li>
                              <?php
                            }
                          }

                           ?>



                          <li class="nav-item">
                              <a class="nav-link" href="contact.php">Contact</a>
                          </li>
                          <li>
                            <div style="margin-left:200px;">
                            </div>
                          </li>
                          <?php
                            if(!isset($_SESSION['UID'])){
                           ?>
                          <li class="nav-item">
                              <a href="login.php" class="genric-btn primary circle" style=" margin:15px;">LOGIN</a>
                          </li>
                          <li class="nav-item">
                              <a href="register.php" class="genric-btn primary-border circle" style=" margin:15px;">Register</a>
                          </li>
                          <?php
                        } else {
                           ?>
                          <li class="nav-item">
                              <a href="./function/logout.php" class="genric-btn warning-border circle" style=" margin:15px;">Logout</a>
                          </li>
                          <?php
                        };
                           ?>
                      </ul>
                  </div>
                  <div class="hearer_icon d-flex">
                      <div class="dropdown cart">
                          <a class="dropdown-toggle" href="./cart.php" id="navbarDropdown3">
                              <i class="fas fa-cart-plus"><sup class="supNum">0</sup></i>

                          </a>


                      </div>
                  </div>
              </nav>
          </div>
      </div>
  </div>

</header>
<!-- Header part end-->
  <script src="js/jquery-1.12.1.min.js"></script>
<script src="customjs/miniCart.js"></script>
<script>

$(document).ready(function(){
  $(".supNum").html(localStorage.length);

});

</script>
