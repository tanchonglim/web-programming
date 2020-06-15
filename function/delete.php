<?php
require_once("all.php");

if (isset($_POST['delete'])) {
  $sqldelete = "DELETE FROM `product` WHERE `ProductID` = '".$_POST['productid']."'";
  $result = mysqli_query($con,$sqldelete);
  $to = "tblproduct.php";
  if($result>0){
    $msg = "Delete successful";
  }else {
    $msg = "Delete not successful";
  }
  goto1($to,$msg);
}

 ?>
