<?php
  require 'config/db.php';
  $sql= "SELECT * FROM EMPLOYEE";

  $result= mysqli_query($conn,$sql);

  $emp = mysqli_fetch_all($result,MYSQLI_ASSOC);
  //var_dump($emp);
  mysqli_free_result($result);

  mysqli_close($conn);
  $q=$_REQUEST['n'];
  $suggestion ="";
  if ($q!==""){
    $q = strtolower($q);
    $l= strlen($q);
    //echo "<br>";
    //echo $l;
    foreach($emp as $empr){
      $name = strtolower($empr['name']);
      //var_dump($empr);
      //echo $empr['name']."<br>";
      //echo$q;
      $id= $empr['eid'];
      if(strcmp($name,$q)==0){
        //echo 'Match';
        //echo $empr['name']."<br>";
        /*if($suggestion===''){
          $suggestion =$empr['name'];
        }else{
            $suggestion.= $empr['name'];
        }*/
        /*$flag=1;
        for ($i = 0; isset($empr['name'][$i]); $i++){
            if($empr['name'][$i] !== $q[$i]){
              $flag=0;
              echo 'no match';
            }
        }
        if ($flag == 1){
          $suggestion =$empr['name'];
        }
        */
        echo "Suggestion :".$empr['name']."<br>";
        echo "Profile : <a class=\"btn btn-primary\" href=\"idata.php?id=".$id."\">".$empr['name']."</a>";
      }
    }
  }

  //echo $suggestion === '' ?"No suggestion" :$suggestion;
?>
