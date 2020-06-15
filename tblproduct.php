<?php
require_once("all.php");

$sql = 'SELECT * FROM `product`';
$result = mysqli_query($con,$sql);
$counter = 1;
$num_row = mysqli_num_rows($result);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
 	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Admin--Product</title>
 </head>

 <body>
   <form name ="insertproduct" action="insertproduct.php" method="post">
     <div align ="center" style="margin-top: 10;">
       <button type="submit" class="genric-btn success-border radius"> New Product</button>
     </div>
   </form>
<table class = "table">
  <thead class = "thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Price(RM)</th>
      <th scope="col">Quantity</th>
      <th scope="col">View Product</th>
      <th scope="col">Edit Product</th>
    </tr>
  </thead>
  <tbody>

    <?php
     while($row = mysqli_fetch_assoc($result)) {
       ?>
    <tr>
      <td><?php echo $counter; $counter++;?></td>
      <td><?php
      $image = $row['ProductImg'];
      $image_src = "upload/".$image;
      //echo $image_src;
       ?>
      <img src= "<?php echo $image_src; ?>" width="100" height="70" alt="image"></td>
      <td><?php echo $row['ProductName']; ?></td>
      <td><?php echo $row['ProductCategory']; ?></td>
      <td><?php echo $row['ProductPrice']; ?></td>
      <td><?php echo $row['ProductQuantity']; ?></td>
      <td><a href="viewproduct.php?productid=<?php echo $row['ProductID'];?>">View </td>
      <td><a href="editproduct.php?productid=<?php echo $row['ProductID'];?>">Edit </td>
    </tr>
  <?php }?>

  </tbody>
</table>
<?php   if($num_row == 0)
    echo "No Record Found.."; ?>
 </body>
 </html>
