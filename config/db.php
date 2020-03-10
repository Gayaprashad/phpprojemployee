<?php
  $conn = mysqli_connect('localhost','root','123456','employeeproj');

  if(mysqli_connect_errno()){
    echo "the database has failed to connect.This is the error number".mysqli_connect_errno();
    exit();
  }
  else{
    //echo "the database has connected";
  }
?>
