<?php
  require_once 'dbcon.php';

  if(isset($_GET['OrderID'])&&isset($_GET['status'])){
    $sql = "UPDATE `order` SET `status`='".$_GET['status']."' WHERE (`OrderID`='".$_GET['OrderID']."') LIMIT 1";
    $result = mysqli_query($con,$sql);

    if($result){
      header('Location:../admin-order.php?message=updatesuccess');
    } else {
      header('Location:../admin-order.php?message=updatefail');
    }
  } else {
    header('Location:../index.php');
  }

 ?>
