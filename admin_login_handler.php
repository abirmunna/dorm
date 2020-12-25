<?php
include_once 'db.php';
session_start();
$uname = mysqli_real_escape_string($db, $_POST['uname']);
$pass = mysqli_real_escape_string($db, $_POST['pass']);

$sql = "SELECT uname,pass FROM admin WHERE uname = '$uname';";
$data = mysqli_query($db, $sql);
$check = mysqli_num_rows($data);

if ($check > 0) {
  $get = mysqli_fetch_assoc($data);

  if($uname === $get['uname'] && password_verify($pass, $get['pass']))
  {
    $_SESSION['name'] = $get['uname'];
      header("location: admin.php");
  }
  else {
    header("location: admin_login.php");
  }
}
else {
    header("location: admin_login.php");
}
?>
