<?php
$hostname = 'localhost';
$database = 'minor';
$userdb = 'root';
$password = '';

$con = mysqli_connect($hostname,$userdb,$password,$database);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
 ?>
