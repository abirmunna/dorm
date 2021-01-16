<?php
include "../db/db.php";
$id = mysqli_real_escape_string($db, $_POST['std_id']);
$gmail = mysqli_real_escape_string($db, $_POST['std_email']);
$random = rand();
$random = strval($random);

$sql = "INSERT INTO pass_reset(random, email) VALUES('$random', '$gmail');";
$data = mysqli_query($db, $sql);

if ($gmail) {
  $to_email = $gmail;
  $subject = "Reset password for you dorm web application";
  $body = "Please go to this url to reset your password localhost/dorm/reset.php?q=" . $random;
  $headers = "From: dormitorymanagement719091@gmail.com";

  if (mail($to_email, $subject, $body, $headers)) {
      header("location:../pages/forget.php?q=email sent successfully.");
  } else {
      header("location:../pages/forget.php?q=mail sent error");
  }
}

?>
