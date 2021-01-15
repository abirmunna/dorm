<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<style>
.background{
  height: 100vh;
  background-image: url("../../img/home.jpg");
  background-size: cover;
  background-repeat: repeat;

}
.output{
  margin-left: 320px;
}
h1{

  text-align: center;
  margin-left: -20%;
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
      <h1 style="color:orange">Student monthly bill</h1>
      <?php
        include '../../db/db.php';
          $sql = "SELECT * FROM fee where std_id= 1000";
          $result = mysqli_query($db, $sql);

          echo "<table border='3'>
          <tr>
          <th>Fee ID</th>
          <th>Student ID</th>
          <th>Total Fee</th>
          <th>Month</th>
          <th>Status</th>
          </tr>";

          while($row = mysqli_fetch_array($result)){

          echo "<tr>";
          echo "<td>"  . $row['fee_id'] . "</td>";
          echo "<td>" . $row['std_id'] . "</td>";
          echo "<td>" . $row['total_fee'] . "</td>";
          echo "<td>" . $row['month'] . "</td>";
          echo "<td>" . $row['status'] . "</td>";
          echo "</tr>";
          }
          echo "</table>";
          mysqli_close($db);
      ?>
    </div>
  </div>

</body>
</html>
