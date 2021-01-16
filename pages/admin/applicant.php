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
<link rel="stylesheet" href="../../css/complaint.css">
<style>
.background{
  height: 100%;
  background-image: url("../../img/forget.jpg");
  background-size: cover;
  background-repeat: repeat;

}
.output{
  margin-left: 300px;
  margin-bottom: 10px;
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
.form{
  margin-left: 350px;
  width: 50%;
  margin-bottom: 60px;
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
      <h1 style="color:#102c57">Applicant Information</h1>
      <?php
        include '../../db/db.php';
          $sql = "SELECT * FROM registration";
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
            echo "</tr>";
          }
          echo "</table>";
          mysqli_close($db);
      ?>
    </div>
    <div class="form">
      <form name = "myForm" action="../../handler/applicant_handler.php" method="post" onsubmit = "return(validate());">
        <div class="form_wrap">
            <div class="input_wrap">
              <label id="std_id">Student ID</label>
              <input type="text" name="std_id" id="std_id" placeholder="Enter student Id">
            </div>
            <div class="input_wrap">
              <label id="msg">Select Room Number</label>
              <input type="text" name="room" id="room" placeholder="Enter room number">
            </div>

          <div class="input_wrap">
            <input type="submit" value="Approve" class="submit_btn">
          </div>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
