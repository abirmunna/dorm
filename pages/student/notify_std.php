<?php
session_start();
include "../../db/db.php";
if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
}
?>
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
      margin-left: 320px;
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
        <br>  <br>
        <h1 style="color:#102c57">Notifications</h1>
          <?php


          $sql = "SELECT * FROM notification WHERE std_id= 18511071;";
          $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row


              echo "<table border='3'>
              <tr>
              <th>Student ID</th>
              <th>Message</th>
              <th>Time</th>
              <th>Date</th>
              </tr>";

              while($row = mysqli_fetch_array($result)){

              echo "<tr>";
              echo "<td>"  . $row['std_id'] . "</td>";
              echo "<td>" . $row['msg'] . "</td>";
              echo "<td>" . $row['time'] . "</td>";
              echo "<td>" . $row['date'] . "</td>";
              echo "</tr>";

              echo "</table>";

              //echo "Notification: " . $row["msg"]. "<br>";
            }
          } else {
            echo "No Notification";
          }
          mysqli_close($db);
          ?>
        </div>
      </div>
</body>
</html>
