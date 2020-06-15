<?php
require_once('all.php');

if (isset($_POST['update'])) {

  $color = strtoupper($_POST['productcolor']);
  $sqlupdate="UPDATE `product` SET
              `ProductName` = '".$_POST['productname']."',
              `ProductCategory` = '".$_POST['productcategory']."',
              `ProductColor` = '".$color."',
              `ProductQuantity` = '".$_POST['productquantity']."',
              `ProductPrice` = '".$_POST['productprice']."',
              `ProductDescription` = '".$_POST['productdescription']."'
              WHERE `ProductID` = '".$_POST['productid']."'";

  if(isset($_FILES['productimg']['name']) && ($_FILES['productimg']['name']!="")){
    $sql = "SELECT * FROM `product` WHERE (`ProductID`='".$_POST['productid']."')";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $oldimagepath = $row['ProductImg'];
    $name = $_FILES['productimg']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir.$_FILES['productimg']['name'];

    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $extensions_arr = array("jpg","jpeg","png","gif");

    if(in_array($imageFileType,$extensions_arr)){
      unlink("upload/".$oldimagepath);

      $sqlupdate = "UPDATE `product` SET
                    `ProductImg` = '".$name."',
                    `ProductImgType`='".$imageFileType."'
                    WHERE `ProductID` = '".$_POST['productid']."'";
      move_uploaded_file($_FILES['productimg']['tmp_name'],$target_file);

    }


  }

  $result = mysqli_query($con,$sqlupdate);
  $to = "tblproduct.php";
  if($result>0){
    $msg = "Update successful";
  }else {
    $msg = "Update not successful";
  }
  goto1($to,$msg);
}

 ?>
