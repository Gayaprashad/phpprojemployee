<?php
  require 'config/config.php';
  require 'config/db.php';
  $id= mysqli_real_escape_string($conn,$_GET['id']);

  $query =" DELETE FROM employee WHERE eid ={$id}";

  if(mysqli_query($conn,$query)){
    header('LOCATION:'.path.'');
  }else{
    echo 'error :'.mysqli_error($conn);
  }
?>

<?php include 'inc/header.php'; ?>

<?php include 'inc/footer.php'; ?>
