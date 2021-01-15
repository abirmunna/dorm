<?php
include_once '../db/db.php';
session_start();
$id = mysqli_real_escape_string($db, $_POST['uname']);
$pass = mysqli_real_escape_string($db, $_POST['pwd']);
echo strlen($id);

if(strlen($id) == 4)
{
  $sql = "SELECT std_id,std_pass FROM login WHERE std_id = '$id';";
  $data = mysqli_query($db, $sql);
  $check = mysqli_num_rows($data);

  if ($check > 0) {
    $get = mysqli_fetch_assoc($data);

    if($id === $get['std_id'] && $pass === $get['std_pass'])
    {
      $_SESSION['id'] = $get['std_id'];
        header("location: ../pages/student/welcome.php");
    }
    else {
      header("location: ../pages/login.php?q=invalid");
    }
  }
  else {
      header("location: ../pages/login.php?q=invalid");
  }


}


else if (strlen($id)==1) {
  $sql = "SELECT stf_id,stf_pass FROM login WHERE stf_id = '$id';";
  $data = mysqli_query($db, $sql);
  $check = mysqli_num_rows($data);

  if ($check > 0) {
    $get = mysqli_fetch_assoc($data);

    if($id === $get['stf_id'] && $pass === $get['stf_pass'])
    {
      $_SESSION['id'] = $get['stf_id'];
        header("location: ../pages/staff/welcome.php");
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

    if($id === $get['ad_uname'] && $pass === $get['ad_pass'])
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
