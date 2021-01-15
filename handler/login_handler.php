<?php
include_once '../db/db.php';
session_start();
$id = mysqli_real_escape_string($db, $_POST['uname']);
$pass = mysqli_real_escape_string($db, $_POST['pwd']);

if(strlen($id) == 4)
{
  $sql = "SELECT std_id,std_pass FROM login WHERE std_id = '$id';";
  $data = mysqli_query($db, $sql);
  $check = mysqli_num_rows($data);

  if ($check > 0) {
    $get = mysqli_fetch_assoc($data);

    if($id === $get['std_id'] && password_verify($pass, $get['std_pass']))
    {
      $_SESSION['id'] = $get['std_id'];
      if (isset($_SESSION['id'])) {
        header("location: ../pages/student/welcome.php");
      }
    }
    else {
      header("location: ../pages/login.php?q=invalid");
    }
  }
  else {
      header("location: ../pages/login.php?q=invalid");
  }
}
else if($id) {
  $sql = "SELECT ad_uname,ad_pass FROM admin WHERE ad_uname = '$id';";
  $data = mysqli_query($db, $sql);
  $check = mysqli_num_rows($data);

  if ($check > 0) {
    $get = mysqli_fetch_assoc($data);

    if($id === $get['ad_uname'] && password_verify($pass, $get['ad_pass']))
    {
      $_SESSION['id'] = $get['ad_uname'];
        header("location: ../pages/admin/welcome.php");
    }
    else {
      header("location: ../pages/login.php?q=invalid");
    }
  }
  else {
      header("location: ../pages/login.php?q=invalid");
  }
}
