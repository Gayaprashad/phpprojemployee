<?php
  require 'config/config.php';
  require 'config/db.php';

  if (isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $age = mysqli_real_escape_string($conn,$_POST['age']);
    $salary = mysqli_real_escape_string($conn,$_POST['salary']);
    $designation = mysqli_real_escape_string($conn,$_POST['designation']);
    $edit_id = mysqli_real_escape_string($conn,$_POST['edit_id']);

    $query =" UPDATE employee
              SET name='$name',
              age ='$age',
              salary = '$salary',
              designation ='$designation'
              WHERE eid ={$edit_id}";

    if(mysqli_query($conn,$query)){
      header('LOCATION:'.path.'/display.php');
    }
    else {
      echo "error:".mysqli_error($conn);
    }

  }
  else{
    echo 'the form is not yet submitted';
  }
  $id =mysqli_real_escape_string($conn,$_GET['id']);
  $sql= "SELECT * FROM EMPLOYEE where eid=".$id;

  $result= mysqli_query($conn,$sql);

  $emp = mysqli_fetch_assoc($result);
  //var_dump($emp);
  mysqli_free_result($result);

  mysqli_close($conn);

?>
<?php include 'inc/header.php'; ?>
  <div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" value="<?php echo $emp['name'];?>">
      </div>
      <div class="form-group">
        <label>Age</label>
        <input type="text" class="form-control" name="age" value="<?php echo $emp['age'];?>">
      </div>
      <div class="form-group">
        <label>Salary</label>
        <input type="text" class="form-control" name="salary" value="<?php echo $emp['salary'];?>">
      </div>
      <div class="form-group">
        <label>Designation</label>
        <input type="text" class="form-control" name="designation" value="<?php echo $emp['designation'];?>">
      </div>
      <input type="hidden" name="edit_id" value="<?php echo $emp['eid'];?>">
      <input type="submit" name="submit" value="submit">
    </form>
  </div>
<?php include 'inc/footer.php'; ?>
