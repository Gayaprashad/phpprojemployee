<?php
  require 'config/config.php';
  require 'config/db.php';
  $sql= "SELECT * FROM EMPLOYEE";

  $result= mysqli_query($conn,$sql);

  $emp = mysqli_fetch_all($result,MYSQLI_ASSOC);
  //var_dump($emp);
  mysqli_free_result($result);

  mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    table {
      table-layout: fixed;
      }
    </style>
  </head>
  <body>
    <?php include 'inc/navbar.php'; ?>
  <div class="container">
    <table class="table table-striped">
      <thead>
        <th class="col-sm-3">Eid</td>
        <th class="col-sm-3">Name</td>
        <th class="col-sm-3">Salary</td>
        <th class="col-sm-3">Designation</td>
        <th class="col-sm-3">Age</td>
      </thead>
      <tbody>
      <?php foreach ($emp as $empr): ?>
        <tr>
          <th scope="row" class="col-sm-3"><?php echo $empr['eid'] ?></th>
          <td class="col-sm-3"><?php echo $empr['name'] ?></td>
          <td class="col-sm-3"><?php echo $empr['salary'] ?></td>
          <td class="col-sm-3"><?php echo $empr['designation'] ?></td>
          <td class="col-sm-3"><?php echo $empr['age'] ?></td>
          <td class ="col-sm-3"> <a class="btn btn-primary" href="idata.php?id=<?php echo $empr['eid'];?>">Profile</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
    </table>
  </div>
<?php include 'inc/footer.php' ?>
