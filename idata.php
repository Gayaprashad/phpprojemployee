<?php
 require 'config/config.php';
 require 'config/db.php';
 $id =$_REQUEST['id'];
 $sql= "SELECT * FROM EMPLOYEE where eid=".$id;

 $result= mysqli_query($conn,$sql);

 $emp = mysqli_fetch_assoc($result);
 //var_dump($emp);
 mysqli_free_result($result);

 mysqli_close($conn);
?>
<?php include 'inc/header.php' ?>
  <div class="container">
    <table class="table">
      <tbody>
        <tr>
          <td>Name</td>
          <td><?php echo $emp['name']?></td>
        </tr>
        <tr>
          <td>Employee ID</td>
          <td><?php echo $emp['eid']?></td>
        </tr>
        <tr>
          <td>Designation</td>
          <td><?php echo $emp['designation']?></td>
        </tr>
        <tr>
          <td>Age</td>
          <td><?php echo $emp['age']?></td>
        </tr>
        <tr>
          <td>Salary</td>
          <td><?php echo $emp['salary']?></td>
        </tr>
      </tbody>
    </table>
    <a class ="btn btn-primary"href="edit.php?id=<?php echo $emp['eid'];?>">Edit</a>
    <a class="btn btn-danger"href="delete.php?id=<?php echo $emp['eid'];?>">Delete</a>
  </div>
<?php include 'inc/footer.php' ?>
