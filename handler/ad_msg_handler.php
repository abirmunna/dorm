<?php
include_once '../db/db.php';

$id = mysqli_real_escape_string($db, $_POST['std_id']);
$message = mysqli_real_escape_string($db, $_POST['msg']);
$date = date("d/m/Y");
$time = date("h:i:sa");
echo $date;
echo $time;

$sql = "INSERT INTO notification(std_id, msg, d, t) VALUES ('$id','$message','$date','$time');";
mysqli_query($db, $sql);
 ?>
