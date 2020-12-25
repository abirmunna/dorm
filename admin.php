<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
  </head>
  <body>
    <h1>Welcome <?php
    if(isset($_SESSION['name'])){
      echo($_SESSION['name']);
    }
      else {
        header("location: index.php");
      }
      ?>
    </h1>
     <br>
     <a href="logout.php" class="logout">Log Out</a>
  </body>
</html>
