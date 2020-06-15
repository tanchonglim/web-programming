<?php
require_once("all.php");
include("function/retrievedata.php");
 ?>

 <form name="viewproduct" action="viewproduct.php" method="post" enctype="multipart/form-data">
   <table class="table table-hower">
   <thead class="thead-dark">
   <tr>
     <th colspan="2">PRODUCT DETAIL</th>
   </tr>
   </thead>
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
     <td><img src="<?php echo "upload/".$row['ProductImg'] ; ?>" width="350" height="280"></td>
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
