<?php
 require_once 'dbcon.php';

session_start();
$uid = $_SESSION['UID'];

 if(isset($_GET['user'])){
   if($_GET['user']=='user'){// used by user to get his order list
      $sql = "SELECT * FROM `order` WHERE `UID`='".$uid."'";
   } else { //used by admin to get all order list
     $sql = "SELECT * FROM `order` ";
   }

   $result = mysqli_query($con,$sql);

   $allOrder = array();

   while($row = mysqli_fetch_assoc($result)){
     $order = array(
       "OID" => $row['OID'],
       "OrderID" => $row['OrderID'],
       "fname" => $row['fname'],
       "lname" => $row['lname'],
       "phone" => $row['phone'],
       "email" => $row['email'],
       "country" => $row['country'],
       "address" => $row['address'],
       "city" => $row['city'],
       "state" => $row['state'],
       "zip" => $row['zip'],
       "message" => $row['message'],
       "subtotal" => $row['subtotal'],
       "shipping" => $row['shipping'],
       "total" => $row['total'],
       "status" => $row['status'],
       "time" => $row['time'],
     );
     array_push($allOrder, $order);
   }

   echo json_encode($allOrder);

 } else if (isset($_GET['OrderID'])){

   $OrderID = $_GET['OrderID'];

   $allOrder = array();



   $sql2 = "SELECT product.ProductName AS pdn, productorder.quantity AS qty, product.ProductPrice As price FROM product
   INNER JOIN productorder ON
   productorder.productID = product.ProductID WHERE productorder.orderID = '".$OrderID."'";
   $result2 = mysqli_query($con,$sql2);
   $productList = array();
   while($row2 = mysqli_fetch_assoc($result2)){
     $product = array(
       "productName" => $row2['pdn'],
       "price" => $row2['price'],
       "quantity" => $row2['qty'],
     );
     array_push($productList, $product);
   }

   $sql = "SELECT * FROM `order` WHERE `OrderID`='".$OrderID."' ";

   $result = mysqli_query($con,$sql);
   $row = mysqli_fetch_assoc($result);

     $order = array(
       "OID" => $row['OID'],
       "OrderID" => $row['OrderID'],
       "fname" => $row['fname'],
       "lname" => $row['lname'],
       "phone" => $row['phone'],
       "email" => $row['email'],
       "country" => $row['country'],
       "address" => $row['address'],
       "city" => $row['city'],
       "state" => $row['state'],
       "zip" => $row['zip'],
       "message" => $row['message'],
       "subtotal" => $row['subtotal'],
       "shipping" => $row['shipping'],
       "total" => $row['total'],
       "status" => $row['status'],
       "time" => $row['time'],
       "products" => $productList,
     );
     array_push($allOrder, $order);


   echo json_encode($allOrder);

 } else{
   echo 'nothing to show';
 }




?>
