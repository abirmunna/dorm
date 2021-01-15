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
  margin-left: 300px;
}
h1{
  text-align: center;
    margin-left: -100px;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 80%;
  border: 4px solid #3c424d;
}

th, td {
  font-size: 13px;
  text-align: left;
  padding: 6px;
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
      <h1 style="color:#102c57">Student Information</h1>
      <?php
        include '../../db/db.php';
          $sql = "SELECT * FROM student";
          $result = mysqli_query($db, $sql);

          echo "<table border='3'>
          <tr>
          <th>Student ID</th>
          <th>Student Name</th>
          <th>Department</th>
          <th>Year</th>
          <th>Address</th>
          <th>Contact</th>
          <th>Email</th>
          <th>Blood</th>
          <th>Guardian's Name</th>
          <th>Guardian's Contact</th>
          <th>Room No</th>
          </tr>";

          while($row = mysqli_fetch_array($result)){

          echo "<tr>";
          echo "<td>"  . $row['std_id'] . "</td>";
          echo "<td>" . $row['std_name'] . "</td>";
          echo "<td>" . $row['std_dept'] . "</td>";
          echo "<td>" . $row['std_year'] . "</td>";
          echo "<td>" . $row['std_address'] . "</td>";
          echo "<td>" . $row['std_contact'] . "</td>";
          echo "<td>" . $row['std_email'] . "</td>";
          echo "<td>" . $row['std_blood'] . "</td>";
          echo "<td>" . $row['std_gname'] . "</td>";
          echo "<td>" . $row['std_gcontact'] . "</td>";
          echo "<td>" . $row['room_no'] . "</td>";
          echo "</tr>";
          }
          echo "</table>";
          mysqli_close($db);
      ?>
    </div>
  </div>

</body>
</html>
