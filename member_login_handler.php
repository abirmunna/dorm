<?php
include_once 'db.php';
session_start();
$id = mysqli_real_escape_string($db, $_POST['id']);
$pass = mysqli_real_escape_string($db, $_POST['pass']);

$sql = "SELECT bup_id,pass,name FROM members WHERE bup_id = '$id';";
$data = mysqli_query($db, $sql);
$check = mysqli_num_rows($data);

if ($check > 0) {
  $get = mysqli_fetch_assoc($data);

  if($id === $get['bup_id'] && password_verify($pass, $get['pass']))
  {
    $_SESSION['uname'] = $get['name'];
    $_SESSION['id'] = $get['bup_id'];
      header("location: welcome.php");
  }
  else {
    header("location: member_login.php");
  }
}
else {
    header("location: member_login.php");
}
 ?>
