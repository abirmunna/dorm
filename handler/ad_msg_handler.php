<?php
include_once '../db/db.php';

$id = mysqli_real_escape_string($db, $_POST['std_id']);
$message = mysqli_real_escape_string($db, $_POST['msg']);

$sql = "INSERT INTO notification(std_id, msg) VALUES ('$id','$message');";
mysqli_query($db, $sql);
 ?>
