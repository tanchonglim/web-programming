<?php

require_once("all.php");
include("function/retrievedata.php");
include("function/update.php");
include("function/delete.php");

 ?>
 <form name="editproduct" action="editproduct.php" method="post" enctype="multipart/form-data">
   <table class="table table-hower">
   <thead class="thead-dark">
   <tr>
     <th colspan="2">EDIT PRODUCT</th>
   </tr>
   </thead>
   <tr>
     <th><label for="productid"> Product ID: </label></th>
     <td><input type="number" name="productid" value="<?php echo $row['ProductID']; ?>"  class="input-group-text input-group"  readonly></td>
   </tr>
   <tr>
     <th><label for="productname"> Product Name: </label></th>
     <td><input type="text" name="productname" value="<?php echo $row['ProductName'];?>" maxlength="100" class="input-group-text input-group" required></td>
   </tr>
   <tr>
     <th><label for="productcategory"> Product Category: </label></th>
     <td><select name="productcategory"  class="custom-select" style="text-align-last: center;">
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
     </select></td>
   </tr>
   <tr>
     <th><label for="productcolor"> Product Color: </label></th>
     <td><input name="productcolor" type="text" maxlength="50" value="<?php echo $row['ProductColor'];?>" class="input-group-text input-group" ></td>
   </tr>
   <tr>
     <th><label for="productprice"> Product Price(RM): </label></th>
     <td><input name="productprice" type="number" maxlength="10" value="<?php echo $row["ProductPrice"];?>" class="input-group-text input-group" step="0.01" min="0" max="100000000"></td>
   </tr>
   <tr>
     <th><label for="productquantity"> Product Quantity: </label></th>
     <td><input name="productquantity" type="number" maxlength="10" value="<?php echo $row['ProductQuantity'];?>" class="input-group-text input-group"></td>
   </tr>
   <tr>
     <th><label for="productimg"> Product Image: </label></th>
     <td>  <?php
        $image = $row['ProductImg'];
        $image_src = "upload/".$image;
         ?>
        <img src= "<?php echo $image_src; ?>" width="400" height="350" alt="image"></br></br>
      <input name="productimg" type="file" class="input-group"></td>
   </tr>
   <tr>
     <th><label for="productdescription"> Description: </label></th>
     <td><textarea rows="20" cols="70" name="productdescription" class="input-group"><?php echo $row['ProductDescription'];?></textarea></td>
   </tr>
   </table>
   <div align="center" margin-left='10px'>
     <button type="submit" class="genric-btn success-border circle" name="update">Update</button>
     <button type="submit" class="genric-btn danger-border circle" name="delete">Delete</button>
   </div>
 </form>
