<?php
session_start();
include "../../db/db.php";
if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
}
else {
  header("location:../login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<style>
.output{
  margin-left: 350px;
}
h1{
  text-align: center;
  margin-left: -350px;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 80%;
  border: 4px solid #3c424d;
}

th, td {
  text-align: left;
  padding: 8px;
  border: 3px solid #3c424d;

}

tr:nth-child(even){background-color: #a9bbdb}
tr:nth-child(odd){background-color: #d5e0f2}

</style>
</head>
<body>
  <div class="background">
    <div>
      <?php include "std_nav.php" ?>
    </div>
    <div class="output">
      <br>
      <h1 style="color:orange">Notification</h1>
      <?php

          $sql = "SELECT * FROM notification WHERE std_id=18511071";
          $result = mysqli_query($db, $sql);

          echo "<table border='3'>
          <tr>
          <th>Student ID</th>
          <th>Message</th>
          <th>Date</th>
          <th>Time</th>
          </tr>";

          while($row = mysqli_fetch_array($result)){

          echo "<tr>";
          echo "<td>"  . $row['std_id'] . "</td>";
          echo "<td>" . $row['msg'] . "</td>";
          echo "<td>" . $row['date'] . "</td>";
          echo "<td>" . $row['time'] . "</td>";
          echo "</tr>";
          }
          echo "</table>";

      ?>
    </div>
  </div>

</body>
</html>
