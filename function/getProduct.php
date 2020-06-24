<?php

  require_once 'dbcon.php';

  if(isset($_GET['ProductID'])){
    $sql = "SELECT * FROM `product` WHERE ProductID='".$_GET['ProductID']."'";
  } else {
   $sql = "SELECT * FROM `product`";
  }

  $result = mysqli_query($con,$sql);

  $allProducts = array();
  while($row = mysqli_fetch_assoc($result)){
    $product = array(
      "ProductID" => $row['ProductID'],
      "ProductName" => $row['ProductName'],
      "ProductCategory" => $row['ProductCategory'],
      "ProductColor" => $row['ProductColor'],
      "ProductQuantity" => $row['ProductQuantity'],
      "ProductImg" => $row['ProductImg'],
      "ProductImgType" => $row['ProductImgType'],
      "ProductPrice" => $row['ProductPrice'],
      "ProductDescription" => $row['ProductDescription']
    );
    array_push($allProducts, $product);
  }
  echo json_encode($allProducts);

 ?>
