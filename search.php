<?php
  require 'config/config.php';
  require 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script>
      function showSuggestion(str){
        if (str.length ==0){
          document.getElementById('output').innerHTML ='';
        }else{
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange= function(){
            if (this.readyState ==4 && this.status ==200){
              document.getElementById('output').innerHTML= this.responseText;
            }
          }
          xmlhttp.open("GET","suggest.php?n="+str, true);
          xmlhttp.send();
        }
      }
    </script>
  </head>
  <body>
  <?php include 'inc/navbar.php'; ?>
<div class="container">
  <h1>Search User</h1>
  <form>
    Search User:<input type="test" class="form-control" onkeyup="showSuggestion(this.value)">
  </form>
  <p><span id="output" style="font-weight:bold"></span> </p>
</div>
<?php include 'inc/footer.php'; ?>
