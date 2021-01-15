<?php
include_once '../db/db.php';

$id = mysqli_real_escape_string($db, $_POST['std_id']);
$message = mysqli_real_escape_string($db, $_POST['msg']);

$sql = "INSERT INTO complaints(std_id, issue) VALUES ('$id','$message');";
mysqli_query($db, $sql);
 ?>
