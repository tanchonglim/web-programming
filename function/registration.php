<?php
   require_once 'dbcon.php';

  if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $fname = $_POST['first'];
    $lname = $_POST['last'];
    $password = $_POST['password'];

    $isAlphabet = "/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/";
    $isEmail = "/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/";

    //check for form input before update database 
    if(!preg_match($isAlphabet, $fname)){
      header('Location:../register.php?message=fname');
    } else if(!preg_match($isAlphabet, $lname)) {
      header('Location:../register.php?message=lname');
    } else if(!preg_match($isEmail, $email)) {
      header('Location:../register.php?message=email');
    } else if(strlen($password) < 5){
      header('Location:../register.php?message=pass');
    } else {
      $sql = "INSERT INTO `user` ( `email`, `password`, `firstname`, `lastname`) VALUES ('".$email."', '".$password."', '".$fname."','".$lname."')";
      $result = mysqli_query($con,$sql);

      if($result==1){
        header('Location:../login.php?register=success');
      } else {
        header('Location:../register.php?message=failed');
      }
    }

  } else {
    header('Location:../register.php');
  }

 ?>
