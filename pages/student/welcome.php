<?php
session_start();
include "../../db/db.php";
if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  $sql = "SELECT * FROM student WHERE std_id = '$id';";
  $data = mysqli_query($db,$sql);
  $check = mysqli_num_rows($data);
  if ($check > 0) {
    $get = mysqli_fetch_array($data);
    $name = $get['std_name'];
  }
}
else {
  header("location:../login.php");
}
 ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <style media="screen">

    .main{
      width: 60%;
      font-size: 20px;
      margin-left: 30%;
      margin-right: 30%;
      background-size: cover;
    }
    .flip-card {
      background-color: transparent;
      width: 450px;
      height: 400px;
      perspective: 1000px;
      margin-left: 125px;
      margin-top: 30px;
    }

    .flip-card-inner {
      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 0.6s;
      transform-style: preserve-3d;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }

    .flip-card:hover .flip-card-inner {
      transform: rotateY(180deg);
    }

    .flip-card-front, .flip-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }

    .flip-card-front {
      background-color: #e81a32;
      opacity: 0.8;
      color: black;
    }

    .flip-card-back {
      background-color: #0d6d78;
      color: white;
      transform: rotateY(180deg);
    }
    .info{
      text-align: left;
      margin-left: 50px;
    }
    .container{
      background-color: transparent;
      width: 150px;
      height: 50px;
      perspective: 1000px;
      margin-left: 88%;
    }
    .button {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 10px;
      margin-top: 30px;
      cursor: pointer;
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
      border-radius: 30px;
    }
    .button2:hover {
      box-shadow: 0 12px 16px 0 #266e2f,0 17px 50px 0 #266e2f;
    }
  </style>
<body>

  <div>
  <?php include "std_nav.php" ?>
  </div>
  <div class="container">
  <a href="logout.php"><button class="button button2">Log Out</button></a>  
  </div>
  <div class="main">
    <br><br>
    <h2 style="color: orange" style="text-align: center">WELCOME TO DORM MANAGEMENT SYSTEM</h2>
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="../../img/avatar.svg" alt="Avatar" style="width:450px;height:400px;">
        </div>
        <div class="flip-card-back"><br>
          <h1><?php echo($name) ?></h1>
          <br>
          <div class="info">
            <p>ID: <?php echo($get['std_id']) ?></p>
            <p>Year: <?php echo($get['std_year']) . "rd" ?></p>
            <p>Department: <?php echo($get['std_dept']) ?></p>
            <p>Phone No: <?php echo($get['std_contact']) ?></p>
            <p>Email: <?php echo($get['std_email']) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
