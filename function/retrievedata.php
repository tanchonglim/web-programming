<?php
require_once("all.php");

if(isset($_GET['productid'])){
  $sqlview = "SELECT * FROM `product` WHERE (`ProductID` = '".$_GET['productid']."')";
  $result = mysqli_query($con,$sqlview);
  $row = mysqli_fetch_assoc($result);
}

if(isset($_POST['back'])){
  $to = 'tblproduct.php';
  goto2($to);
}

 ?>
