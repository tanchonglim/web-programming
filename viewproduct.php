<?php
include 'includes/header.php';
require_once("all.php");
include("function/retrievedata.php");

if(!isset($_SESSION['UID'])){
  header('Location:index.php');
}
 ?>

 <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>aranoz</title>
 </head>

 <body>
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="breadcrumb_iner text-center">
              <div class="breadcrumb_iner_item">
                <h2>Product </h2>
                <p>View Product</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb start-->
    <div class="whole-wrap">
  		<div class="container box_1170"></br>
        <form name="viewproduct" action="viewproduct.php" method="post" enctype="multipart/form-data">
          <h3 class="mb-30">VIEW TABLE</h3>
          <table class="table table-hower">
          <thead class="thead-dark"></thead>
            <tr>
              <th><label for="productid"> Product ID: </label></th>
              <td> <?php echo $row['ProductID'] ;?></td>
            </tr>
            <tr>
              <th><label for="productname"> Product Name: </label></th>
              <td> <?php echo $row['ProductName'] ;?></td>
            </tr>
            <tr>
              <th><label for="productcategory"> Product Category: </label></th>
              <td><?php echo $row['ProductCategory']; ?></td>
            </tr>
            <tr>
              <th><label for="productcolor"> Product Color: </label></th>
              <td><?php echo $row['ProductColor']; ?></td>
            </tr>
            <tr>
              <th><label for="productprice"> Product Price(RM): </label></th>
              <td><?php echo $row['ProductPrice']; ?></td>
            </tr>
            <tr>
              <th><label for="productquantity"> Product Quantity: </label></th>
              <td><?php echo $row['ProductQuantity']; ?></td>
            </tr>
            <tr>
              <th><label for="productimg"> Product Image: </label></th>
              <td><img src="<?php echo "uploads/".$row['ProductImg'] ; ?>" width="350" height="280"></td>
            </tr>
            <tr>
              <th><label for="productdescription"> Description: </label></th>
              <td><textarea rows="20" cols="70" name="productdescription" class="input-group" readonly style="border:transparent;"><?php echo $row['ProductDescription'];?></textarea></td>
            </tr>
            </table>
            <div align="center">
                <button type="submit" class="genric-btn primary-border circle" name="back">Back</button>
            </div>
        </form>
      </div>
    </div>

<?php
  include 'includes/footer.php';
   ?>
 </body>
