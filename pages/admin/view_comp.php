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
.background{
  height: 100vh;
  background-image: url("../../img/forget.jpg");
  background-size: cover;
  background-repeat: repeat;

}
.output{
  margin-left: 310px;
}
h1{
  text-align: center;
  margin-left: -150px;
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
      <?php include "ad_nav.php" ?>
    </div>
    <div class="output">
      <br>
      <h1 style="color:#102c57">Complaints</h1><br>
      <?php
        include '../../db/db.php';
          $sql = "SELECT * FROM complaints";
          $result = mysqli_query($db, $sql);

          echo "<table border='3'>
          <tr>
          <th>Complain ID</th>
          <th>Student ID</th>
          <th>Complaint</th>
          </tr>";

          while($row = mysqli_fetch_array($result)){

          echo "<tr>";
          echo "<td>"  . $row['com_id'] . "</td>";
          echo "<td>" . $row['std_id'] . "</td>";
          echo "<td>" . $row['issue'] . "</td>";
          echo "</tr>";
          }
          echo "</table>";
          mysqli_close($db);
      ?>
    </div>
  </div>

</body>
</html>
