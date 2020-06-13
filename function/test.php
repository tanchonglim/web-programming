<?php
require_once 'dbcon.php';


$sql = "SELECT * FROM `order` WHERE `OrderID`='".$OrderID."' ";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
echo $row['UID'];
?>
