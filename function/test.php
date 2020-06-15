<?php
require_once 'dbcon.php';


$products = $_POST['product1'];
$quantity = $_POST['product1-qty'];

$_POST['OrderID']= "T00036";

$counter =1;

while($products!=''){
  $sql2 = "INSERT INTO `productorder` (`productID`, `orderID`, `quantity`) VALUES ('".$products."', '".$_POST['OrderID']."', '".$quantity."')";
  $result = mysqli_query($con,$sql2);
  $counter++;
  $next = "product".$counter;
  $products = $_POST[$next];
  $quantity = $_POST[$next.'-qty'];
}

?>
