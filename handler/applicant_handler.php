<?php
include_once '../db/db.php';

$id = mysqli_real_escape_string($db, $_POST['std_id']);
$room = mysqli_real_escape_string($db, $_POST['room']);


$sql = "SELECT * from registration WHERE std_id = $id;";
$result = mysqli_query($db, $sql);

$get = mysqli_fetch_array($result);

$name = $get['std_name'];
$email = $get['std_email'];
$year = $get['std_year'];
$dept = $get['std_dept'];
$address = $get['std_address'];
$contact = $get['std_contact'];
$blood = $get['std_blood'];
$gname = $get['std_gname'];
$gcontact = $get['std_gcontact'];

$query = "INSERT INTO student(std_id, std_name, std_email, std_year, std_dept, std_address, std_contact, std_blood, std_gname, std_gcontact, room_no)
VALUES ('$id','$name','$email','$year','$dept','$address','$contact','$blood','$gname','$gcontact','$room');";
mysqli_query($db, $query);

 ?>
