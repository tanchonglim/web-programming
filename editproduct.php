<?php
include 'includes/header.php';
require_once("all.php");
if(!isset($_SESSION['UID'])){
  goto2('index.php');
}


include("function/retrievedata.php");
include("function/update.php");
include("function/delete.php");


 ?>

 <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script language="JavaScript" src="customjs/validate.js"></script>
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
                <p>Edit Product</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb start-->
    <div class="whole-wrap">
  		<div class="container box_1170"></br>
        <form name="editproduct" action="editproduct.php" method="post" enctype="multipart/form-data">
          <h3 class="mb-30">EDIT TABLE</h3>
          <table class="table table-hower">
            <p id="info" style="color:red; visibility:hidden;">*required</p>
          <tr>
            <th><label for="productid"> Product ID: </label></th>
            <td><input type="number" name="productid" value="<?php echo $row['ProductID']; ?>"  class="single-input"  readonly></td>
          </tr>
          <tr>
            <th><label for="productname"> Product Name<span id="name" style="visibility: hidden; color:red;">*</span>: </label></th>
            <td><input type="text" name="productname" value="<?php echo $row['ProductName'];?>" maxlength="100" class="single-input" required onblur="checkName(this)"></td>
          </tr>
          <tr>
            <th><label for="productcategory"> Product Category: </label></th>
            <td><div class="form-select" id="default-select">
              <select name="productcategory">
              <?php $category = $row['ProductCategory'];
                    if($category == "Sofa"){
                      $sofa = "selected";
                      $table = "";
                      $bed = "";
                      $chair = "";
                    }elseif ($category == "Table and Desk") {
                      $sofa = "";
                      $table = "selected";
                      $bed = "";
                      $chair = "";
                    }elseif ($category == "Bed") {
                      $sofa = "";
                      $table = "";
                      $bed = "selected";
                      $chair = "";
                    }elseif ($category == "Chair") {
                      $sofa = "";
                      $table = "";
                      $bed = "";
                      $chair = "selected";
                    }
               ?>
              <option value="Sofa" <?php echo $sofa ?>>SOFA</option>
              <option value="Table and Desk" <?php echo $table ?>>TABLE AND DESK</option>
              <option value="Bed" <?php echo $bed ?>>BED</option>
              <option value="Chair" <?php echo $chair ?>>CHAIR</option>
            </select></div></td>
          </tr>
          <tr>
            <th><label for="productcolor"> Product Color<span id="name" style="visibility: hidden; color:red;">*</span>: </label></th>
            <td><input name="productcolor" type="text" maxlength="50" value="<?php echo $row['ProductColor'];?>" class="single-input" required onblur="checkColor(this)"></td>
          </tr>
          <tr>
            <th><label for="productprice"> Product Price(RM)<span id="name" style="visibility: hidden; color:red;">*</span>: </label></th>
            <td><input name="productprice" type="number" maxlength="10" value="<?php echo $row["ProductPrice"];?>"  step="0.01" min="0" max="10000000000" class="single-input" required onblur="checkPrice(this)"></td>
          </tr>
          <tr>
            <th><label for="productquantity"> Product Quantity<span id="name" style="visibility: hidden; color:red;">*</span>: </label></th>
            <td><input name="productquantity" type="number" maxlength="10" value="<?php echo $row['ProductQuantity'];?>" class="single-input" required onblur="checkQuantity(this)"></td>
          </tr>
          <tr>
            <th><label for="productimg"> Product Image: </label></th>
            <td>  <?php
               $image = $row['ProductImg'];
               $image_src = "uploads/".$image;
                ?>
          <div id="img">   <img src= "<?php echo $image_src; ?>" width="400" height="350" alt="image"></div></br></br>
             <input name="productimg" id="productimg" type="file" onchange="checkImage2()"></td>
          </tr>
          <tr>
            <th><label for="productdescription"> Description: </label></th>
            <td><textarea rows="20" cols="70" name="productdescription" class="input-group" white-space="pre-wrap" style="background-color:#f9f9ff;"><?php echo $row['ProductDescription'];?></textarea></td>
          </tr>
          </table>
          <div align="center" margin-left='10px'>
            <button type="submit" class="genric-btn success-border circle" name="update">Update</button>
            <button type="submit" class="genric-btn danger-border circle" name="delete">Delete</button>
          </div>
        </form>
      </div>
    </div>

<?php
  include 'includes/footer.php';
   ?>
 </body>
