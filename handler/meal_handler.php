<?php
session_start();
include "../db/db.php";
if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
}
else {
  header("location:../pages/login.php");
}
?>
<?php
  $std_id = $_SESSION['id'];
  $brkfst = mysqli_real_escape_string($db, $_POST['breakfast']);
  $lunch = mysqli_real_escape_string($db, $_POST['lunch']);
  $dinner = mysqli_real_escape_string($db, $_POST['dinner']);
  $cost = 0;
  if($brkfst !=""){
    $cost = $cost + 30;
  }
  if($lunch !=""){
    $cost = $cost + 60;
  }
  if($dinner !=""){
    $cost = $cost + 60;
  }
  $sql = "SELECT total_cost FROM meal WHERE std_id = '$std_id';";
  $data = mysqli_query($db,$sql);
  $get = mysqli_fetch_array($data);
  $tcost = $cost + intval($get['total_cost']);
  echo $tcost;
  $sql = "UPDATE meal SET breakfast = '$brkfst',lunch = '$lunch', dinner = '$dinner',total_cost= '$tcost' WHERE std_id='$std_id';";
  mysqli_query($db,$sql);
?>
