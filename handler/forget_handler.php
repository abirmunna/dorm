<?php
include_once '../db/db.php';
session_start();
$id = mysqli_real_escape_string($db, $_POST['std_id']);
$gmail = mysqli_real_escape_string($db, $_POST['std_gname']);

$sql = "SELECT std_id FROM student WHERE std_id = '$id';";
$data = mysqli_query($db, $sql);
$check = mysqli_num_rows($data);

if ($check > 0) {
  $get = mysqli_fetch_assoc($data);

  if($id === $get['std_id'] && $pass === $get['std_pass'])
  {
    $_SESSION['id'] = $get['std_id'];
      header("location: ../pages/welcome.php");
  }
  else {
    header("location: login.php");
  }
}
else {
    header("location: login.php");
}
 ?>
