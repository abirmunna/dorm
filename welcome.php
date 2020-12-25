<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body class="w3-grey">
    <div class="w3-sidebar w3-bar-block w3-blue-gray " style="width:10%">
      <p class="w3-bar-item w3-xlarge">Menu</p>
      <a href="meal.php" class="w3-bar-item w3-button w3-hover-white w3-large">Meal</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-white w3-large">Notifications</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-white w3-large">Bills</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-white w3-large">Change Password</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-white w3-large">Report a Problem</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-white w3-large">Apply for New Room</a>
    </div>

    <div style="margin-left:10%">
      <div class="w3-container w3-teal">
        <h3>Welcome <?php
        if(isset($_SESSION['uname'])){
          echo($_SESSION['uname']);
        }
          else {
            header("location: index.php");
          }
         ?>
       </h3>
       <p align= "right"><a href="logout.php" class="w3-bar-item w3-button w3-green">logout</a></p>
     </div>
   </div>
   <div style="margin-left:10%" style="margin-top:10%">
     <div class="w3-container w3-center">
       <img src="welcome.jpg" class="w3-circle" alt="Alps">
       <marquee><p class="w3-light-blue w3-large">Welcome to BUP DORM.
         here are some nessesary files that will keep you up to date with dorm rules and some key information form new dorm-life.</p></marquee>
       <a href="#" class="w3-bar-item w3-button w3-blue w3-hover-white w3-large">Download Files</a>
    </div>
   </div>

  </body>
</html>
