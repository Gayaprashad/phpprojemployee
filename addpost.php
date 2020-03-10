<?php
  require 'config/config.php';
  require 'config/db.php';
  if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $salary=mysqli_real_escape_string($conn,$_POST['salary']);
    $designation=mysqli_real_escape_string($conn,$_POST['designation']);
    $age=mysqli_real_escape_string($conn,$_POST['age']);

    $query ="INSERT INTO employee (name,salary,designation,age) values ('$name','$salary','$designation','$age')";

    if(mysqli_query($conn,$query)){
      header('Location:'.path.'');
    }else{
      echo"error".mysqli_error($conn);
    }
  }
?>
<?php include 'inc/header.php'; ?>
  <div class="container">
    <h1>Add Employee</h1>
      <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
          <label>Salary</label>
          <input type="text" name="salary" class="form-control">
        </div>
        <div class="form-group">
          <label>Designation</label>
          <input type="text" name="designation" class="form-control">
        </div>
        <div class="form-group">
          <label>Age</label>
          <input type="text" name="age" class="form-control">
        </div>
        <input type="submit" name="submit" value="submit" class="btn btn-primary">
      </form>
    </div>
  <?php include 'inc/footer.php'; ?>
