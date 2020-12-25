<?php
include_once 'db.php';

$uname = "munna";
$pass = "ahmunna2222";
$de_pass = password_hash($pass, PASSWORD_DEFAULT);

$sql = "INSERT INTO admin(uname, pass) VALUES ('$uname','$de_pass');";
mysqli_query($db, $sql);
 ?>
