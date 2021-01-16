<?php
session_start();
include "../../db/db.php";
if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
}
else {
  header("location:../login.php");
}
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <style media="screen">
  body{
    background: url("../../img/bk2.gif");
    background-size: cover;
    background-repeat: repeat;
  }
    .main{

      /*margin-left: 350px;*/
      width: 100%;
      font-size: 20px;
      margin-left: 30%;
      margin-right: 30%;
      background-size: cover;
    }

  </style>
<body>
  <!--speacial div.. do not touch it....:D-->
  <div>
  <?php include "ad_nav.php" ?>
  </div>
  <div class="main">
    <br><br>
    <h2 style="color: white" style="text-align: center">WELCOME ADMIN</h2>

  </div>
</body>
</html>
