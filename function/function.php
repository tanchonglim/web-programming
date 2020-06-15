<?php
require_once("all.php");

function goto1($to,$msg){
  echo "<script language =\"JavaScript\">alert(\"".$msg."\") \n window.location= \"".$to."\"</script>";
}

function goto2($to){
  echo "<script language =\"JavaScript\"> window.location= \"".$to."\"</script>";
}

 ?>
