<?php
include_once '../db/db.php';
session_start();
$id = mysqli_real_escape_string($db, $_POST['std_id']);
$name = mysqli_real_escape_string($db, $_POST['std_name']);
$email = mysqli_real_escape_string($db, $_POST['std_email']);
$year = mysqli_real_escape_string($db, $_POST['std_year']);
$dept = mysqli_real_escape_string($db, $_POST['std_dept']);
$address = mysqli_real_escape_string($db, $_POST['std_address']);
$contact = mysqli_real_escape_string($db, $_POST['std_contact']);
$blood_grp = mysqli_real_escape_string($db, $_POST['std_blood']);
$gname = mysqli_real_escape_string($db, $_POST['std_gname']);
$gcontact = mysqli_real_escape_string($db, $_POST['std_gcontact']);

$sql = "INSERT INTO registration(std_id, std_name, std_email, std_year, std_dept, std_address, std_contact, std_blood, std_gname, std_gcontact)
        VALUES ('$id','$name','$email','$year','$dept','$address','$contact','$blood_grp','$gname','$gcontact');";
$data = mysqli_query($db, $sql);
$check = mysqli_num_rows($data);

/*if ($check > 0) {
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
 ?>*/
