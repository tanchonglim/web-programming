<?php
  require_once 'dbcon.php';
  date_default_timezone_set("Asia/Singapore");

  if(isset($_POST['submit'])){

    $sql = "SELECT MAX(order.OID) AS OID FROM `order`";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $OID = $row['OID'] + 1 ;

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $message = $_POST['message'];
    $UID = $_POST['UID'];
    $subtotal = $_POST['subtotal'];
    $shipping = $_POST['shipping'];
    $total = $_POST['total'];
    $status = 'new order';
    $time = date("Y-m-d H:i:s ",time());

    if($OID<10){
      $OrderID = "T0000".$OID;
    } else if($OID <100){
      $OrderID = "T000".$OID;
    }


    $sql = "INSERT INTO `order` ( `UID`, `OrderID`, `fname`, `lname`, `phone`, `email`,
    `country`, `address`, `city`, `state`, `zip`, `message`, `subtotal`, `shipping`, `total`, `status`, `time`)
    VALUES ( '".$UID."', '".$OrderID."', '".$fname."', '".$lname."', '".$phone."', '".$email."', '".$country."',
    '".$address."', '".$city."', '".$state."', '".$zip."', '".$message."', '".$subtotal."', '".$shipping."', '".$total."', '".$status."', '".$time."')";

    $result = mysqli_query($con,$sql);

// store relation between product and order
    $products = $_POST['product1'];
    $quantity = $_POST['product1-qty'];

    $counter =1;

    while($products!=''){
      $sql2 = "INSERT INTO `productorder` (`productID`, `orderID`, `quantity`) VALUES ('".$products."', '".$OrderID."', '".$quantity."')";
      $result = mysqli_query($con,$sql2);
      $counter++;
      $next = "product".$counter;
      $products = $_POST[$next];
      $quantity = $_POST[$next.'-qty'];
    }
// end
    if ($result){
      header('Location:../confirmation.php?OrderID='.$OrderID);
    } else {
      header('Location:../checkout.php?message=error');
    }

  }

 ?>
