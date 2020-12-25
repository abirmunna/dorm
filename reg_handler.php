<?php
  include_once 'db.php';

  $id = mysqli_real_escape_string($db, $_POST['bup_id']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $mail = mysqli_real_escape_string($db, $_POST['email']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);

  //encrypt password
  $de_pass = password_hash($pass, PASSWORD_DEFAULT);

  $sql = "INSERT INTO members(bup_id, name, email, pass) VALUES ('$id', '$name', '$mail', '$de_pass');";
  mysqli_query($db, $sql);

  header("location: reg.php?user_added_successfully.");
?>
