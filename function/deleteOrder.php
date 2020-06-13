<?php

require_once 'dbcon.php';

if(isset($_GET['OrderID'])){
  $sql = "DELETE FROM `order` WHERE (`OrderID`='".$_GET['OrderID']."')";
  $result = mysqli_query($con,$sql);
  if($result){
    header('Location:../order.php?message=delsuccess');
  }
} else {
  header('Location:../index.php');
}


 ?>
