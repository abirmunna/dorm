<?php
include_once '../db/db.php';

$id = mysqli_real_escape_string($db, $_POST['std_id']);
$message = mysqli_real_escape_string($db, $_POST['msg']);

$sql = "INSERT INTO notification(std_id, msg) VALUES ('$id','$message');";
mysqli_query($db, $sql);
echo $id;
echo $message;
/*$check = mysqli_num_rows($data);

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
} */
 ?>
