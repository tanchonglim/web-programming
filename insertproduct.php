<?php
require_once("all.php");

$sql = "SELECT max(ProductID) AS m FROM product";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$maxval = $row['m'];

if(isset($_POST['productid'])){
  $color = strtoupper($_POST['productcolor']);
  $name = $_FILES['productimg']['name'];
  $target_dir = "upload/";
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

 <form name="insertproduct" action="insertproduct.php" method="post" enctype="multipart/form-data" >
   <table class="table table-hower">
   <thead class="thead-dark">
   <tr>
     <th colspan="2">ADD NEW PRODUCT</th>
   </tr>
   </thead>
   <tr>
     <th><label for="productid"> Product ID: </label></th>
     <td><input name="productid" type="number" maxlength="10" class="input-group-text input-group" value="<?php echo $maxval+1?>" readonly></br></td>
   </tr>
   <tr>
     <th><label for="productname"> Product Name: </label></th>
     <td> <input name="productname" type="text" maxlength="100" required class="input-group-text input-group" ></br></td>
   </tr>
   <tr>
     <th><label for="productcategory"> Product Category: </label></th>
     <td> <select name="productcategory" class="custom-select" style="text-align-last: center;">
        <option value="Sofa">SOFA</option>
        <option value="Table and Desk">TABLE AND DESK</option>
        <option value="Bed">BED</option>
        <option value="Chair">CHAIR</option>
      </select></td>
   </tr>
   <tr>
     <th><label for="productcolor"> Product Color: </label></th>
     <td> <input name="productcolor" type="text" maxlength="50"  class="input-group-text input-group"></td>
   </tr>
   <tr>
     <th><label for="productprice"> Product Price(RM): </label></th>
     <td><input name="productprice" type="number" maxlength="10"  class="input-group-text input-group" step="0.01" min="0" max="100000000"></td>
   </tr>
   <tr>
     <th><label for="productquantity"> Product Quantity: </label></th>
     <td><input name="productquantity" type="number" maxlength="10"  class="input-group-text input-group"></td>
   </tr>
   <tr>
     <th><label for="productimg"> Product Image: </label></th>
     <td><input name="productimg" type="file"  class="input-group"></td>
   </tr>
   <tr>
     <th><label for="productdescription"> Description: </label></th>
     <td><textarea rows="20" cols="70" name="productdescription"  class="input-group" white-space="pre-wrap"></textarea></td>
   </tr>
   </table>
   <div align="center">
      <button type="submit" class="genric-btn primary-border circle">Insert</button>
   </div>
 </form>

<?php } ?>
