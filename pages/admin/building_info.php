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
  margin-top: 30px;
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
      <h1 style="color:#102c57">Building Information</h1><br>
      <?php
        include '../../db/db.php';
          $sql = "SELECT * FROM building_info";
          $result = mysqli_query($db, $sql);

          echo "<table border='3'>
          <tr>
          <th>Room No</th>
          <th>Capacity</th>
          <th>Status</th>
          </tr>";

          while($row = mysqli_fetch_array($result)){

          echo "<tr>";
          echo "<td>"  . $row['room_no'] . "</td>";
          echo "<td>" . $row['capacity'] . "</td>";
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
