<?php
include_once '../db/db.php';
session_start();
$id = mysqli_real_escape_string($db, $_POST['std_id']);
$gmail = mysqli_real_escape_string($db, $_POST['std_email']);

$sql = "SELECT * FROM login WHERE std_id = '$id';";
$data = mysqli_query($db, $sql);
$row = mysqli_fetch_array($data);
if ($row['email'] == $gmail) {
  $to_email = $gmail;
  $subject = "Reset password for you dorm web application";
  $body = "your password is = " . $row['std_pass'];
  $headers = "From: dormitorymanagement719091@gmail.com";

  if (mail($to_email, $subject, $body, $headers)) {
      header("location:../pages/forget.php?q=email sent successfully.");
  } else {
      header("location:../pages/forget.php?q=Invalid email ID.");
  }
}
else{
  header("location:../pages/forget.php?q=Invalid email ID.");
}
?>
