<?php
include 'includes/header.php';
if(!isset($_SESSION['UID'])){
  header('Location:index.php');
}

require_once("all.php");


$sql = "SELECT max(ProductID) AS m FROM product";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$maxval = $row['m'];

if(isset($_POST['productid'])){
  $color = strtoupper($_POST['productcolor']);
  $name = $_FILES['productimg']['name'];
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["productimg"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){

  // Insert record
  $insertsql = "INSERT INTO `product`(`ProductID`,`ProductName`,`ProductCategory`,`ProductColor`,`ProductQuantity`,`ProductImg`,`ProductImgType`,`ProductPrice`,`ProductDescription`)
  VALUES ('".$_POST['productid']."','".$_POST['productname']."','".$_POST['productcategory']."','".$color."','".$_POST['productquantity']."','".$name."','".$imageFileType."','".$_POST['productprice']."','".$_POST['productdescription']."')";
  $result = mysqli_query($con,$insertsql);

  // Upload file
  move_uploaded_file($_FILES['productimg']['tmp_name'],$target_dir.$name);

 }
  if($result>0){
    $msg = "Insert successful";
  }else {
    $msg = "Insert not successful";
  }
  $to = 'tblproduct.php';
  goto1($to,$msg);
}else {


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
          <div class="col-lg-12">
            <div class="breadcrumb_iner text-center">
              <div class="breadcrumb_iner_item">
                <h2>Admin </h2>
                <h2>Insert Product</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb start-->
    <div class="whole-wrap">
  		<div class="container box_1170"></br>
        <form name="insertproduct" action="insertproduct.php" method="post" enctype="multipart/form-data" >
          <h3 class="mb-30">INSERT TABLE</h3>
          <table class="table table-hower">
          <p id="info" style="color:red; visibility:hidden;">*required</p>
          <tr>
            <th><label for="productid"> Product ID: </label></th>
            <td><input name="productid" type="number" maxlength="10" class="single-input" value="<?php echo $maxval+1?>" readonly></br></td>
          </tr>
          <tr>
            <th><label for="productname"> Product Name<span id="name" style="visibility: hidden; color:red;">*</span>:</label></th>
            <td> <input name="productname" type="text" maxlength="100" required class="single-input" onblur="checkName(this)"></br></td>
          </tr>
          <tr>
            <th><label for="productcategory"> Product Category: </label></th>
            <td> <div class="form-select" id="default-select">
              <select name="productcategory">
               <option value="Sofa">SOFA</option>
               <option value="Table and Desk">TABLE AND DESK</option>
               <option value="Bed">BED</option>
               <option value="Chair">CHAIR</option>
             </select></div></td>
          </tr>
          <tr>
            <th><label for="productcolor"> Product Color: <span id="color" style="visibility: hidden; color:red;">*</span></label></th>
            <td> <input name="productcolor" type="text" maxlength="50"  class="single-input" required onblur="checkColor(this)"></td>
          </tr>
          <tr>
            <th><label for="productprice"> Product Price(RM): <span id="price" style="visibility: hidden; color:red;">*</span></label></th>
            <td><input name="productprice" type="number" maxlength="10"  class="single-input" step="0.01" min="0" max="10000000000" required onblur="checkPrice(this)"></td>
          </tr>
          <tr>
            <th><label for="productquantity"> Product Quantity: <span id="quantity" style="visibility: hidden; color:red;">*</span></label></th>
            <td><input name="productquantity" type="number" maxlength="10"  class="single-input" required onblur=checkQuantity(this)></td>
          </tr>
          <tr>
            <th><label for="productimg"> Product Image: <span id="image" style="visibility: hidden; color:red;">*</span></label></th>
            <td><input name="productimg" type="file" id="productimg" required onchange="checkImage()"></br></br>
                <div id="showimg"></div>
            </td>
          </tr>
          <tr>
            <th><label for="productdescription"> Description: </label></th>
            <td><textarea rows="20" cols="70" name="productdescription"  class="input-group" white-space="pre-wrap" style="background-color:#f9f9ff;"></textarea></td>
          </tr>
          </table>
          <div align="center">
             <button type="submit" class="genric-btn primary-border circle">Insert</button>
          </div>

        </form>
      </div>
    </div>

<?php }
  include 'includes/footer.php';
   ?>
 </body>
