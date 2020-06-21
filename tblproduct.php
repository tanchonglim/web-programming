<?php
include 'includes/header.php';
if(!isset($_SESSION['UID'])){
  header('Location:index.php');
}

require_once("all.php");




$sql = 'SELECT * FROM `product`';
$result = mysqli_query($con,$sql);
$counter = 1;
$num_row = mysqli_num_rows($result);
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
                <p>Home - Product List</p>
   						</div>
   					</div>
   				</div>
   			</div>
   		</div>
   	</section>
   	<!-- breadcrumb start-->
  <div class="container box_1107">
    <div class="section-top-border">
      <div style="float:right;">
        <form name ="insertproduct" action="insertproduct.php" method="post">
        <div align ="center">
          <button type="submit" class="genric-btn success-border radius"> New Product</button>
        </div>
      </form>
    </div>
      <h3 class="mb-30">Product Table</h3>
      <div class="progress-table-wrap">
        <div class="progress-table">
          <div class="table-head">
            <div class="serial">No</div>
            <div class="percentage">Product</div>
            <div class="visit">Category</div>
            <div class="visit">Price(RM)</div>
            <div class="visit">Quantity</div>
            <div class="visit"> View Product </div>
            <div class="visit"> Eidt Product </div>
          </div>
          <?php   while($row = mysqli_fetch_assoc($result)) { ?>
          <div class="table-row">
            <div class="serial"><?php echo $counter; $counter++;?></div>
            <div class="percentage"><?php
            $image = $row['ProductImg'];
            $image_src = "uploads/".$image;
            //echo $image_src;
             ?>
            <img src= "<?php echo $image_src; ?>" width="100" height="70" alt="image">
            <?php echo $row['ProductName']; ?></div>
            <div class="visit"><?php echo $row['ProductCategory']; ?></div>
            <div class="visit"><?php echo $row['ProductPrice']; ?></div>
            <div class="visit"><?php echo $row['ProductQuantity']; ?></div>
            <div class="visit"><button type="button" class="genric-btn info-border radius"> <a href="viewproduct.php?productid=<?php echo $row['ProductID'];?>"><span style="color:black;">View</span> </a></button></div>
            <div class="visit"><button type="button" class="genric-btn primary-border radius"> <a href="editproduct.php?productid=<?php echo $row['ProductID'];?>"><span style="color:black;">Edit</span> </a></button></div>
          </div>
        <?php } ?>
        <?php   if($num_row == 0)
            echo "No Record Found.."; ?>
        </div>
      </div>
    </div>
  </div>

  <!--
  <?php
  include 'includes/footer.php';
   ?>-->
</body>
