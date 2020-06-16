<?php
session_start();
require_once 'dbcon.php';

if(isset($_GET['OrderID'])){
  $sql = "DELETE FROM `order` WHERE (`OrderID`='".$_GET['OrderID']."')";
  $result = mysqli_query($con,$sql);

  if($result){
    if($_SESSION['UID']=='1'){
      header('Location:../admin-order.php?message=delsuccess');
    } else {
      header('Location:../order.php?message=delsuccess');
    }

  } else {
    if($_SESSION['UID']=='1'){
      header('Location:../admin-order.php?message=delfail');
    } else {
      header('Location:../order.php?message=delfail');
    }
  }
} else {
  header('Location:../index.php');
}


 ?>
