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
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
  <style>
  .main{
    margin-left: 350px;
    width: 50%;
    background:#86f7e2;
  }

  </style>
</head>
<body>

  <?php
  include "std_nav.php"
   ?>
   <br>
   <br>
   <br>
   <br>
   <br>
<div class="main">
  <br>
  <br>

  <form class="w3-container w3-card-4" action="../../handler/meal_handler.php" method="post">
    <h2>Select Meal</h2>
    <p>
    <input name="breakfast" class="w3-check" type="checkbox">
    <label>Breakfast</label></p>
    <p>
    <input name="lunch" class="w3-check" type="checkbox">
    <label> Lunch</label></p>
    <p>
    <input name="dinner" class="w3-check" type="checkbox">
    <label>Dinner</label></p>
    <br>
    <button type="submit" name="button">Submit </button>
    <br>
    <br>
  </form>
</div>


</div>
</body>
</html>
