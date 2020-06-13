<?php
   require_once 'dbcon.php';
   session_start();

  if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `user` WHERE user.email = '".$email."' AND user.password = '".$password."'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);

    echo $row['UID'];

    if($row['UID']==1){
      $_SESSION['UID'] = $row['UID'];
      header('Location:../index.php?message=admin');
    } else if($row['UID']!='') {
      $_SESSION['UID'] = $row['UID'];
      $_SESSION['fname'] = $row['firstname'];
      $_SESSION['lname'] = $row['lastname'];
      $_SESSION['email'] = $row['email'];
      header('Location:../index.php?message=welcome');
    } else {
      header('Location:../login.php?login=failed');
    }

  } else {
    header('Location:../login.php');
  }

 ?>
