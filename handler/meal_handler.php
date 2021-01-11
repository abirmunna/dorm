<?php
include_once 'db.php';
  session_start();
  $bup_id = mysqli_real_escape_string($db, $_POST['bup_id']);
  $meal = mysqli_real_escape_string($db, $_POST['meal']);
  $guest_meal = mysqli_real_escape_string($db, $_POST['meal']);
  $comment = mysqli_real_escape_string($db, $_POST['comment']);

  $sql = "INSERT INTO meal(bup_id,meal,guest_meal,comment) VALUES('$bup_id','$meal','$guest_meal','$comment');";
  mysqli_query($db,$sql);
  header("location: meal.php?info_added_successfully.");
 ?>
