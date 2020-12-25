<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Meal</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body class="w3-grey">
    <div class="w3-sidebar w3-bar-block w3-blue-gray" style="width:10%">
      <p class="w3-bar-item w3-xlarge">Menu</p>
      <a href="welcome.php" class="w3-bar-item w3-button w3-hover-white w3-large">Home Page</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-white w3-large">Meal</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-white w3-large">Notifications</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-white w3-large">Bills</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-white w3-large">Change Password</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-white w3-large">Report a Problem</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-white w3-large">Apply for New Room</a>
    </div>

    <div style="margin-left:10%">
      <div class="w3-container w3-teal">
        <h3><?php
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

   <form class="w3-panel w3-card-4 w3-half w3-brown w3-round-xlarge w3-center" style="margin-left:15%" action="meal_handler.php" method="post">
     <h2>BUP ID No</h2>
      <input class="w3-input w3-border w3-animate-input w3-hover-light-blue" type="text" style="width:70%" name="bup_id">

      <h1>Select Your Meal Option</h1>
      <select class="w3-select w3-light-grey" name="meal">
      <option value="" disabled selected></option>
      <option value="1">1 Meal</option>
      <option value="2">2 Meal</option>
      <option value="3">3 Meal</option>
      <option value="0">Meal Off</option>
      </select>

      <h1>Add Guest Mill</h1>
      <select class="w3-select w3-light-grey" name="guest_meal">
      <option value="" disabled selected></option>
      <option value="1">1 Meal</option>
      <option value="2">2 Meal</option>
      <option value="3">3 Meal</option>
      </select>

     <h2>Please comment the reason if you have chosen "No Meal" or "1 Meal"</h2>
      <input class="w3-input w3-border w3-animate-input w3-hover-light-blue" type="text" style="width:70%" name="comment">
      <p><button class="w3-btn w3-teal w3-round-xlarge w3-hover-green w3-text-white" type="submit">Submit</button></p>
      <p><a href="meal.php" class="w3-btn w3-teal w3-round-xlarge w3-hover-green w3-text-white">Reset</a></p>
   </form>
  </body>
</html>
