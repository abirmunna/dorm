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
      <h1 style="color:#102c57">Every week Meal Menu list</h1>
      <?php
        include '../../db/db.php';
          $sql = "SELECT * FROM menu";
          $result = mysqli_query($db, $sql);

          echo "<table border='3'>
          <tr>
          <th>day</th>
          <th>Breakfast Item</th>
          <th>lunch Item</th>
          <th>dinner Item</th>
          <th>Breakfast Prize(BDT)</th>
          <th>lunch Prize(BDT)</th>
          <th>dinner Prize(BDT)</th>
          </tr>";

          while($row = mysqli_fetch_array($result)){

          echo "<tr>";
          echo "<td>"  . $row['day'] . "</td>";
          echo "<td>" . $row['breakfast_item'] . "</td>";
          echo "<td>" . $row['lunch_item'] . "</td>";
          echo "<td>" . $row['dinner_item'] . "</td>";
          echo "<td>" . $row['breakfast_p'] . "</td>";
          echo "<td>" . $row['lunch_p'] . "</td>";
          echo "<td>" . $row['dinner_p'] . "</td>";
          echo "</tr>";
          }
          echo "</table>";
          mysqli_close($db);
      ?>
    </div>
  </div>

</body>
</html>
